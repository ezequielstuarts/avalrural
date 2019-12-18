<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

<div class="container text-right">
    <h4>{{ date('l jS \\of F Y') }}</h4>
</div>
<div class="">
    <div class="container">
        <h5>{{$noticia->title}} | <b>Ultima Actualizacion:</b> {{$noticia->updated_at->format('d-m-Y')}}</h5>
        <hr>
    </div>
</div>
<div class=" container mt-5">
<form action="/admin/update/{{$noticia->id}}" method="post" enctype="multipart/form-data">
    @method("patch")
    {{csrf_field()}}
    <div class="form-group">
        <label for="date">Fecha de la noticia</label>
    <input type="date" class="form-control" id="date" name="date" value="{{$noticia->date}}">
    </div>

    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$noticia->title}}">
        <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
    </div>

    <div class="form-group">
        <label for="subtitle">Subtitulo</label>
        <textarea class="form-control" id="subtitle" rows="3" name="subtitle" value="">{{$noticia->subtitle}}</textarea>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-8">
                <label for="img_preview">Imagen Preview <span style="color:red;">800 x 600 px</span></label>
            <input type="file" class="form-control-file" id="img_preview" name="img_preview">
            </div>
            <div class="col-4">
                <img class="img-responsive" src="/storage/{{$noticia->img_preview}}" alt="">
            </div>
        </div>
        <hr>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-8">
                <label for="img_noticia">Imagen completa</label>
                <input type="file" class="form-control-file" id="img_noticia" name="img_noticia">
            </div>
            <div class="col-4">
                <img class="img-responsive" src="/storage/{{$noticia->img_noticia}}" alt="">
            </div>
            <hr>
        </div>
    </div>


    <div class="form-group">
        <label class="labels" for="content">Contenido</label>
        <textarea id="summernote" required class="form-control" name="content">{{$noticia->content}}</textarea>
    </div>



    <div class="form-group">
        <button class="btn btn-success" type="submit">Guardar Cambios</button>
        <a class="btn btn-info" href="{{ route('admin')}}">Caneclar</a>
    </div>
</form>
<div class="container text-right">
    <a href="{{ route('admin')}}">
        <button class="btn btn-danger">Volver</button>
    </a>
</div>
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
