
@extends('admin.admin')

@section('admin')

    <!-- Datepicker Files -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="../../css/css-date/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="../../css/css-date/bootstrap-datepicker.standalone.css">
    <script src="../../js/js-date/bootstrap-datepicker.min.js"></script>
    <!-- Languaje -->
    <script src="../../js/locales-date/bootstrap-datepicker.es.min.js"></script>
    <!-- End Datepicker Files -->

    {{-- summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('js/summer-language.js') }}"></script>
    {{-- end summernote --}}


    <div class="container text-right">
        <h5>{{ $date->isoFormat('dddd, Do MMMM YYYY') }}</h5>
    </div>
    <div class=" container mt-3">
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

        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}">
            <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitulo</label>
            <input class="form-control" id="subtitle" rows="3" name="subtitle" value="{{old("subtitle")}}"></input>

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

        <div id="summernote"></div>
        <script src="{{ asset('js/summernote.js') }}"></script>

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

    <script>
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            language: "es",
            todayBtn: "linked",
            autoclose: true
        });
    </script>

@endsection
