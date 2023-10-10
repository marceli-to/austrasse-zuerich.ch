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
    const isoItem = document.querySelector('[data-iso-item="' + number + '"]');

    if (isoItem) {
      isoItem.classList.add('is-highlighted');
    }

    // Get the parent <g> element for the isoItem
    const parent = isoItem.parentElement;

    // find all siblings of the parent <g> element that are after it
    const nextSiblings = getNextSiblings(parent);

    // add styles to translate the parent <g> elements siblings
    nextSiblings.forEach(function(sibling) {
      sibling.classList.add('is-up')
    });

    // find all siblings of the parent <g> element that are before it
    const previousSiblings = getPreviousSiblings(parent);

    // add styles to translate the parent <g> element and all its siblings
    parent.classList.add('is-down')
    previousSiblings.forEach(function(sibling) {
      sibling.classList.add('is-down')
    });

  };

  const listOut = function(apartment) {
    const number = apartment.dataset.number;
    const isoItem = document.querySelector('[data-iso-item="' + number + '"]');

    if (isoItem) {
      isoItem.classList.remove('is-highlighted');
    }

    // Get the parent <g> element for the isoItem
    const parent = isoItem.parentElement;

    // find all siblings (before and after) of the parent <g> element
    const siblings = getAllSiblings(parent);

    // remove all instances of the is-up and is-down classes
    parent.classList.remove('is-up');
    parent.classList.remove('is-down');
    siblings.forEach(function(sibling) {
      sibling.classList.remove('is-up');
      sibling.classList.remove('is-down');
    });
  };

  const getNextSiblings = (parent) => {
    const siblings = [];
    let nextSibling = parent.nextElementSibling;
    while (nextSibling) {
      siblings.push(nextSibling);
      nextSibling = nextSibling.nextElementSibling;
    }
    return siblings;
  };

  const getPreviousSiblings = (parent) => {
    const previousSiblings = [];
    let previousSibling = parent.previousElementSibling;
    while (previousSibling) {
      previousSiblings.push(previousSibling);
      previousSibling = previousSibling.previousElementSibling;
    }
    return previousSiblings;
  };

  const getAllSiblings = (parent) => {
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
    return siblings;
  };

  // RETURN PUBLIC METHODS
  return {
    init: initialize,
  };
})();

// Initialize
Iso.init();
