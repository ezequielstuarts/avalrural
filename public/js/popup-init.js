// window.onload = function() {
var pops = document.querySelectorAll('.precalificate');
this.Array.from(pops).forEach(function(pop) {
    pop.onclick = function() {
        var nuevo = document.getElementById('nuevo-precalif');
        nuevo.removeAttribute('class', 'ocultar');
    }
})

var cerrar = document.getElementById('cerrar-pop');
cerrar.onclick = function() {
    var nuevo = document.getElementById('nuevo-precalif');
    nuevo.setAttribute('class', 'ocultar');
}