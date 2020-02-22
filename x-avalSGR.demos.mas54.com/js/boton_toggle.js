$(document).ready(function()  {

  $(".boton_operacion").css("background-color", "#7dba57");
  $(".boton_no_operacion").css("background-color", "#4c565f");

  $(".boton_operacion").click(function()  {
    $(".boton_operacion").css("background-color", "#7dba57");
    $(".boton_no_operacion").css("background-color", "#4c565f");
    $(".no_opero").fadeOut(500, function(){ $(".si_opero").fadeIn(500); });
  });

  $(".boton_no_operacion").click(function() {
    $(".boton_no_operacion").css("background-color", "#7dba57");
    $(".boton_operacion").css("background-color", "#4c565f");
    $(".si_opero").fadeOut(500, function(){ $(".no_opero").fadeIn(500); });
  });

});