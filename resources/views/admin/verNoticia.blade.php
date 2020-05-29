@extends('admin.layout')
@section('admin')
<div class="container pb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b>{{ $noticia->title}}</b>
                    <a href=" {{ route('admin.noticias') }} " class="btn btn-sm btn-info float-right">Volver a listado</a>
                    
                    <a href="{{ route('admin.noticias.edit', $noticia->id) }}" class="float-right btn btn-sm btn-outline-secondary mr-3">Editar</a>
                    
                </div>
                <div class="card-body row">
                    <div class="col-md-8">
                        <p class="mt-3"><b>Fecha:</b> {{date('d-m-Y', strtotime($noticia->date))}} </p>
                        <hr>
                        <p class="mt-3"><b>Titulo:</b> {{ $noticia->title}} </p>
                        <hr>
                        <p class="mt-3"><b>Subtitulo:</b> {{ $noticia->subtitle}} </p>
                        <hr>
                        <p class="mt-3"><b>Contenido:</b> {!! $noticia->content !!} </p>
                    </div>
                    <div class="col-md-4">
                        @if (!empty($noticia->img_noticia))
                            <img style="width:100%" class="img-responsive" src="/storage/imagenes/img_noticias/{{$noticia->img_noticia}}"/>
                        @else
                            <img style="width:100%" class="img-responsive" src="/img/noimg.png" class="card-img-top">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
