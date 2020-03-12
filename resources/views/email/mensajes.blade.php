@extends('home')
@section('admin')
<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-md-8 ">
            <h5 class="text-secondary"> <b></b> mensajes en la base de datos.</h5></div>
    </div>
</div>

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
        <thead>
            <tr>
                <th scope="col">Recibido el</th>
                <th scope="col">De</th>
                <th scope="col">Asunto</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        @forelse ($mensajes as $mensaje)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($mensaje->created_at))}}</td>
                <td>{{$mensaje->nombre}} {{$mensaje->apellido}} </td>
                <td><a href="">{{ str_limit($mensaje->consulta, 80)}}</a></td>

                <td>
                    <form action="{{route('mensajes.destroy', $mensaje->nombre)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$mensaje->nombre}}">
                        <input class="btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">

                    </form>
                </td>
            </tr>
        </tbody>
        @empty
        <div class="alert alert-info" role="alert">
            <h3>No hay mensajes cargadas en la base de datos</h3>
        </div>
        @endforelse
    </table>
</div>


@endsection
