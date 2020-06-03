function handleFileSelectMini(evt) {
    var files = evt.target.files; // FileList object
    console.log(files);
    document.getElementById("nombre_img_miniature").innerHTML = files[0].name;
}

function handleBaseDeDatosMini(evt) {
    let name = document.getElementsByClassName("custom-file-label").value;
    document.getElementById("nombre_img_miniature").innerHTML = name;
}
document.getElementById("validatedCustomMini").addEventListener("change", handleFileSelectMini, false);


function handleFileSelectFull(evt) {
    var files = evt.target.files; // FileList object
    console.log(files);
    document.getElementById("nombre_img_full").innerHTML = files[0].name;
}

function handleBaseDeDatosFull(evt) {
    let name = document.getElementsByClassName("custom-file-label").value;
    document.getElementById("nombre_img_full").innerHTML = name;
}
document.getElementById("validatedCustomFull").addEventListener("change", handleFileSelectFull, false);

// document.getElementById("baseDeDatos").addEventListener("keyup", handleBaseDeDatos, false);