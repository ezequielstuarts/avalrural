<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {font-size: 12px;}
        h3{text-align: center}
        p{margin: 2px;}
    </style>
    <title>Mensajes Aval Rural</title>
</head>
<body>
    <h3>Mensajes recibidos desde el formulario de precalificaciones de Aval Rural.</h3>
    <hr>
    @foreach ($precalificaciones as $precalificacion)
        <p>
            <b>Recibido el: {{date('d-m-Y', strtotime($precalificacion->created_at))}}</b> a las
            <span>{{date('H:i', strtotime($precalificacion->created_at))}} hs. </span><b>De: </b> {{$precalificacion->nombre}}, {{$precalificacion->apellido}}
        </p>
        <p>
            <b>E-mail: </b> {{$precalificacion->email}}, <b>Empresa: </b>{{$precalificacion->empresa}}, <b>CUIT: </b>{{$precalificacion->cuit}}, <b>Localidad: </b>{{$precalificacion->localidad}}, <b>Teléfono: </b>{{$precalificacion->telefono}}</p>
            <p><b>Consulta: </b>{{$precalificacion->consulta}}
        </p>
        <hr>
    @endforeach
</body>
</html>