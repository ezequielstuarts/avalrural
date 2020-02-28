window.onload = function() {
    var p = document.createElement('h1');
    var error = document.createTextNode('El campo es requerido');
    p.append(error);

    var nombre = document.getElementById('Apellido');

    nombre.onblur = function() {
        nombre.append(p);
        console.log(p);
    }


}

