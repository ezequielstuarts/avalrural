<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    </head>
    <body>
        <div class="container text-right">
            <h4>{{ date('l jS \\of F Y') }}</h4>
        </div>
        <div class="container mt-5">
        <form action="{{route('nueva_noticia')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="date">Fecha de la noticia</label>
                <input type="date" class="form-control" id="date" name="fecha" value="">
            </div>
            
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitulo</label>
                <textarea class="form-control" id="subtitle" rows="3" name="subtitle"></textarea>
                
            </div>
            
            <div class="form-group">
                <label for="img_preview">Imagen Preview</label>
                <input type="file" class="form-control-file" id="img_preview" name="img_preview">
            </div>
            <div class="form-group">
                <label for="img_noticia">Imagen completa</label>
                <input type="file" class="form-control-file" id="img_noticia" name="img_noticia">
            </div>
            
            <div id="summernote">Hello Summernote</div>
            <div class="form-group">
                <button id="enviar" class="btn btn-success" type="submit">Enviar</button>
                <a class="btn btn-warning" href="/nueva_noticia">Limpiar</a>
            </div>
        </form>
    </div>
    
    {{-- <form method="post">
        <textarea id="summernote" name="editordata"></textarea>
    </form> --}}
    
    
    
    
    
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script src="js/summernote.js"></script>
    
    <script>
        $(document).ready(function() {
        $('#summernote').summernote();});
    </script>

    
</body>
</html>