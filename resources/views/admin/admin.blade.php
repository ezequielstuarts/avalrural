<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Panel de Administracion</title>
</head>
<body>


    <div class="container mt-5 mb-5">
        <a href="{{route('admin.nueva_noticia')}}">
            <button class="btn btn-danger">Cargar Noticia</button>
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id Noticia</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Subtitulo</th>
                    <th scope="col">Noticia</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            @forelse ($noticias as $noticia)
            <tbody>
              <tr>
                <th scope="row">{{$noticia->id}}</th>
                <td>{{date('d-m-Y', strtotime($noticia->date))}}</td>
                <td>{{$noticia->title}}</td>
                <td>{{$noticia->subtitle}}</td>
                <td>{{$noticia->content}}</td>
                <td><img style="width:100px" src="/storage/{{$noticia->img_noticia}}"/></td>
                <td>
                    <input type="hidden" name="id" value="{{$noticia->id}}">
                    <a href="{{route('admin.edit', $noticia->id)}}
                    ">
                    <input class="btn btn-warning mt-5" type="submit" value="Editar">
                    </a>
                    <form action="{{route('admin.destroy', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$noticia->id}}">
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


</body>
</html>






