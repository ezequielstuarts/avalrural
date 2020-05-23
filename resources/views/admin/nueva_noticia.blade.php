
@extends('admin.layout')

@section('admin')

    @section('styles')
    <!-- Datepicker Files --><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker.standalone.css')}}">
    @endsection

    <div class="container text-right">
        <h5>{{ $date->isoFormat('dddd, Do MMMM YYYY') }}</h5>
    </div>
    <div class=" container mt-3">
    <form action="{{route('admin.noticias.nueva_noticia')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="date"><b>Fecha</b></label>
            <div class="input-group date">
                <input type="text" class="form-control datepicker" name="date">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
            <p class="text-danger pl-1 pt-1">{{ $errors->first('date') }}</p>
        </div>

        <div class="form-group">
            <label for="title"><b>Titulo</b></label>
            <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}">
            <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
        </div>
        <div class="form-group">
            <label for="title"><b>URL amigable</b></label>
            <input type="text" class="form-control" id="slug" value="">
        </div>
        <div class="form-group">
            <label for="subtitle"><b>Subtitulo</b></label>
            <input class="form-control" id="subtitle" rows="3" name="subtitle" value="{{old("subtitle")}}"></input>

        </div>

        <div class="form-group">
            <label for="img_preview"><b>Imagen Preview</b> <span style="color:red;">800 x 600 px</span></label>
            <input type="file" class="form-control-file" id="img_preview" name="img_preview">
            <p class="text-danger pl-1 pt-1">{{ $errors->first('img_preview') }}</p>
        </div>
        <div class="form-group">
            <label for="img_noticia"><b>Imagen completa</b></label>
            <input type="file" class="form-control-file" id="img_noticia" name="img_noticia">
            <p class="text-danger pl-1 pt-1">{{ $errors->first('img_noticia') }}</p>
        </div>


        <div class="form-group">
            <label class="labels" for="content"><b>Contenido</b></label>
            <textarea id="content" class="form-control" name="content"></textarea>
        </div>

        <div class="form- mt-4">
            <button id="enviar" class="btn btn-success" type="submit">Guardar</button>
            <a class="btn btn-warning" href="{{ route('admin.noticias.nueva_noticia')}}">Limpiar</a>
        </div>
        </form>
        <div class="container text-right mb-5">
            <a href="{{ route('admin.noticias')}}">
                <button class="btn btn-outline-danger">Cancelar</button>
            </a>
        </div>
    </div>

    @section('scripts')
        <!-- Datepicker Files -->
        <script src="{{asset('/vendor/datepicker/bootstrap-datepicker.min.js')}}"></script>
        <!-- Languaje -->
        <script src="{{asset('/vendor/datepicker/bootstrap-datepicker.es.min.js')}}"></script>
        <script>
            $('.input-group.date').datepicker({
                format: "dd-mm-yyyy",
                todayBtn: "linked",
                clearBtn: true,
                language: "es",
                autoclose: true,
                todayHighlight: true
            });
        </script>

        <script src=" {{asset('vendor/stringToSlug/jquery.stringToSlug.js')}} "></script>
        <script>
            $("#title, #slug").stringToSlug({
                callback: function(text){
                    $("#slug").val(text);
                }
            });
        </script>

        {{-- CKEDITOR --}}
        <script src=" {{asset('vendor/ckeditor/ckeditor.js')}} "></script>
        <script>
            CKEDITOR.config.height = 300;
            CKEDITOR.config.width = 'auto';
            CKEDITOR.replace('content');
        </script>
    @endsection
@endsection