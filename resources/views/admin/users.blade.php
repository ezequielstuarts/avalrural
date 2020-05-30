@extends('admin.layout')
@section('admin')

<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h5 class="text-secondary">Gestión de usuarios</h5>
        </div>
        @if (Auth::user()->rol)
            <div class="col-md-4">
                <div class="boton-nueva-noticia">
                    <a class="" href="{{route('admin.users.nuevo_usuario')}}">
                        Agregar Usuario
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="container">
    <table class="table table-hover table-sprite">
        
        @if ( Auth::user()->rol )
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            @foreach ($usuarios as $user)
                <tbody>
                    <tr>
                        <td width="130px">{{ $user->name }}</td>
                        <td width="130px">{{ $user->email }}</td>
                        <td width="130px">
                            @if ($user->rol)
                                Administrador
                            @else
                                Invitado
                            @endif
                        </td>
                        
                        @if ( Auth::user()->rol )
                            <td class="float-right">
                                @if ( Auth::user()->id != $user->id )
                                    <form action="{{route('admin.user.destroy', $user->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                                    </form>
                                @endif
                                @if ( Auth::user()->id === $user->id )
                                <div class="btn btn- btn-success">ONLINE</div>
                                @endif
                            </td>

                            <td class="float-right">
                                <input type="hidden" name="id" value="{{$user->id}}" class="floa-right">
                                <a href="{{route('admin.users.edit_user', $user->id)}}" class="btn btn-warning">Editar</a>
                            </td>
                        @endif
                    </tr>
                </tbody>
            @endforeach
        @else
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th colspan="1">Acctiones</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td width="130px">{{ Auth::user()->name }}</td>
                        <td width="130px">{{ Auth::user()->email }}</td>
                        <td width="130px">Invitado</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('admin.users.edit_user', Auth::user()->id)}}" class="btn btn-warning">Editar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
        @endif
    </table>
</div>
<div class="container text-right">
    <a href="{{ route('admin')}}">
        <button class="btn btn-outline-secondary">Volver</button>
    </a>
</div>

@endsection
