

window.onload = function() {
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
}

var theform = document.querySelector(".contact_form");
var elementsofForm = theform.elements;
console.log(elementsofForm, 'the');


var campoNombre = document.querySelector('input[name=NombreYApellido]');
campoNombre.onblur = function() {
    if(this.value.trim() == '') {
        var error = document.querySelector('.p-error');
        error.append("Hola Mundo!");
    }
    if(this.value.trim() != '') {
        var error = document.querySelector('.p-error');
        error.remove("Hola Mundo!");
    }

}
