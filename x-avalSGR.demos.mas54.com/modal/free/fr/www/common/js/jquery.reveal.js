/* ----------------------------------
 * ADAPTED FROM
 * --------------
 * jQuery Reveal Plugin 1.0
 * www.ZURB.com
 * Copyright 2010, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
*/
(function($) {

	$.reveal = function( elem ) {

		var base    = this;
		base.$elem  = $(elem);
		base.locked = false;

		var oOptions = $.extend( {}, $.reveal.defaultoOptions, base.$elem.data(), { link:base.$elem.attr('data-link') } );
		var $modal   = oOptions.hasOwnProperty('divid')? $('#'+oOptions.divid) : ($('#revealModal').length? $('#revealModal') : $($.reveal.popupHTML).appendTo('body'));
		var $modalBG = $('#revealModalBG').length? $('#revealModalBG') : $('<div id="revealModalBG" />').insertAfter($modal);

		var topMeasure  = 0,
			topOffset   = 0;

		base.prepareModal = function() {
			$modal.removeClass().toggleClass( 'revealModal '+oOptions.classe, true );
			if( oOptions.hasOwnProperty('link') ) {
				$('>div',$modal).load( oOptions.link, function(response, status, xhr) {
					if( status == 'error' )
						$(this).html('<div class="errorContent">Une erreur est survenue lors du chargement de la page.</div>');
					base.init();
				} );
			}
			else if( oOptions.hasOwnProperty('divid') )
				base.init();
			else
				console.log( '[reveal] Idiot, there\'s nothing to show... Add a data-link or data-divId attribute !' );
		};

		base.init = function() {

			topMeasure  = parseInt( $modal.css('top'), 10 ),
			topOffset   = $modal.height() + topMeasure;
			base.centerAll();

			// Fermeture sur click bt close
			$(oOptions.dismissmodalclass).bind('click.revealModal', base.closeReveal );

			// Fermeture sur click on background
			if( oOptions.closeonbackgroundclick )
				$modalBG.css( { cursor:'pointer' } ).bind('click.revealModal', base.closeReveal );

			// Fermeture sur keyup Escape
			$('body').bind('keyup.revealModal', function(e) {
				if( e.which === 27 ) base.closeReveal();
			} );

			// Recentrage de la popup on resize
			$(window).resize( base.centerAll );

			// Ouverture de la popup
			base.openReveal();
			$(".header_fiche, .footer_fiche").remove();
		};

		base.openReveal = function() {
			if( !base.locked ) {
				base.lockModal();
				$modalBG.show(0);
				switch( oOptions.animation ) {
					case 'fadeAndPop':
						$modal.css( { top:$(document).scrollTop()-topOffset, opacity:0 } )
						.show()
						.animate( { top:$(document).scrollTop()+topMeasure, opacity:1 }, oOptions.animationspeed, base.unlockModal );
						break;
					case 'fade':
						$modal.css( { top:$(document).scrollTop()+topMeasure } );
						$modal.fadeIn( oOptions.animationspeed, 'linear', base.unlockModal );
						break;
					default:
					case 'none':
						$modal.css( { top:$(document).scrollTop()+topMeasure } ).show(0);
						base.unlockModal();
						break;
				}
			}
			$modal.unbind('reveal:open');
		};

		base.closeReveal = function() {
			if( !base.locked ) {
				base.lockModal();
				switch( oOptions.animation ) {
					case 'fadeAndPop':
						$modal.animate( { top:$(document).scrollTop()-topOffset, opacity:0 }, oOptions.animationspeed, base.endClose );
						break;
					case 'fade':
						$modal.fadeOut( oOptions.animationspeed, 'linear', base.endClose );
						break;
					default:
					case 'none':
						$modal.hide();
						base.endClose();
				}
			}
		};

		base.endClose = function() {
			$modal.css( { top:topMeasure } );
			$modalBG.hide(0);
			$modal.unbind('reveal:close');
			$(oOptions.dismissmodalclass).unbind('click.revealModal');
			$modalBG.unbind('click.revealModal');
			$('body').unbind('keyup.revealModal');
			if( oOptions.hasOwnProperty('link') )
				$modal.remove();
			else
				$modal.hide();
			base.unlockModal();
		};

		base.centerAll = function() {
			$modal.css( { position:'absolute', left:document.documentElement.clientWidth/2-$modal.width()/2 } );
			$modalBG.css( 'height', document.documentElement.clientWidthHeight );
		};

		base.lockModal   = function() { base.locked = true; };
		base.unlockModal = function() { base.locked = false; };

		base.prepareModal();

	};

	$.fn.reveal = function() {
		return this.each( function() {
			$.reveal(this);
		} );
	};

	// Code html de la popup
	$.reveal.popupHTML = '<div id="revealModal" class="revealModal standard"><div></div><a class="closeModal">&#215;</a></div>';

	// oOptions par default
	$.reveal.defaultoOptions = {
		classe					: 'standard',
		animation				: 'fadeAndPop',
		animationspeed			: 500,
		closeonbackgroundclick	: true,
		dismissmodalclass		: '.closeModal'
	};

})(jQuery);

$(document).on( 'click', '.linkModal', function(e) {
	e.preventDefault();
	$(this).reveal();
} );
