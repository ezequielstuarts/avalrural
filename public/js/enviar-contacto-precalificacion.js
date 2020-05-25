$(function() {
    $('#formulario-precalificate').submit(function(e) {
        $("#enviando").removeClass("oculto");
        $("#enviar").addClass("oculto");

        var route = $('#formulario-precalificate').data('route');
        // var form_data = $(this);

        $.ajax({
            type: 'POST',
            url: route,
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success: function(Response) {
                if (Response.NombreYApellido) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_nombreyapellido").html("Debe ingresar su nombre y apellido.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.Email) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_email").html("Debe ingresar su email.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.Telefono) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_telefono").html("Debe ingresar su teléfono.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.Celular) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_celular").html("Debe ingresar su ceclular.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.Empresa) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_empresa").html("Debe ingresar su empresa.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.CUIT) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_cuit").html("Debe ingresar su cuit.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.Rubro) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_rubro").html("Debe seleccionar su rubro.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.AFIP) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_afip").html("Pegue el codigo de AFIP aquí..");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.Actividad) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_actividad").html("Debe describir su actividad.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }

                if (Response.Acepta) {
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                    $("#error_terminos").html("Debe aceptar los términos y condiciones.");
                    $('#error').removeClass('oculto');
                    $("#error").html("Debe completar todos los campos.");
                }
                if (Response.success) {
                    $(".respuesta-success").html("<b>Enviado! </b>");
                    $(".mensaje-success").html("El mensaje ha sido enviado correctamente.");
                    $("#nuevo-precalif").addClass("oculto");
                    $('#mensaje-enviado').removeClass('oculto');
                    $("#formulario-precalificate")[0].reset();
                } else {
                    $('#error').removeClass('oculto');
                    $("#error").html("Ha ocurrido algún problema.");
                    $("#enviando").addClass("oculto");
                    $("#enviar").removeClass("oculto");
                }
            },
        });
        e.preventDefault();
    })
});

window.addEventListener('load', function() {
    var NombreYApellido = document.getElementById('NombreYApellido');
    var Email = document.getElementById('Email');
    var Telefono = document.getElementById('Telefono');
    var Celular = document.getElementById('Celular');
    var Empresa = document.getElementById('Empresa');
    var CUIT = document.getElementById('CUIT');
    var Rubro = document.getElementById('Rubro');
    var AFIP = document.getElementById('AFIP');
    var Actividad = document.getElementById('Actividad');
    var terminos = document.getElementById('terminos');


    NombreYApellido.onchange = function() {
        if (NombreYApellido.value.trim() == "") {
            $('#error_nombreyapellido').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_nombreyapellido').addClass('oculto');
        }
    }
    Email.onchange = function() {
        if (Email.value.trim() == "") {
            $('#error_email').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_email').addClass('oculto');
        }
    }
    Telefono.onchange = function() {
        if (Telefono.value.trim() == "") {
            $('#error_telefono').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_telefono').addClass('oculto');
        }
    }
    Celular.onchange = function() {
        if (Celular.value.trim() == "") {
            $('#error_celular').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_celular').addClass('oculto');
        }
    }
    Empresa.onchange = function() {
        if (Empresa.value.trim() == "") {
            $('#error_empresa').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_empresa').addClass('oculto');
        }
    }
    CUIT.onchange = function() {
        if (CUIT.value.trim() == "") {
            $('#error_cuit').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_cuit').addClass('oculto');
        }
    }
    Rubro.onchange = function() {
        if (Rubro.value.trim() == "") {
            $('#error_rubro').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_rubro').addClass('oculto');
        }
    }
    AFIP.onchange = function() {
        if (AFIP.value.trim() == "") {
            $('#error_afip').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_afip').addClass('oculto');
        }
    }
    Actividad.onchange = function() {
        if (Actividad.value.trim() == "") {
            $('#error_actividad').removeClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_actividad').addClass('oculto');
        }
    }
    terminos.onclick = function() {
        if (terminos.checked) {
            $('#error_terminos').addClass('oculto');
            $("#error").addClass('oculto');
        } else {
            $('#error_terminos').removeClass('oculto');
        }
    }
})