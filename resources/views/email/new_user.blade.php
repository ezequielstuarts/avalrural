<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Nuevo usuario registrado en el sistema de gestion de Aval Rural.</h3>
    <p><b>Nombre: </b>{{$user->name}}</p>
    <p><b>Email: </b>{{$user->email}}</p>
    <p><b>Rol: </b>
        @if (($user->rol) == 1)
            Administrador
        @else 
            Invitado
        @endif
    </p>
</body>
</html>