@extends('admin.admin')
@section('admin')
<div class="container mt-5 mb-5">
    <a  href="nuevo_usuario">
        <button class="btn btn-danger">Nuevo Usuario</button>
    </a>
</div>


<div class="container">
    <table class="table table-hover table-sprite">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Ultimo Acceso</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        @foreach ($usuarios as $user)
        <tbody>
            <tr>
                <td width="130px">{{ $user->name }}</td>
                <td width="130px">{{ $user->id }}</td>
                <td width="130px">{{ $user->email }}</td>
                <td>
                    <input type="hidden" name="id">
                    <a href="">
                        <i class="far fa-edit" title="Editar"></i>
                    </a>
                </td>
                <td>
                    <form action="{{route('user.destroy', $user->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <input class="btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                    </form>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>
</div>


@endsection
