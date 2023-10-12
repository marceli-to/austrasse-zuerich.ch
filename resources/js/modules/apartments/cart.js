import CtaButton from '../cta.js';

const Cart = (function() {
  
  // OPTIONS AND VARIABLES
  const selectors = {
    body: 'body',
    apartment: '[data-apartment]',
    isoItem: '[data-iso-item]',
    table: '[data-cart-table] tbody',
    cart: '[data-cart]',
    btns: {
      clear: '[data-cart-clear]',
      hide: '[data-cart-hide]',
      toggle: '[data-cart-toggle]',
    }
  };

  const cartType = document.querySelector(selectors.cart) ? document.querySelector(selectors.cart).dataset.cart : null;


  // METHODS
  const initialize = function() {
    if (!_isMobile()) {
      bind();
    }
  };

  const bind = function() {

    // load cart from local storage
    load();

    // add click event for apartment
    document.querySelectorAll(selectors.apartment).forEach((apartment) => {
      apartment.addEventListener('click', function(e) {
        if (e.target.tagName != 'TD' || apartment.dataset.state == 'rented') return;
        add(apartment);
      });
    });

    // add click event for iso
    document.querySelectorAll(selectors.isoItem).forEach((isoItem) => {
      isoItem.addEventListener('click', function() {
        if (isoItem.dataset.isoItem != '') {
          const table = document.querySelector('table[data-apartments]');
          const apartment = table.querySelector(`tr[data-number="${isoItem.dataset.isoItem}"]`);
          if (apartment) {
            add(apartment)
          }
        }
      });
    });

    // add click event for clear button
    if (document.querySelector(selectors.btns.clear)) {
      document.querySelector(selectors.btns.clear).addEventListener('click', function() {
        clear();
      });
    }

    // add click event for hide button
    if (document.querySelector(selectors.btns.hide)) {
      document.querySelectorAll(selectors.btns.hide).forEach((btn) => {
        btn.addEventListener('click', function() {
          toggle();
        });
      });
    }

    // add click event for toggle button
    if (document.querySelector(selectors.btns.toggle)) {
      document.querySelector(selectors.btns.toggle).addEventListener('click', function() {
        toggle();
      });
    }

  };

  const add = (apartment) => {
    // clone apartment and add to cart if not already there
    const apartmentClone = apartment.cloneNode(true);
    const table = document.querySelector(selectors.table);

    // check for existing row in table and abort if found
    if (table.querySelector(`tr[data-number="${apartment.dataset.number}"]`)) {
      show();
      return;
    }

    // remove classes
    apartmentClone.classList.remove(
      'hover:cursor-pointer',
      'hover:bg-olive',
      'hover:bg-opacity-20',
      'transition-all',
      'is-highlighted'
    );

    // remove data attributes
    apartmentClone.removeAttribute('data-apartment');

    // save clone in local storage
    save(apartmentClone);

    // add clone to table
    table.appendChild(apartmentClone);
    CtaButton.hide();
    show();

  };

  const clear = () => {
    const table = document.querySelector(selectors.table);
    table.innerHTML = '';
    localStorage.removeItem(cartType);
    CtaButton.show();
    hide();
  };

  const show = (minimize = false) => {
    const cart = document.querySelector(selectors.cart);
    cart.classList.remove('hidden');
    cart.classList.remove('is-minimized');
    if (minimize) {
      cart.classList.add('is-minimized');
    }
  };

  const hide = () => {
    const cart = document.querySelector(selectors.cart);
    cart.classList.add('is-minimized');
    cart.classList.add('hidden');
  };

  const toggle = () => {
    const cart = document.querySelector(selectors.cart);
    cart.classList.toggle('is-minimized');
  };

  const load = () => {
    const cart = JSON.parse(localStorage.getItem(cartType)) || [];
    const table = document.querySelector(selectors.table);
    cart.forEach((item) => {
      table.innerHTML += item;
    });

    // show cart if not empty
    if (cart.length > 0) {
      CtaButton.hide();
      show(true);
    }
  }

  const save = (item) => {
    let cart = JSON.parse(localStorage.getItem(cartType)) || [];
    cart.push(item.outerHTML);
    localStorage.setItem(cartType, JSON.stringify(cart));
  };

  const _isMobile = function() {
    return (window.matchMedia('(max-width: 700px)').matches || window.innerWidth <= 700) && ('ontouchstart' in window || navigator.maxTouchPoints);
  };

  // RETURN PUBLIC METHODS
  return {
    init: initialize,
  };
})();

// Initialize
Cart.init();
