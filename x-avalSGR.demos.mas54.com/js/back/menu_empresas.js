$(document).ready(function(){
  $('.empresa_burger > ul > li:has(ul)').addClass('desplegable');
   $('.empresa_burger > ul > li > a').click(function() {
     var comprobar = $(this).next();
     $('.empresa_burger li').removeClass('active');
     $(this).closest('li').addClass('active');
     if((comprobar.is('ul')) && (comprobar.is(':visible'))) {
        $(this).closest('li').removeClass('active');
        comprobar.slideUp('normal');
     }
     if((comprobar.is('ul')) && (!comprobar.is(':visible'))) {
        $('.empresa_burger ul ul:visible').slideUp('normal');
        comprobar.slideDown('normal');
     }
  });
  $('.empresa_burger > ul > li > ul > li:has(ul)').addClass('desplegable');
   $('.empresa_burger > ul > li > ul > li > a').click(function() {
     var comprobar = $(this).next();
     $('.empresa_burger ul ul li').removeClass('active');
     $(this).closest('ul ul li').addClass('active');
     if((comprobar.is('ul ul')) && (comprobar.is(':visible'))) {
        $(this).closest('ul ul li').removeClass('active');
        comprobar.slideUp('normal');
     }
     if((comprobar.is('ul ul')) && (!comprobar.is(':visible'))) {
        $('.empresa_burger ul ul ul:visible').slideUp('normal');
        comprobar.slideDown('normal');
     }
  });
});
