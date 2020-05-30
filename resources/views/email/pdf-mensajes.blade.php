<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {font-size: 12px;}
        h3{text-align: center}
    </style>
    <title>Mensajes Aval Rural</title>
</head>
<body>
    <h3>Mensajes recibidos desde el formulario de Contacto de Aval Rural.</h3>
    <hr>
    
    @foreach ($mensajes as $mensaje)
    
    <p width="130px"><b>Fecha: {{date('d-m-Y', strtotime($mensaje->created_at))}}</b>
        <span>{{date('H:i', strtotime($mensaje->created_at))}} hs.</span>, <b>De: </b> {{$mensaje->nombre}}, {{$mensaje->apellido}}
        </p>
        <p><b>E-mail: </b> {{$mensaje->email}}, <b>Empresa: </b>{{$mensaje->empresa}}, <b>CUIT: </b>{{$mensaje->cuit}}, <b>Localidad: </b>{{$mensaje->localidad}}, <b>Teléfono: </b>{{$mensaje->telefono}}</p>
        <p><b>Consulta: </b>{{$mensaje->consulta}}</p>
        <hr>
        @endforeach
        
        
</body>
</html>