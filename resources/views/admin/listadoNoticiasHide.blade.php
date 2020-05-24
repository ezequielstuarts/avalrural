@extends('admin.layout')
@section('admin')

<div class="container mt-3 mb-3">
    <div class="row">

        <div class="col-md-11 ">
            <h5 class="text-secondary">Listado de noticias <b>ocultas.</b> (Estas no se muestran en el sitio) </h5>
        </div>

        <div class="col-md-1">
            <a class="float-right" href="{{route('admin.noticias')}}" title="Ver noticias visibles">
            <i class="fas fa-eye"></i></a>
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
    <table class="table table-hover ">
        <thead>
            <tr style="background-color:#c6f8be;">
                <th colspan="col">Fecha</th>
                <th colspan="col">Titulo</th>
                <th colspan="col">Imagen</th>
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
                    <a href="{{ route('admin.noticiasHide.visible', $noticia->id) }}" class="btn btn-sm btn-outline-success">Hacer visible</a>
                </td>
                
                <td width="5px">
                    <form action="{{route('admin.noticiasHide.destroy', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$noticia->id}}">
                        <input class="btn btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                    </form>
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
