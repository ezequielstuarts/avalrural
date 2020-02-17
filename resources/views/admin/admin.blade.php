@extends('home')
@section('admin')
<div class="container mt-5 mb-5">
    <a href="{{route('noticias.nueva_noticia')}}">
        <button class="btn btn-danger">Nueva Noticia</button>
    </a>
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
                <td><img style="width:100px" src="/storage/{{$noticia->img_noticia}}"/></td>
                <td>
                    <input type="hidden" name="id" value="{{$noticia->id}}">
                    <a href="{{route('noticia.edit', $noticia->id)}}
                        ">
                        <i class="far fa-edit" title="Editar"></i>
                    </a>
                </td>
                <td>
                    <form action="{{route('noticia.destroy', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        {{-- <input type="hidden" name="id" value="{{$noticia->id}}"> --}}
                        <input class="btn btn-danger mt-5" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">

                    </form>
                </td>
            </tr>
        </tbody>
        @empty
        <h2>No hay Noticias</h2>
        @endforelse
    </table>
</div>


@endsection
