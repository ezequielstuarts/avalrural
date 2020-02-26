@extends('home')
@section('admin')
<div class="container mt-5 mb-5">
    <a  href="">
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
                <td width="130px">{{ $user->email }}</td>
                <td>
                    <input type="hidden" name="id">
                    <a href="
                    {{-- {{route('noticias.edit', $noticia->id)}} --}}
                        ">
                        <i class="far fa-edit" title="Editar"></i>
                    </a>
                </td>
                <td>
                    <form
                    {{-- action="{{route('noticias.destroy', $noticia->id)}}" --}}
                     method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id">
                        <i class="far fa-trash-alt" title="Eliminar" onclick="return confirm('Seguro queres eliminar?')"></i>
                    </form>
                </td>
            </tr>

        </tbody>
        @endforeach
    </table>
</div>


@endsection
