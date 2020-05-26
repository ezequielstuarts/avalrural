$(function() {

    $('#formulario-contacto').submit(function(e) {
        $("#enviandoContacto").removeClass("oculto");
        $("#enviarContacto").addClass("oculto");
        var route = $('#formulario-contacto').data('route');
        var form_data = $(this);
        $.ajax({
            type: 'POST',
            url: route,
            data: form_data.serialize(),
            success: function(Response) {
                console.log(Response);
                if (Response.apellido) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_apellidoo_contacto").html("Debe ingresar su apellido JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.nombre) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_nombree_contacto").html("Debe ingresar su nombre JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.empresa) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_empresaa_contacto").html("Debe ingresar su empresa JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.cuit) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_cuitt_contacto").html("Debe ingresar su cuit JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.localidad) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_localidadd_contacto").html("Debe ingresar su localidad JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.telefono) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_telefonoo_contacto").html("Debe ingresar su telefono JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.email) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_emaill_contacto").html("Debe ingresar su email JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.consulta) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_consultaa_contacto").html("Debe ingresar su consulta JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                }
                if (Response.terminosYcondiciones) {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_terminos_contacto").html("Debe aceptar los términos y condiciones JS.");
                    $("#error_contacto").removeClass('oculto');
                    $("#error_contacto").html("Debe completar todos los campos JS.");
                } else {
                    $("#enviandoContacto").addClass("oculto");
                    $("#enviarContacto").removeClass("oculto");
                    $("#error_captcha_contacto").html("Debe validar el captcha");
                }
                if (Response.success) {
                    $(".respuesta-success").html("Enviado! ");
                    $(".mensaje-success").html("El mensaje ha sido enviado correctamente.");
                    $("#formulario-contacto").addClass("oculto");
                    $("#success").removeClass("oculto");
                    $(window).scrollTop(0).slow();
                }
            },
        });
        e.preventDefault();
    })
});

window.addEventListener('load', function() {

    var apellido = document.getElementById('apellido');
    var nombre = document.getElementById('nombre');
    var empresa = document.getElementById('empresa');
    var cuit = document.getElementById('cuit');
    var localidad = document.getElementById('localidad');
    var telefono = document.getElementById('telefono');
    var email = document.getElementById('email');
    var consulta = document.getElementById('consulta');
    var terminosYcondiciones = document.getElementById('terminosYcondiciones');


    apellido.onchange = function() {
        if (apellido.value.trim() == "") {
            $('#error_apellidoo_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_apellidoo_contacto').addClass('oculto');
        }
    }
    nombre.onchange = function() {
        if (nombre.value.trim() == "") {
            $('#error_nombree_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_nombree_contacto').addClass('oculto');
        }
    }
    empresa.onchange = function() {
        if (empresa.value.trim() == "") {
            $('#error_empresaa_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_empresaa_contacto').addClass('oculto');
        }
    }
    cuit.onchange = function() {
        if (cuit.value.trim() == "") {
            $('#error_cuitt_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_cuitt_contacto').addClass('oculto');
        }

        $("#error_contacto").addClass('oculto');
        if (cuit.value.trim().length > 0) {
            $('#error_cuitt_contacto').addClass('oculto');
        }
    }
    localidad.onchange = function() {
        if (localidad.value.trim() == "") {
            $('#error_localidadd_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_localidadd_contacto').addClass('oculto');
        }
    }
    telefono.onchange = function() {
        if (telefono.value.trim() == "") {
            $('#error_telefonoo_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_telefonoo_contacto').addClass('oculto');
        }
    }
    email.onchange = function() {
        if (email.value.trim() == "") {
            $('#error_emaill_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_emaill_contacto').addClass('oculto');
        }
    }
    consulta.onchange = function() {
        if (consulta.value.trim() == "") {
            $('#error_consultaa_contacto').removeClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_consultaa_contacto').addClass('oculto');
        }
    }
    terminosYcondiciones.onclick = function() {
        if (terminosYcondiciones.checked) {
            $('#error_terminos_contacto').addClass('oculto');
            $("#error_contacto").addClass('oculto');
        } else {
            $('#error_terminos_contacto').removeClass('oculto');
        }
    }
})