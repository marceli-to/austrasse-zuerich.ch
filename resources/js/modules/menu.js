(function () {

  const selectors = {
    btn: '[data-menu-button]',
    menu: '[data-menu]',
    icons: {
      burger: '[data-menu-icon="burger"]',
      cross: '[data-menu-icon="cross"]'
    }
  };

  let state = 'hidden';

  const init = () => {
    const btn = document.querySelector(selectors.btn);
    btn.addEventListener('click', toggle);
  };

  const toggle = () => {
    const menu = document.querySelector(selectors.menu);
    menu.classList.toggle('hidden');

    state = state === 'hidden' ? 'open' : 'hidden';

    const iconBurger = document.querySelector(selectors.icons.burger);
    const iconCross = document.querySelector(selectors.icons.cross);

    // handle icons
    if (state === 'hidden') {
      iconBurger.classList.remove('hidden');
      iconCross.classList.add('hidden');
    }
    else {
      iconBurger.classList.add('hidden');
      iconCross.classList.remove('hidden');
    }

  };

  init();
  
})();