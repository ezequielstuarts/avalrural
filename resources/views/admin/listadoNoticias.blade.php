@extends('admin.layout')
@section('admin')

<div class="container mt-3 mb-5">
    <div class="row">

        <div class="col-md-9 ">
            <h5 class="text-secondary">Listado de noticias. <b>{{$totalNoticias}}</b> Noticias en la base de datos.</h5>
        </div>

        <div class="col-md-2">
            <div class="boton-nueva-noticia">
                <a class="" href="{{route('admin.noticias.nueva_noticia')}}">
                    Nueva Noticia
                </a>
            </div>
        </div>

        <div class="col-md-1">
            <div class="boton-nueva-noticia">
                <a class="" href="{{route('admin.noticiasHide')}}" title="Ver noticias ocultas"><i class="fas fa-eye-slash"></i></a>
            </div>
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
    <table class="table table-hover">
        <thead>
            <tr style="background-color:#c6f8be;">
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
                <td><b style="font-size:18px;">{{$noticia->title}}</b>
                   <p><b>Ruta amigable:</b> {{$noticia->slug}}</p>
                    <hr>
                    <p class="text-secondary" style="font-size:12px;"><b>Subtitulo: </b>{{$noticia->subtitle}}</p>
                </td>
                <td>
                    @if (!empty($noticia->img_noticia))
                        <img style="width:100px" src="/storage/imagenes/img_noticias/{{$noticia->img_noticia}}"/>
                    @else
                        <img style="width:100px" src="/img/noimg.png" class="card-img-top">
                    @endif
                </td>
                <td>
                    <div class="form-group btn-group">
                        <a href="{{route('admin.noticias.edit', $noticia->slug)}}" class="btn btn-warning">Editar</a>
                    </div>
                    <div class="form-group btn-group">
                        <form action="{{url('admin/noticias/hide', $noticia->id)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$noticia->id}}">
                            <input class="btn btn-secondary" type="submit" value="Ocultar" onclick="return confirm('Seguro queres ocultar esta noticia?')">
                        </form>
                    </div>
                </td>
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
