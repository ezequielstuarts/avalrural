@extends('admin.admin')
@section('admin')

<div class="container">
    <h5 class="text-secondary">Gestión de usuarios</h5>
</div>

@if ( Auth::user()->rol)
    <div class="container mt-3 mb-5">
        <a  href="{{route('users.nuevo_usuario')}}">
            <button class="btn btn-info">Nuevo Usuario</button>
        </a>
    </div>
@endif

<div class="container">
    @if (session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-dismiss="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>{{ session('mensaje') }}</h4>
    </div>
    @endif
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
                                <form action="{{route('user.destroy', $user->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                                </form>
                            </td>

                            <td class="float-right">
                                <input type="hidden" name="id" value="{{$user->id}}" class="floa-right">
                                <a href="{{route('users.edit_user', $user->id)}}" class="btn btn-warning">Editar</a>
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
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td width="130px">{{ Auth::user()->name }}</td>
                        <td width="130px">{{ Auth::user()->email }}</td>
                        <td width="130px">
                            @if (!Auth::user())
                                Administrador
                            @else
                                Invitado
                            @endif
                        </td>
                        <td>
                            <input type="hidden" name="id">
                            <a href="{{route('users.edit_user', Auth::user()->id)}}" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                    </tr>
                </tbody>
        @endif
    </table>
</div>
<div class="container text-right">
    <a href="{{ route('admin')}}">
        <button class="btn btn-danger">Volver</button>
    </a>
</div>

@endsection
