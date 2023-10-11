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
    }
  };


  // METHODS
  const initialize = function() {
    if (!_isMobile()) {
      bind();
    }
  };

  const bind = function() {

    // add click event for apartment
    document.querySelectorAll(selectors.apartment).forEach((apartment) => {
      apartment.addEventListener('click', function() {
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
    document.querySelector(selectors.btns.clear).addEventListener('click', function() {
      clear();
    });

    // add click event for hide button
    document.querySelector(selectors.btns.hide).addEventListener('click', function() {
      hide();
    });
  };

  const add = (apartment) => {
    // clone apartment and add to cart if not already there
    const apartmentClone = apartment.cloneNode(true);
    const table = document.querySelector(selectors.table);

    // check for existing row in table and abort if found
    if (table.querySelector(`tr[data-number="${apartment.dataset.number}"]`)) {
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

    table.appendChild(apartmentClone);

    // show cart if hidden
    show();

  };

  const clear = () => {
    const table = document.querySelector(selectors.table);
    table.innerHTML = '';
    hide();
  };

  const show = () => {
    const cart = document.querySelector(selectors.cart);
    cart.classList.remove('hidden');
  };

  const hide = () => {
    const cart = document.querySelector(selectors.cart);
    cart.classList.add('hidden');
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
