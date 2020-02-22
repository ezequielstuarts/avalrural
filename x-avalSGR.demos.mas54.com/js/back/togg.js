/**
 * Headjam's approach to providing consistent slide toggle functionality to DOM elements.
 * @see https://codepen.io/benrnorman/pen/GJzeNR
 */
(function(hjSlide, $, undefined) { 
  'use strict';

  // The element hjSlide should be triggered on.
  hjSlide.selector = '[data-hj-slide]';

  // The attribute to add to disable the function
  var disabledState = 'data-hj-slide-disabled';

  /**
   * Determines if slide can be toggled on the target,
   * based on the given options and element's disabled state.
   * @param {object} opts - The options object, containing minWidth and maxWidth values.
   * @return {boolean} True if slide can be toggled.
   */
  function canToggle(opts) {
    return (
      (!opts.maxWidth || $(window).outerWidth() < opts.maxWidth) &&
      (!opts.minWidth || $(window).outerWidth() >= opts.minWidth) &&
      !opts.disabled
    );
  }

  /**
   * Gets the options for the slide toggle.
   * @param {Element} element - The html element that initiated the toggle. 
   * @return {object} The options object.
   */
  function getOptions(element) {
    var options = {
      target: $(element.attr('data-hj-slide')),
      group: element.attr('data-hj-slide-group') || false,
      speed: element.attr('data-hj-slide-speed') || 1000,
      minWidth: element.attr('data-hj-slide-minwidth') || false,
      maxWidth: element.attr('data-hj-slide-maxwidth') || false,
      disabled: element.attr(disabledState) || false
    };
    return options;
  }

  /**
   * Slide reveal or hide the target html element.
   * @param {Element} element - The html element to slide toggle.
   * @param {Event} event - The click event that triggered the function.
   */
  hjSlide.toggle = function(element, event) {
    // Get options for the class group
    var opts = getOptions(element),
        targetIsVisible = opts.target.is(':visible');
    if (canToggle(opts)) {
      // Prevent the default action
      event.preventDefault();
      // Disable the element until we're done, to prevent multiple clicks
      // causing a weird show/hide/show/hide effect
      element.attr(disabledState, true);
      if (opts.group) {
        // If a group was specified, remove the class from the group elements
        $(opts.group).stop().slideUp(opts.speed);
        if (targetIsVisible) {
          // If the target was already visible, we just need to remove the disabled state
          element.removeAttr(disabledState);
        } else {
          // If the target was not already visible, show it, then remove the disabled state
          opts.target.slideDown(opts.speed, function() {
            // We're done, so remove the disabled state
            element.removeAttr(disabledState);
          });
        }
      } else {
        // If no group was specified, simply toggle the class
        opts.target.slideToggle(opts.speed, function() {
          // We're done, so remove the disabled state
          element.removeAttr(disabledState);
        });
      }
    };
  };

}(window.hjSlide = window.hjSlide || {}, jQuery));

// Set up the click event listener
$(document).on('click', hjSlide.selector, function(event) {
  hjSlide.toggle($(this), event);
});