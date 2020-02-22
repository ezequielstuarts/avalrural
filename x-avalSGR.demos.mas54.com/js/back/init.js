/*
 * Copyright (c) 2018 Marketify
 * Author: Marketify
 * This file is made for CURRENT TEMPLATE
*/

jQuery(document).ready(function(){

	"use strict";
	
	// here all ready functions
	
	buildify_tm_menubarFixingToTop();
	buildify_tm_article();
	buildify_tm_imgtosvg();
	buildify_tm_magnific_popup();
	buildify_tm_owl_carousel();
	buildify_tm_miniboxes();
	buildify_tm_hamburger();
	buildify_tm_submenu();
	buildify_tm_totop();
	buildify_tm_totop_myhide();
	buildify_tm_portfolio();
	buildify_tm_filter_effect();
	buildify_tm_widgetscroll();
	buildify_tm_animate_submenu();
	buildify_tm_sticky_sidebar();
	buildify_tm_contact_form();
	buildify_tm_isotope();
	
	jQuery(window).on('resize',function(e){
		e.preventDefault();
		buildify_tm_miniboxes();
		buildify_tm_widgetscroll();
		buildify_tm_animate_submenu();	
		buildify_tm_isotope();
	});
	
	jQuery(window).on('scroll', function(e) {
		e.preventDefault();
		buildify_tm_totop_myhide();
    });
	
	jQuery(window).on('load', function(e) {
		e.preventDefault();
		buildify_tm_isotope();
	});
	
});

// -----------------------------------------------------
// --------------------  FUNCTIONS  --------------------
// -----------------------------------------------------

// -----------------------------------------------------
// --------------------  MENUBAR  ----------------------
// -----------------------------------------------------

function buildify_tm_menubarFixingToTop(){
	
	"use strict";
	
	var menuBar			= jQuery('.buildify_tm_menubar');
	var menuLogo		= jQuery('.buildify_tm_menubar .menu_logo');
	var window_offset 	= jQuery(window).scrollTop();
	if(window_offset>=100){
		menuBar.addClass('scrolled');
		menuLogo.addClass('scrolled');
		
	}else{
		menuBar.removeClass('scrolled');
		menuLogo.removeClass('scrolled');
	}
	jQuery(window).on('scroll',function(){
		window_offset = jQuery(window).scrollTop();
		if(window_offset>=100){
			menuBar.addClass('scrolled');
			menuLogo.addClass('scrolled');
		}else{
			menuBar.removeClass('scrolled');
			menuLogo.removeClass('scrolled');
		}
	});
}

// -----------------------------------------------------
// --------------------  SWIPER ------------------------
// -----------------------------------------------------

function buildify_tm_article(){
	
	"use strict";
	
	var swiper = new Swiper('.swiper-container', {
		direction:'horizontal',
		loop:'true',
      pagination: {
        el: '.swiper-pagination',
        type: 'custom',
		  renderCustom: function (swiper, current, total) {
			  var currentIndex;
			  if(current<10){
				  currentIndex = '0'+ current;
			  }else{
				  currentIndex = current;
			  }
			   var totalIndex;
			  if(total<10){
				  totalIndex = '0'+ total;
			  }else{
				  totalIndex = total;
			  }
			  currentIndex = '<span class="current">' + currentIndex + '</span>';
			  totalIndex = '<span class="total">' + totalIndex + '</span>';
			  return  currentIndex + '<span class="divider"> / </span>' + totalIndex;
		  }
      },
      navigation: {
        nextEl: '.tm_next_button',
        prevEl: '.tm_prev_button',
      },
    });
}

// -----------------------------------------------------
// ---------------    IMAGE TO SVG    ------------------
// -----------------------------------------------------

function buildify_tm_imgtosvg(){
	
	"use strict";
	
	jQuery('img.svg').each(function(){
		
		var jQueryimg 		= jQuery(this);
		var imgClass		= jQueryimg.attr('class');
		var imgURL			= jQueryimg.attr('src');

		jQuery.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var jQuerysvg = jQuery(data).find('svg');

			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				jQuerysvg = jQuerysvg.attr('class', imgClass+' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			jQuerysvg = jQuerysvg.removeAttr('xmlns:a');

			// Replace image with new SVG
			jQueryimg.replaceWith(jQuerysvg);

		}, 'xml');

	});
}

// -----------------------------------------------------
// --------------    MAGNIFIC POPUP    -----------------
// -----------------------------------------------------

function buildify_tm_magnific_popup(){
	
	"use strict";
	
	jQuery('.open-popup-link').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
	
	jQuery('.gallery').each(function() { // the containers for all your galleries
		jQuery(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
			  enabled:true
			}
		});
	});
	jQuery('.gallery_zoom').each(function() { // the containers for all your galleries
		jQuery(this).magnificPopup({
			delegate: 'a.zoom', // the selector for gallery item
			type: 'image',
			gallery: {
			  enabled:true
			},
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});
		
	});
	jQuery('.popup-youtube').each(function() { // the containers for all your galleries
		jQuery(this).magnificPopup({
			//type: 'iframe',
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	});
}

// -----------------------------------------------------
// ---------------    OWL CAROUSEL    ------------------
// -----------------------------------------------------

function buildify_tm_owl_carousel(){
	"use strict";
	
	var carousel 		= jQuery('.buildify_tm_featured_works_wrap .owl-carousel');
	
	carousel.owlCarousel({
			items: 3,
			lazyLoad: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 6000,
			smartSpeed: 2000,
			dots: false,
			nav: false,
			navSpeed: true,
			responsive:{
			0:{items:1},
			480:{items:2},
			768:{items:3},
			1040:{items:3},
			1200:{items:3},
			1600:{items:3},
			1920:{items:3}
		}
	});
	
	jQuery('.buildify_tm_featured_works_wrap .custom_nav > a.prev').on('click', function(){
		carousel.trigger('prev.owl.carousel');
		return false;
	});
	
	jQuery('.buildify_tm_featured_works_wrap .custom_nav > a.next').on('click', function(){
		carousel.trigger('next.owl.carousel');
		return false;
	});
	
	
	var carousel2 		= jQuery('.buildify_tm_universal_carousel_wrap.testimonial .owl-carousel');
	
	carousel2.owlCarousel({
			loop:false,
			items: 2,
			lazyLoad: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 6000,
			smartSpeed: 2000,
			dots: false,
			nav: true,
			navSpeed: true,
			responsive:{
			0:{items:1},
			480:{items:1},
			768:{items:2},
			1040:{items:2},
			1200:{items:2},
			1600:{items:2},
			1920:{items:2}
		}
	});
	
	jQuery('.buildify_tm_universal_carousel_wrap.testimonial .custom_nav > a.prev').on('click', function(){
		carousel2.trigger('prev.owl.carousel');
		return false;
	});
	
	jQuery('.buildify_tm_universal_carousel_wrap.testimonial .custom_nav > a.next').on('click', function(){
		carousel2.trigger('next.owl.carousel');
		return false;
	});
	
	var carousel3		 = jQuery('.buildify_tm_partners_wrap .owl-carousel');
	
	carousel3.owlCarousel({
			loop:true,
			items: 5,
			lazyLoad: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 6000,
			smartSpeed: 2000,
			dots: true,
			nav: true,
			navSpeed: true,
			responsive:{
			0:{items:1},
			360:{items:2},
			480:{items:3},
			768:{items:4},
			1040:{items:4},
			1200:{items:5},
			1600:{items:5},
			1920:{items:5}
		}
	});
	
	var carousel4 		= jQuery('.buildify_tm_news_wrap .owl-carousel');
	
	carousel4.owlCarousel({
			loop:true,
			items: 3,
			lazyLoad: true,
			margin: 0,
			autoplay: false,
			autoplayTimeout: 6000,
			smartSpeed: 2000,
			dots: false,
			nav: false,
			navSpeed: true,
			responsive:{
			0:{items:1},
			480:{items:2},
			768:{items:3},
			1040:{items:3},
			1200:{items:3},
			1600:{items:3},
			1920:{items:3}
		}
	});
	
	jQuery('.buildify_tm_news_wrap .custom_nav > a.prev').on('click', function(){
		carousel4.trigger('prev.owl.carousel');
		return false;
	});
	
	jQuery('.buildify_tm_news_wrap .custom_nav > a.next').on('click', function(){
		carousel4.trigger('next.owl.carousel');
		return false;
	});
}

// -----------------------------------------------------
// -----------------    MINI BOXES    ------------------
// -----------------------------------------------------

 function buildify_tm_miniboxes(){
	 
  "use strict";
	 
  var el 			= jQuery('.buildify_tm_miniboxes');
	 
  if(el.length){
   el.each(function(index, element) {
         
    var child		= jQuery(element).children('.buildify_tm_minibox');
    
    child.css({height:'auto'});
    // Get an array of all element heights
    
    var W 		= jQuery(window).width();
    if(W > 480){
     var elementHeights = child.map(function() {return jQuery(this).outerHeight();}).get();
    
     // Math.max takes a variable number of arguments
     // `apply` is equivalent to passing each height as an argument
     var maxHeight 		= Math.max.apply(null, elementHeights);
     
     // Set each height to the max height
     child.css({height:maxHeight+'px'}); 
    }
   });  
  }
 }

// -----------------------------------------------------
// -----------------    SUBMENUS    --------------------
// -----------------------------------------------------

function buildify_tm_animate_submenu(){
	"use strict";
	
	var mainLi 	 		= jQuery('.buildify_tm_menubar .menu_nav_content > ul > li'); 
	var offsetLi 	 	= jQuery('.buildify_tm_menubar .menu_nav_content > ul > li.active1').offset().top; 
	var winScroll 	 	= jQuery(window).scrollTop(); 
	var box		 		= jQuery('.buildify_tm_animate_submenu'); 
	var leftPart		= jQuery('.buildify_tm_leftpart_wrap').outerWidth(); 
	var RightPart		= jQuery('.buildify_tm_rightpart'); 
	
	box.css({top:offsetLi-winScroll-10});
	box.css({left:leftPart});

	mainLi.on('mouseenter',function(){
		var element = jQuery(this);
		var submenu = element.find('.inside_menu').html();
		winScroll 	= jQuery(window).scrollTop();
		offsetLi 	= element.offset().top;
		box.css({top:offsetLi-winScroll-20});
		if(element.hasClass('active1')){
			box.removeClass('opened');
			box.html("");
			box.html(submenu);
			box.addClass('opened');
		}else{
			box.removeClass('opened').html("");
		}
	});
	RightPart.on('mouseenter',function(){
		box.removeClass('opened').html("");
	});
}

// -----------------------------------------------------
// ------------------  HAMBURGER  ----------------------
// -----------------------------------------------------

function buildify_tm_hamburger(){
	
	"use strict";
	
	var hamburger 		= jQuery('.hamburger');
	var mobileMenu		= jQuery('.buildify_tm_mobile_header_wrap .navigation_wrap');
	
	hamburger.on('click',function(){
		var element 	= jQuery(this);
		
		if(element.hasClass('is-active')){
			element.removeClass('is-active');
			mobileMenu.slideUp();
		}else{
			element.addClass('is-active');
			mobileMenu.slideDown();
		}
		return false;
	});
}

// -----------------------------------------------------
// -----------------    SUBMENU    ---------------------
// -----------------------------------------------------

function buildify_tm_submenu(){
	
	"use strict";
	
	var nav 		= jQuery('ul.nav');
	
	nav.find('a').on('click', function(e){
		var element 			= jQuery(this);
		var parentItem			= element.parent('li');
		var parentItems			= element.parents('li');
		var parentUls			= parentItem.parents('ul.sub_menu');
		var subMenu				= element.next();
		var allSubMenusParents 	= nav.find('li');
		
		allSubMenusParents.removeClass('opened');
		
		if(subMenu.length){
			
			e.preventDefault();
			
			if(!(subMenu.parent('li').hasClass('active'))){
				if(!(parentItems.hasClass('opened'))){parentItems.addClass('opened');}
				
				allSubMenusParents.each(function(){
					var el = jQuery(this);
					if(!el.hasClass('opened')){el.find('ul.sub_menu').slideUp();}
				});
				
				allSubMenusParents.removeClass('active');
				parentUls.parent('li').addClass('active');
				subMenu.parent('li').addClass('active');
				subMenu.slideDown();
				
				// for recalculate scrollable height
				var scrollableE = jQuery('.scrollable');
				scrollableE.each(function(){
					var elE = jQuery(this);
					var hhhE = elE.height();hhhE++;
					setTimeout(function(){elE.css({height:hhhE});},500);
					setTimeout(function(){hhhE--;elE.css({height:hhhE});},600);
				});
				
			}else{
				subMenu.parent('li').removeClass('active');
				subMenu.slideUp();
			}
			return false;
		}
	});
}

// -----------------------------------------------------
// ------------------    TOTOP    ----------------------
// -----------------------------------------------------

function buildify_tm_totop(){
	
	"use strict";
	
	jQuery(".buildify_tm_totop").on('click', function(e) {
		e.preventDefault();		
		jQuery("html, body").animate({ scrollTop: 0 }, 'slow');
		return false;
	});
}

function buildify_tm_totop_myhide(){
	
	"use strict";
	
	var toTop		=jQuery(".buildify_tm_totop");
	if(toTop.length){
		var topOffSet 	=toTop.offset().top;
		
		if(topOffSet > 1000){
			toTop.addClass('opened');	
		}else{
			toTop.removeClass('opened');
		}
	}
}

// -------------------------------------------------
// --------------    PORTFOLIO    ------------------
// -------------------------------------------------

// filterable 
function buildify_tm_portfolio(){

	"use strict";

	if(jQuery().isotope) {

		// Needed variables
		var list 		 = jQuery('.buildify_tm_portfolio_list');
		var filter		 = jQuery('.buildify_tm_portfolio_filter');

		if(filter.length){
			// Isotope Filter 
			filter.find('a').on('click', function(){
				var selector = jQuery(this).attr('data-filter');
				list.isotope({ 
					filter				: selector,
					animationOptions	: {
						duration			: 750,
						easing				: 'linear',
						queue				: false
					}
				});
				return false;
			});	

			// Change active element class
			filter.find('a').on('click', function() {
				filter.find('a').removeClass('current');
				jQuery(this).addClass('current');
				return false;
			});	
		}
	}
}

function buildify_tm_filter_effect(){
	"use strict";
	
	var button			= jQuery('.buildify_tm_projects_wrap .all_projects');
	var element			= jQuery('.buildify_tm_projects_wrap .filter_list');
	
	button.on('click',function(){
		if(element.hasClass('opened')){
			element.removeClass('opened');
			element.slideUp();
		}else{
			element.addClass('opened');
			element.slideDown();
		}	
		return false;
	});
}

// -----------------------------------------------------
// -------------    WIDGET MENU SCROLL -----------------
// -----------------------------------------------------

function buildify_tm_widgetscroll(){
	
	"use strict";
	
	var H				= jQuery(window).height();
	var scrollable		= jQuery('.scrollable');
	var logoH 			= jQuery('.buildify_tm_menubar .menu_logo').outerHeight();
	
	
	var verMenu			= jQuery('.menu_nav_content');
	
	verMenu.css({height:H-logoH-50});
	
	scrollable.each(function(){
		var element		= jQuery(this);
		
		element.css({height: H-logoH-100});
		
		element.niceScroll({
			touchbehavior:false,
			cursorwidth:0,
			autohidemode:true,
			cursorborder:"0px solid #eee"
		});
	});
}

// -----------------------------------------------------
// ---------------   STICKY SIDEBAR    -----------------
// -----------------------------------------------------

function buildify_tm_sticky_sidebar(){

	"use strict";
	
	jQuery('.sticky_sidebar').theiaStickySidebar({
		containerSelector: '', // The sidebar's container element. If not specified, it defaults to the sidebar's parent.
		additionalMarginTop: 50,
		additionalMarginBottom: 0,
		updateSidebarHeight: true, // Updates the sidebar's height. Use this if the background isn't showing properly, for example.
		minWidth: 768, // The sidebar returns to normal if its width is below this value. 
	});
	
}


// -----------------------------------------------------
// ----------------    CONTACT FORM    -----------------
// -----------------------------------------------------

function buildify_tm_contact_form(){
	
	"use strict";
	
	jQuery(".contact_form #send_message").on('click', function(){
		
		var name 		= jQuery(".contact_form #name").val();
		var email 		= jQuery(".contact_form #email").val();
		var message 	= jQuery(".contact_form #message").val();
		var subject 	= jQuery(".contact_form #subject").val();
		var success     = jQuery(".contact_form .returnmessage").data('success');
	
		jQuery(".contact_form .returnmessage").empty(); //To empty previous error/success message.
		//checking for blank fields	
		if(name===''||email===''||message===''){
			
			jQuery('div.empty_notice').slideDown(500).delay(2000).slideUp(500);
		}
		else{
			// Returns successful data submission message when the entered information is stored in database.
			jQuery.post("modal/contact.php",{ ajax_name: name, ajax_email: email, ajax_message:message, ajax_subject: subject}, function(data) {
				
				jQuery(".contact_form .returnmessage").append(data);//Append returned message to message paragraph
				
				
				if(jQuery(".contact_form .returnmessage span.contact_error").length){
					jQuery(".contact_form .returnmessage").slideDown(500).delay(2000).slideUp(500);		
				}else{
					jQuery(".contact_form .returnmessage").append("<span class='contact_success'>"+ success +"</span>");
					jQuery(".contact_form .returnmessage").slideDown(500).delay(4000).slideUp(500);
				}
				
				if(data===""){
					jQuery("#contact_form")[0].reset();//To reset form fields on success
				}
				
			});
		}
		return false; 
	});
}

// -----------------------------------------------------
// --------------    ISOTOPE MASONRY    ----------------
// -----------------------------------------------------
function buildify_tm_isotope(){
	
	"use strict";
	
	jQuery('.masonry').isotope({
		itemSelector: '.item',
		masonry: {
			
		}
	});
}
