(function () {

  const selectors = {
    button: '[data-cta]',
  };

  // Debounce function
  const debounce = (func, wait) => {
    let timeout;
    return function () {
      const context = this;
      const args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        func.apply(context, args);
      }, wait);
    };
  };

  const init = () => {
    const handleScroll = () => {
      const button = document.querySelector(selectors.button);

      if (button) {
        const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        button.classList.toggle('opacity-0', scrollPercentage <= 5);
        button.classList.toggle('opacity-100', scrollPercentage > 50);
      }
    };

    // Add debounce to the scroll event
    window.addEventListener('scroll', debounce(handleScroll, 50));
  };

  init();

})();
