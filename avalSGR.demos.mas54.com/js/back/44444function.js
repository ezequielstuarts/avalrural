jQuery(document).ready(function(){
	
	$.fn.extend({
	  animateCss: function(animationName, callback) {
		var animationEnd = (function(el) {
		  var animations = {
			animation: 'animationend',
			OAnimation: 'oAnimationEnd',
			MozAnimation: 'mozAnimationEnd',
			WebkitAnimation: 'webkitAnimationEnd',
		  };

		  for (var t in animations) {
			if (el.style[t] !== undefined) {
			  return animations[t];
			}
		  }
		})(document.createElement('div'));

		this.addClass('animated ' + animationName).one(animationEnd, function() {
		  $(this).removeClass('animated ' + animationName);

		  if (typeof callback === 'function') callback();
		});

		return this;
	  },
	});

	// Products section
	$('.btn-section').on('click', function() {
		if ($(this).data('section') == "sec-1") {
			console.log($(this).data('section'));
			$('#sec-2').animateCss('fadeOut', function() {
				$('#sec-2').hide();
				$('#sec-1').show();
				$('#sec-1').animateCss('fadeIn');
			  
			});
			
			// $('.btn-section[data-section="sec-2"]').siblings('.triangle').addClass('hide');
			// $(this).siblings('.triangle').removeClass('hide');
		} else {
			
			$('#sec-1').animateCss('fadeOut', function() {
				$('#sec-1').hide();
				$('#sec-2').show();
				$('#sec-2').animateCss('fadeIn');
			});			
			
			// $('.btn-section[data-section="sec-1"]').siblings('.triangle').addClass('hide');
			// $(this).siblings('.triangle').removeClass('hide');
		}
	});
});
