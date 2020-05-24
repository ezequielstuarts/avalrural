$(function() {

    alert('inicio form de contacto');
    $('formulario-contacto').submit(function(e) {
        alert('prevent');
        e.preventDefault();
    })
});