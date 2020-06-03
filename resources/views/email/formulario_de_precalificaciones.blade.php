<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje desde Aval Rural</title>
</head>
<body>
    <h1>Mensaje recibido desde el formulario de precalificaciones de Aval Rural.</h1>
    <h2><b>NombreYApellido:</b> {{$mensaje['NombreYApellido']}} </h2>
    <h2><b>Email:</b> {{$mensaje['Email']}} </h2>
    <h2><b>Telefono:</b> {{$mensaje['Telefono']}} </h2>
    <h2><b>Celular:</b> {{$mensaje['Celular']}} </h2>
    <h2><b>Empresa:</b> {{$mensaje['Empresa']}} </h2>
    <h2><b>CUIT:</b> {{$mensaje['CUIT']}} </h2>
    <h2><b>Rubro:</b> {{$mensaje['Rubro']}} </h2>
    <h2><b>AFIP:</b> {{$mensaje['AFIP']}} </h2>
    {{-- <h2><b>Balance:</b> {{$mensaje['Balance']}} </h2> --}}
    {{-- <h2><b>Nomina:</b> {{$mensaje['Nomina']}} </h2> --}}
    <h2><b>Actividad:</b> {{$mensaje['Actividad']}} </h2>
</body>
</html>