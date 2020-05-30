@extends('admin.layout')
@section('admin')

<div class="container mb-5">
    <div class="row">

        <div class="col-md-9 ">
            <h5 class="text-secondary"><b>{{$totalNoticias}}</b> Noticias en la base de datos.</h5>
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
    <table class="table table-hover ">
        <thead>
            <tr class="background-aval"">
                <th colspan="col">Fecha</th>
                <th colspan="col">Titulo</th>
                <th colspan="col">Imagen</th>
                <th colspan="1"></th>
                <th>Acciones</th>
                <th colspan="1"></th>
                <!-- <th colspan="col">Acciones</th> -->
            </tr>
        </thead>
        @forelse ($noticias as $noticia)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($noticia->date))}}</td>
                <td><b style="font-size:18px;">{{$noticia->title}}</b>
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
                
                <td width="5px">
                    <a href="{{ route('admin.noticias.show', $noticia->slug) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                </td>
                
                <td width="5px">
                    <a href="{{ route('admin.noticias.edit', $noticia->id) }}" class="btn btn-sm btn-outline-success">Editar</a>
                </td>
                
                <td width="5px">
                    <a href="{{ route('admin.noticias.hide', $noticia->id) }}" class="btn btn-sm btn-outline-info" onclick="return confirm('Seguro queres ocultar esta noticia?')">Ocultar</a>
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
