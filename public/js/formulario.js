
// var theform = document.getElementById("contact_form");
// var elementsofForm = theform.elements;
// console.log(elementsofForm);

    // var apellido = document.getElementById('apellido');
    // var nombre = document.getElementById('nombre');
    // var empresa = document.getElementById('empresa');
    // var cuit = document.getElementById('cuit');
    // var localidad = document.getElementById('localidad');
    // var telefono = document.getElementById('telefono');
    // var email = document.getElementById('email');
    // var consulta = document.getElementById('consulta');

window.addEventListener('load', function() {
    var ap = document.getElementById('error_apellidoo');
    var nomb = document.getElementById('error_nombree');
    var emp = document.getElementById('error_empresaa');
    var cu = document.getElementById('error_cuitt');
    var loc = document.getElementById('error_localidadd');
    var tel = document.getElementById('error_telefonoo');
    var ema = document.getElementById('error_emaill');
    var consult = document.getElementById('error_consultaa');

    apellido.onblur = function() {
        if(apellido.value.trim() == "") {
            $(ap).removeClass('error_disable');
        } else {
            $(ap).addClass('error_disable');
        }
    }
    nombre.onblur = function() {
        if(nombre.value.trim() == "") {
            $(nomb).removeClass('error_disable');
        } else {
            $(nomb).addClass('error_disable');
        }
    }
    empresa.onblur = function() {
        if(empresa.value.trim() == "") {
            $(emp).removeClass('error_disable');
        } else {
            $(emp).addClass('error_disable');
        }
    }
    cuit.onblur = function() {
        if(cuit.value.trim() == "") {
            $(cu).removeClass('error_disable');
        } else {
            $(cu).addClass('error_disable');
        }

        if(cuit.value.trim().length > 0) {
            $(cu).addClass('error_disable');
        }
    }
    localidad.onblur = function() {
        if(localidad.value.trim() == "") {
            $(loc).removeClass('error_disable');
        } else {
            $(loc).addClass('error_disable');
        }
    }
    telefono.onblur = function() {
        if(telefono.value.trim() == "") {
            $(tel).removeClass('error_disable');
        } else {
            $(tel).addClass('error_disable');
        }
    }
    email.onblur = function() {
        if(email.value.trim() == "") {
            $(ema).removeClass('error_disable');
        } else {
            $(ema).addClass('error_disable');
        }
    }
    consulta.onblur = function() {
        if(consulta.value.trim() == "") {
            $(consult).removeClass('error_disable');
        } else {
            $(consult).addClass('error_disable');
        }
    }
})




