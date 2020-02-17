window.onload = function() {
    console.log("ok");
}

function enviar_datos_ajax() {
    var nombre = document.getElementById("NombreYApellido").value
    var email = document.getElementById("Email").value

    var url = "precalificate-form";

    $.ajax({

        type: "post",
        url: url,
        data: {nombre:nombre, email: email},

        success: function(datos) {
            $("#mostrardatos").html(datos);
        }
    })
}
