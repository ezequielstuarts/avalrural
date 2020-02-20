@extends('home')
@section('admin')
<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-md-8 ">
            <h5 class="text-secondary"> <b>{{$totalNoticias}}</b> Noticias en la base de datos, <b>última modificacion el día </b> {{$ultima_modificacion->updated_at}} </h5></div>
        <div class="col-md-4">
            <a class="float-right" href="{{route('noticias.nueva_noticia')}}">
                <button class="btn btn-info">Nueva Noticia</button>
            </a>
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
                <th scope="col">Fecha</th>
                <th scope="col">Titulo</th>
                <th scope="col">Imagen</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        @forelse ($noticias as $noticia)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($noticia->date))}}</td>
                <td>{{$noticia->title}}</td>
                <td>
                    @if (!empty($noticia->img_noticia))
                        <img style="width:100px" src="/storage/{{$noticia->img_noticia}}"/>
                    @else
                        <img style="width:100px" src="/img/noimg.png" class="card-img-top">
                    @endif
                </td>
                <td>
                    <input type="hidden" name="id" value="{{$noticia->id}}">
                    <a href="{{route('noticia.edit', $noticia->id)}}
                        ">
                        <i class="far fa-edit mt-1" title="Editar"></i>
                    </a>
                </td>
                <td>
                    <form action="{{route('noticia.destroy', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$noticia->id}}">
                        <input class="btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">

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
