

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">


        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!-- Datepicker Files -->
        <link rel="stylesheet" href="../../css/css-date/bootstrap-datepicker3.css">
        <link rel="stylesheet" href="../../css/css-date/bootstrap-datepicker.standalone.css">
        <script src="../../js/js-date/bootstrap-datepicker.min.js"></script>
        <!-- Languaje -->
        <script src="../../js/locales-date/bootstrap-datepicker.es.min.js"></script>



        <div class="container text-right">
            <h4>{{ $date->isoFormat('dddd, Do MMMM YYYY') }}</h4>
        </div>
        <div class=" container mt-5">
        <form action="{{route('admin.nueva_noticia')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}


            <div class="form-group">
                <label for="date">Fecha</label>
                <div class="input-group">
                    <input type="text" class="form-control datepicker" name="date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <p class="text-danger pl-1 pt-1">{{ $errors->first('date') }}</p>
            </div>




            {{-- <div class="form-group">
                <label for="date">Fecha de la noticia</label>
                <input type="date" class="form-control" id="date" name="date" value="{{old("date")}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('date') }}</p>
            </div> --}}

            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitulo</label>
                <textarea class="form-control" id="subtitle" rows="3" name="subtitle" value="{{old("subtitle")}}"></textarea>

            </div>

            <div class="form-group">
                <label for="img_preview">Imagen Preview <span style="color:red;">800 x 600 px</span></label>
                <input type="file" class="form-control-file" id="img_preview" name="img_preview">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('img_preview') }}</p>
            </div>
            <div class="form-group">
                <label for="img_noticia">Imagen completa</label>
                <input type="file" class="form-control-file" id="img_noticia" name="img_noticia">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('img_noticia') }}</p>
            </div>


            <div class="form-group">
                <label class="labels" for="content">Contenido</label>
                <textarea id="summernote" class="form-control" name="content"></textarea>
            </div>



            <div class="form-group">
                <button id="enviar" class="btn btn-success" type="submit">Guardar</button>
                <a class="btn btn-warning" href="{{ route('admin.nueva_noticia')}}">Limpiar</a>
            </div>
        </form>
        <div class="container text-right">
            <a href="{{ route('admin')}}">
                <button class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>

    {{-- <form method="post">
        <textarea id="summernote" name="editordata"></textarea>
    </form> --}}

<script>
    $('.datepicker').datepicker({
        format: "yyyy-mm-dd",
        language: "es",
        todayBtn: "linked",
        autoclose: true
    });
</script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script src="../../js/summernote.js"></script>

    <script>
        $(document).ready(function() {
        $('#summernote').summernote();});
    </script>



