@extends('admin.layout')
@section('admin')

<div class="container mt-3 mb-3">
    <div class="row">

        <div class="col-md-8 ">
            <h5 class="text-secondary">Listado de noticias. <b>{{$totalNoticias}}</b> Noticias en la base de datos.</h5>
        </div>

        <div class="col-md-3">
            <a class="float-right" href="{{route('admin.noticias.nueva_noticia')}}">
                <button class="btn btn-info">Nueva Noticia</button>
            </a>
        </div>

        <div class="col-md-1">
            <a class="float-right" href="{{route('admin.noticiasHide')}}" title="Ver noticias ocultas">
            <i class="fas fa-eye-slash"></i></a>
        </div>

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
                <th colspan="col">Fecha</th>
                <th colspan="col">Titulo</th>
                <th colspan="col">Imagen</th>
                <th colspan="2">Acciones</th>
                <!-- <th colspan="col">Acciones</th> -->
            </tr>
        </thead>
        @forelse ($noticias as $noticia)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($noticia->date))}}</td>
                <td>{{$noticia->title}}</td>
                <td>
                    @if (!empty($noticia->img_noticia))
                        <img style="width:100px" src="/storage/imagenes/img_noticias/{{$noticia->img_noticia}}"/>
                    @else
                        <img style="width:100px" src="/img/noimg.png" class="card-img-top">
                    @endif
                </td>
                <td>
                    <a href="{{route('admin.noticias.edit', $noticia->id)}}" class="btn btn-warning">Editar</a>
                </td>

                <td>
                    <form action="{{url('admin/noticias/hide', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$noticia->id}}">
                        <input class="btn btn-default" type="submit" value="Ocultar" onclick="return confirm('Seguro queres ocultar esta noticia?')">
                    </form>
                </td>
                

                
                <!-- <td>
                    <form action="{{route('admin.noticias.destroy', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$noticia->id}}">
                        <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">

                    </form>
                </td> -->
            </tr>
        </tbody>
        @empty
        <div class="alert alert-info" role="alert">
            <h3>No hay Noticias cargadas en la base de datos</h3>
        </div>
        @endforelse
    </table>
</div>
@endsection
