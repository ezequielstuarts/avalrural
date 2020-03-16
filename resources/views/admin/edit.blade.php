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
    <div class="">
        <div class="container">
            <h5>{{$noticia->title}} | <b>Ultima Actualizacion:</b>
                @if ($noticia->updated_at)
                {{$noticia->updated_at->format('d-m-Y')}}
                @endif
                | <b>Por:</b> {{$noticia->modified_by}}
            </h5>
            <hr>
        </div>
    </div>
    <div class=" container mt-5">
    <form action="/admin/update/{{$noticia->id}}" method="post" enctype="multipart/form-data">
        @method("patch")
        {{csrf_field()}}
        <div class="form-group">
            <label for="date">Fecha</label>
            <div class="input-group">
                <input type="text" class="form-control datepicker" name="date" value=" {{$noticia->date}} ">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <p class="text-danger pl-1 pt-1">{{ $errors->first('date') }}</p>
        </div>
        {{-- <div class="form-group">
            <label for="date">Fecha de la noticia</label>
        <input type="text" class="form-control" id="date" name="date" value="{{$noticia->date}}">
        </div> --}}

        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$noticia->title}}">
            <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
        </div>

        <div class="form-group">
            <label for="subtitle">Subtitulo</label>
            <inupt class="form-control" id="subtitle" rows="3" name="subtitle" value="">{{$noticia->subtitle}}</inupt>
        </div>

        <hr>


        <div class="form-group">
            <div class="row">
                <div class="col-7">
                    <label for="img_preview">Imagen Preview <span style="color:red;">800 x 600 px</span></label>
                    <p>Nombre de la imagen actual:
                    <span class="badge badge-info"> {{$noticia->img_preview}}</span></p>
                    <input type="file" class="form-control-file" id="img_preview" name="img_preview">
                    <p class="text-danger pl-1 pt-1">{{ $errors->first('img_preview') }}</p>
                </div>
                <div class="col-5">
                    @if (!empty($noticia->img_noticia))
                        <img class="img-responsive" style="border:solid 1px; width:100%" src="/storage/{{$noticia->img_preview}}" alt="">

                    @else
                        <img style="width:200px" src="/img/noimg.png" class="card-img-top">
                    @endif
                </div>
            </div>
            <hr>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-7">
                    <label for="img_noticia">Imagen Completa</label>
                    <p>Nombre de la imagen actual:
                        <span class="badge badge-info"> {{$noticia->img_noticia}}</span></p>
                    <input type="file" class="form-control-file" id="img_noticia" name="img_noticia">
                    <p class="text-danger pl-1 pt-1">{{ $errors->first('img_noticia') }}</p>
                </div>
                <div class="col-5">
                    @if (!empty($noticia->img_noticia))
                        <img class="img-responsive" style="border:solid 1px; width:100%" src="/storage/{{$noticia->img_noticia}}" alt="">

                    @else
                        <img style="width:200px" src="/img/noimg.png" class="card-img-top">
                    @endif
                </div>
            </div>
            <hr>
        </div>


        <div class="form-group">
            <label class="labels" for="content">Contenido</label>
            <textarea id="summernote" class="form-control" name="content">{{$noticia->content}}</textarea>
        </div>
        <script src="{{ asset('js/summernote.js') }}"></script>

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

    <script>
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            language: "es",
            todayBtn: "linked",
            autoclose: true
        });
    </script>



@endsection
