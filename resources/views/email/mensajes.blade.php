@extends('admin.layout')
@section('admin')
    <div class="container mb-5" id="app">
        <mensajes-component></mensajes-component>
    </div>

{{--
<div class="container">
    <h5 class="text-secondary">Mensajes recibidos desde formulario de contacto.</h5>
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
    <div class="row">
        <div class="col-md-8 ">
            <h5 class="text-secondary"><b>{{$totalMensajes}}</b> Mensajes en la base de datos.</h5></div>
    </div>
</div>

<div class="container text-right mb-4">
    <a href="{{ route('admin')}}">
        <button class="btn btn-outline-secondary">Volver</button>
    </a>
</div>


<div class="container">

    <table class="table table-hover table-sprite">
        <thead>
            <tr>
                <th scope="col">Recibido el</th>
                <th scope="col">De</th>
                <th scope="col">Consulta</th>
                <th scope="col">Empresa</th>
                <th scope="col">CUIT</th>
                <th scope="col">Localidad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                @if ( Auth::user()->rol )
                <th colspan="2">&nbsp;</th>
                @endif
            </tr>
        </thead>
        @forelse ($mensajes as $mensaje)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($mensaje->created_at))}}</td>

                <td>{{$mensaje->nombre}} {{$mensaje->apellido}} </td>

                <td>{{ $mensaje->consulta}}</td>

                <td>{{$mensaje->empresa}}</td>
                <td>{{$mensaje->cuit}}</td>
                <td>{{$mensaje->localidad}}</td>
                <td>{{$mensaje->telefono}}</td>
                <td>{{$mensaje->email}}</td>
                <td>
                    <input type="hidden" name="id" value="{{$mensaje->id}}">
                    <input class="btn btn-sm btn-info" type="submit" value="Ver" onclick="ver()">
                </td>
                @if ( Auth::user()->rol )
                <td>
                    <form action="{{route('admin.mensajes.destroy', $mensaje->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$mensaje->id}}">
                        <input class="btn btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                    </form>
                </td>
                @endif
            </tr>
            <tr>
            </tr>
        </tbody>
        @empty
        <div class="alert alert-info" role="alert">
            <h3 class="text-center">No hay mensajes recibidos</h3>
        </div>
        @endforelse
    </table>
    {{ $mensajes->links() }}
</div>


<script>
    function ver() {
        console.log('ver');
    }
</script> --}}






@endsection