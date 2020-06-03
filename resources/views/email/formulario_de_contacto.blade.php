<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje desde Aval Rural</title>
</head>
<body>
    <h1>Mensaje recibido desde el formulario de contacto de Aval Rural.</h1>
    <h2><b>Apellido: </b>{{$mensaje['apellido']}} </h2>
    <h2><b>Nombre: </b>{{$mensaje['nombre']}} </h2>
    <h2><b>Empresa: </b>{{$mensaje['empresa']}} </h2>
    <h2><b>Cuit: </b>{{$mensaje['cuit']}} </h2>
    <h2><b>Localidad: </b>{{$mensaje['localidad']}} </h2>
    <h2><b>Telefono: </b>{{$mensaje['telefono']}} </h2>
    <h2><b>E-mail </b>{{$mensaje['email']}} </h2>
    <h2><b>Consulta: </b>{{$mensaje['consulta']}} </h2>
</body>
</html>