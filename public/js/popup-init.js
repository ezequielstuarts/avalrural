// window.onload = function() {
    var pops = document.querySelectorAll('.precalificate');
    this.Array.from(pops).forEach(function(pop){
        pop.onclick = function() {
            var nuevo = document.getElementById('nuevo-precalif');
            nuevo.removeAttribute('class', 'ocultar');
        }
    })

    var cerrar = document.getElementById('cerrar-pop');
    cerrar.onclick = function () {
        var nuevo = document.getElementById('nuevo-precalif');
        nuevo.setAttribute('class', 'ocultar');
    }



    var ap_precal = document.getElementById('error_nombreyapellido');
    var email_precal = document.getElementById('error_email');
    var telefono_precal = document.getElementById('error_telefono');
    var celular_precal = document.getElementById('error_celular');
    var empresa_precal = document.getElementById('error_empresa');
    var cuit_precal = document.getElementById('error_cuit');
    var rubro_precal = document.getElementById('error_rubro');
    var afip_precal = document.getElementById('error_afip');
    var atividad_precal = document.getElementById('error_actividad');

    NombreYApellido.onblur = function() {
        if(NombreYApellido.value == "") {
            $(ap_precal).removeClass('error_disable');
        } else {
            $(ap_precal).addClass('error_disable');
        }
    }
    Email.onblur = function() {
        if(Email.value == "") {
            $(email_precal).removeClass('error_disable');
        } else {
            $(email_precal).addClass('error_disable');
        }
    }
    Telefono.onblur = function() {
        if(Telefono.value == "") {
            $(telefono_precal).removeClass('error_disable');
        } else {
            $(telefono_precal).addClass('error_disable');
        }
    }
    Celular.onblur = function() {
        if(Celular.value == "") {
            $(celular_precal).removeClass('error_disable');
        } else {
            $(celular_precal).addClass('error_disable');
        }
    }
    Empresa.onblur = function() {
        if(Empresa.value == "") {
            $(empresa_precal).removeClass('error_disable');
        } else {
            $(empresa_precal).addClass('error_disable');
        }
    }
    CUIT.onblur = function() {
        if(CUIT.value == "") {
            $(cuit_precal).removeClass('error_disable');
        } else {
            $(cuit_precal).addClass('error_disable');
        }
    }
    Rubro.onblur = function() {
        if(Rubro.value == "") {
            $(rubro_precal).removeClass('error_disable');
        } else {
            $(rubro_precal).addClass('error_disable');
        }
    }
    AFIP.onblur = function() {
        if(AFIP.value == "") {
            $(afip_precal).removeClass('error_disable');
        } else {
            $(afip_precal).addClass('error_disable');
        }
    }
    Actividad.onblur = function() {
        if(Actividad.value == "") {
            $(atividad_precal).removeClass('error_disable');
        } else {
            $(atividad_precal).addClass('error_disable');
        }
    }


// var theform = document.querySelector(".contact_form");
// var elementsofForm = theform.elements;
// console.log(elementsofForm, 'the');


// var campoNombre = document.querySelector('input[name=NombreYApellido]');
// campoNombre.onblur = function() {
//     if(this.value.trim() == '') {
//         var error = document.querySelector('.p-error');
//         error.append("Hola Mundo!");
//     }
//     if(this.value.trim() != '') {
//         var error = document.querySelector('.p-error');
//         error.remove("Hola Mundo!");
//     }

// }
