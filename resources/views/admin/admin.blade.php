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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id Noticia</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Subtitulo</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            @forelse ($noticias as $noticia)
            <tbody>
              <tr>
                <th scope="row">
                    {{$noticia->id}}
                </th>
                <td>{{$noticia->date}}</td>
                <td>{{$noticia->title}}</td>
                <td>{{$noticia->subtitle}}</td>
                <td><img style="width:100px" src="/storage/{{$noticia->img_noticia}}"/></td>
                <td>
                    {{-- <a href=" {{route('noticia.edit', $noticia->id)}} ">
                        <div class="btn btn-warning mt-5">Editar</div>
                    </a> --}}
                </td>
                <td>
                    <form action="{{route('admin.destroy', $noticia->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$noticia->id}}">
                        <input class="btn btn-danger mt-5" type="submit" value="Eliminar">
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






