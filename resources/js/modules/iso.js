const Iso = (function() {
  
  // OPTIONS AND VARIABLES
  const selectors = {
    body: 'body',
    apartment: '[data-apartment]',
    isoItem: '[data-iso-item]',
    isoStructure: '[data-iso-structure]',
  };

  const classes = {

  };

  // METHODS
  const initialize = function() {
    bind();
  };

  const bind = function() {
    // add a mouseover event listener to each apartment
    document.querySelectorAll(selectors.apartment).forEach(function(apartment) {
      apartment.addEventListener('mouseover', function() {
        listOver(apartment);
      });
    });

    // add a mouseout event listener to each apartment
    document.querySelectorAll(selectors.apartment).forEach(function(apartment) {
      apartment.addEventListener('mouseleave', function() {
        listOut(apartment);
      });
    });
  };

  const listOver = function(apartment) {
    const number = apartment.dataset.number;

    // add class is-opaque to all iso items except the one that matches the apartment number
    // document.querySelectorAll(selectors.isoItem).forEach(function(isoItem) {
    //   if (isoItem.dataset.isoItem !== number) {
    //     isoItem.classList.add('is-opaque');
    //   }
    // });

    // // add class is-opaque to all iso structure items
    // document.querySelectorAll(selectors.isoStructure).forEach(function(isoStructure) {
    //   isoStructure.classList.add('is-opaque');
    // });

    // const isoItem = document.querySelector('[data-iso-item="' + number + '"]');
    // if (isoItem) {
    //   isoItem.classList.add('is-highlighted');
    // }



    const isoItem = document.querySelector('[data-iso-item="' + number + '"]');

    if (isoItem) {
      isoItem.classList.add('is-highlighted');
    }

    // Get the parent <g> element for the isoItem
    const parent = isoItem.parentElement;

    // find all siblings of the parent <g> element that are after it
    const siblings = [];
    let nextSibling = parent.nextElementSibling;
    while (nextSibling) {
      siblings.push(nextSibling);
      nextSibling = nextSibling.nextElementSibling;
    }

    // add styles to translate the parent <g> element and all its siblings
    parent.classList.add('is-up')
    siblings.forEach(function(sibling) {
      sibling.classList.add('is-up')
    });

    // find all siblings of the parent <g> element that are before it
    const previousSiblings = [];
    let previousSibling = parent.previousElementSibling;
    while (previousSibling) {
      previousSiblings.push(previousSibling);
      previousSibling = previousSibling.previousElementSibling;
    }

    // add styles to translate the parent <g> element and all its siblings
    parent.classList.add('is-down')
    previousSiblings.forEach(function(sibling) {
      sibling.classList.add('is-down')
    });

  };

  const listOut = function(apartment) {
    const number = apartment.dataset.number;

    // // remove class is-opaque from all iso items
    // document.querySelectorAll(selectors.isoItem).forEach(function(isoItem) {
    //   isoItem.classList.remove('is-opaque');
    // });

    // // remove class is-opaque to all iso structure items
    // document.querySelectorAll(selectors.isoStructure).forEach(function(isoStructure) {
    //   isoStructure.classList.remove('is-opaque');
    // });

    const isoItem = document.querySelector('[data-iso-item="' + number + '"]');
    if (isoItem) {
      isoItem.classList.remove('is-highlighted');
    }

    // Get the parent <g> element for the isoItem
    const parent = isoItem.parentElement;

    // find all siblings (before and after) of the parent <g> element
    const siblings = [];
    let nextSibling = parent.nextElementSibling;
    while (nextSibling) {
      siblings.push(nextSibling);
      nextSibling = nextSibling.nextElementSibling;
    }
    let previousSibling = parent.previousElementSibling;
    while (previousSibling) {
      siblings.push(previousSibling);
      previousSibling = previousSibling.previousElementSibling;
    }

    // remove all instances of the is-up and is-down classes
    parent.classList.remove('is-up');
    parent.classList.remove('is-down');
    siblings.forEach(function(sibling) {
      sibling.classList.remove('is-up');
      sibling.classList.remove('is-down');
    });

    // // find all siblings of the parent <g> element that are after it
    // const siblings = [];
    // let nextSibling = parent.nextElementSibling;
    // while (nextSibling) {
    //   siblings.push(nextSibling);
    //   nextSibling = nextSibling.nextElementSibling;
    // }

    // // add styles to translate the parent <g> element and all its siblings
    // //parent.style.transform = 'translateY(0)';
    // parent.classList.remove('is-up');
    // siblings.forEach(function(sibling) {
    //   //sibling.style.transform = 'translateY(0)';
    //   sibling.classList.remove('is-up')
    // });

    // // find all siblings of the parent <g> element that are before it
    // const previousSiblings = [];
    // let previousSibling = parent.previousElementSibling;
    // while (previousSibling) {
    //   previousSiblings.push(previousSibling);
    //   previousSibling = previousSibling.previousElementSibling;
    // }

    // // add styles to translate the parent <g> element and all its siblings
    // //parent.style.transform = 'translateY(0)';
    // parent.classList.remove('is-down');
    // previousSiblings.forEach(function(sibling) {
    //   //sibling.style.transform = 'translateY(0)';
    //   sibling.classList.remove('is-down')
    // });
  };


  // RETURN PUBLIC METHODS
  return {
    init: initialize,
  };
})();

// Initialize
Iso.init();
