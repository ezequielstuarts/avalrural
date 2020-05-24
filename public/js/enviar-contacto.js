$(function() {

    $('#formulario-contacto').submit(function(e) {
        $("#enviando").removeClass("oculto");
        $("#enviar").addClass("oculto");
        var route = $('#formulario-contacto').data('route');
        var form_data = $(this);
        $.ajax({
            type: 'POST',
            url: route,
            data: form_data.serialize(),
            success: function(Response) {
                if (Response.apellido) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_apellidoo").html("Debe ingresar su apellido.");
                    $('#error').removeClass('oculto');
                }
                if (Response.nombre) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_nombree").html("Debe ingresar su nombre.");
                    $('#error').removeClass('oculto');
                }
                if (Response.empresa) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_empresaa").html("Debe ingresar su empresa.");
                    $('#error').removeClass('oculto');
                }
                if (Response.cuit) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_cuitt").html("Debe ingresar su cuit.");
                    $('#error').removeClass('oculto');
                }
                if (Response.localidad) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_localidadd").html("Debe ingresar su localidad.");
                    $('#error').removeClass('oculto');
                }
                if (Response.telefono) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_telefonoo").html("Debe ingresar su telefono.");
                    $('#error').removeClass('oculto');
                }
                if (Response.email) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_emaill").html("Debe ingresar su email.");
                    $('#error').removeClass('oculto');
                }
                if (Response.consulta) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_consultaa").html("Debe ingresar su consulta.");
                    $('#error').removeClass('oculto');
                }
                if (Response.acepta) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_terminos").html("Debe aceptar los términos y condiciones.");
                    $('#error').removeClass('oculto');
                }
                if (Response.success) {
                    $(".respuesta-success").html("Enviado! ");
                    $(".mensaje-success").html("El mensaje ha sido enviado correctamente.");
                    $("#formulario-contacto").addClass("oculto");
                    $("#success").removeClass("oculto");
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


    apellido.onblur = function() {
        if (apellido.value.trim() == "") {
            $('#error_apellidoo').removeClass('oculto');
        } else {
            $('#error_apellidoo').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
    nombre.onblur = function() {
        if (nombre.value.trim() == "") {
            $('#error_nombree').removeClass('oculto');
        } else {
            $('#error_nombree').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
    empresa.onblur = function() {
        if (empresa.value.trim() == "") {
            $('#error_empresaa').removeClass('oculto');
        } else {
            $('#error_empresaa').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
    cuit.onblur = function() {
        if (cuit.value.trim() == "") {
            $('#error_cuitt').removeClass('oculto');
        } else {
            $('#error_cuitt').addClass('oculto');
            $('#error').addClass('oculto');
        }

        if (cuit.value.trim().length > 0) {
            $('#error_cuitt').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
    localidad.onblur = function() {
        if (localidad.value.trim() == "") {
            $('#error_localidadd').removeClass('oculto');
        } else {
            $('#error_localidadd').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
    telefono.onblur = function() {
        if (telefono.value.trim() == "") {
            $('#error_telefonoo').removeClass('oculto');
        } else {
            $('#error_telefonoo').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
    email.onblur = function() {
        if (email.value.trim() == "") {
            $('#error_emaill').removeClass('oculto');
        } else {
            $('#error_emaill').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
    consulta.onblur = function() {
        if (consulta.value.trim() == "") {
            $('#error_consultaa').removeClass('oculto');
        } else {
            $('#error_consultaa').addClass('oculto');
            $('#error').addClass('oculto');
        }
    }
})