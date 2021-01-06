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
        document.getElementById('precalif_form').reset();
        $(".complete-campos").html('');
        $(".acepte-terminos").html('');
    }
        
    var ap_precal = document.getElementById('error_nombre');
    var email_precal = document.getElementById('error_email');
    var telefono_precal = document.getElementById('error_telefono');
    var celular_precal = document.getElementById('error_celular');
    var empresa_precal = document.getElementById('error_empresa');
    var cuit_precal = document.getElementById('error_cuit');
    var rubro_precal = document.getElementById('error_rubro');
    var afip_precal = document.getElementById('error_afip');
    var atividad_precal = document.getElementById('error_actividad');

    nombre.onblur = function() {
        if(nombre.value == "") {
            $(ap_precal).removeClass('error_disable');
        } else {
            $(ap_precal).addClass('error_disable');
        }
    }
    email.onblur = function() {
        if(email.value == "") {
            $(email_precal).removeClass('error_disable');
        } else {
            $(email_precal).addClass('error_disable');
        }
    }
    telefono.onblur = function() {
        if(telefono.value == "") {
            $(telefono_precal).removeClass('error_disable');
        } else {
            $(telefono_precal).addClass('error_disable');
        }
    }
    celular.onblur = function() {
        if(celular.value == "") {
            $(celular_precal).removeClass('error_disable');
        } else {
            $(celular_precal).addClass('error_disable');
        }
    }
    empresa.onblur = function() {
        if(empresa.value == "") {
            $(empresa_precal).removeClass('error_disable');
        } else {
            $(empresa_precal).addClass('error_disable');
        }
    }
    cuit.onblur = function() {
        if(cuit.value == "") {
            $(cuit_precal).removeClass('error_disable');
        } else {
            $(cuit_precal).addClass('error_disable');
        }
    }
    rubro.onblur = function() {
        if(rubro.value == "") {
            $(rubro_precal).removeClass('error_disable');
        } else {
            $(rubro_precal).addClass('error_disable');
        }
    }
    afip.onblur = function() {
        if(afip.value == "") {
            $(afip_precal).removeClass('error_disable');
        } else {
            $(afip_precal).addClass('error_disable');
        }
    }
    actividad.onblur = function() {
        if(actividad.value == "") {
            $(atividad_precal).removeClass('error_disable');
        } else {
            $(atividad_precal).addClass('error_disable');
        }
    }

    var checkbox = document.getElementById('acepta');
    checkbox.addEventListener("change", validaCheckbox, false);
    function validaCheckbox() {
        var checked = checkbox.checked;
        if(!checked){
            $(".acepte-terminos").html("Debe aceptar los términos y condiciones.");
        } else {
            $(".acepte-terminos").html('');
        }
    }
    

// $(document).ready(function() {
    $("#BtnEnviarPrecalificacion").click(function (e) {
        e.preventDefault();        
        if(document.getElementById('acepta').checked) {   
            var route = $('#precalif_form').attr('action');
            var formData = new FormData($("#precalif_form")[0]);            
            document.getElementById('BtnEnviando').style.display = 'block';
            document.getElementById('BtnEnviarPrecalificacion').style.display = 'none';
            
            $.ajax({
                url: route,
                type: "post",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,  // tell jQuery not to process the data
                contentType: false,   // tell jQuery not to set contentType

                success:function(){
                    var nuevo = document.getElementById('nuevo-precalif');
                    nuevo.setAttribute('class', 'ocultar');
                    document.getElementById('precalif_form').reset();
                    document.getElementById('BtnEnviando').style.display = 'none';
                    document.getElementById('BtnEnviarPrecalificacion').style.display = 'block';
                    $(".complete-campos").html('');
                    $(".acepte-terminos").html('');
                },
                error: function(error){
                    document.getElementById('BtnEnviando').style.display = 'none';
                    document.getElementById('BtnEnviarPrecalificacion').style.display = 'block';
                    if (error.status = 422) {
                        $(".complete-campos").html("Debe completar todos los campos.");
                    } else if (error.status = 500){
                        alert('Ocurrio algun error al intentar enviar los archivos.')
                    }
                }
            });
        } else {
            $(".acepte-terminos").html("Debe aceptar los términos y condiciones.");
        }
    });
// })