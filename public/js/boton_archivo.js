function handleFileSelect(evt) {
  var files = evt.target.files; // FileList object
  console.log(files);
  document.getElementById("img_preview").innerHTML = files[0].name;
}

function handleBaseDeDatos(evt) {
  let name = document.getElementById("baseDeDatos").value;
  document.getElementById("img_preview").innerHTML = name;
}
document
  .getElementById("upload")
  .addEventListener("change", handleFileSelect, false);

document
  .getElementById("baseDeDatos")
  .addEventListener("keyup", handleBaseDeDatos, false);
