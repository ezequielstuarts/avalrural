@extends('admin.layout')
@section('admin')

    @section('styles')
        <!-- Datepicker Files --><!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker3.css')}}">
        <link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker.standalone.css')}}">
    @endsection


    <div class="container text-right">
        <h5>{{ $now->isoFormat('dddd, Do MMMM YYYY') }}</h5>
    </div>
    <div class="">
        <div class="container mt-5">
            <div class="alert alert-secondary" role="alert">
                {{$noticia->title}} | <b>Ultima Actualizacion:</b>
                    @if ($noticia->updated_at)
                    {{$noticia->updated_at->isoFormat('DD MMMM YYYY', 'Do MMMM')}}
                    @endif
                    | <b>Por:</b> {{$noticia->modified_by}}
              </div>
        </div>
    </div>
    <div class=" container mt-4">
    <form action="{{route('admin.noticias.update', $noticia->id)}}" method="post" enctype="multipart/form-data">
        @method("patch")
        {{csrf_field()}}
        <div class="form-group">
            <label for="date"><b>Fecha</b></label>
            <div class="input-group date">
                <input type="text" class="form-control datepicker" name="date" value=" {{date('d-m-Y', strtotime($noticia->date))}} ">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
            <p class="text-danger pl-1 pt-1">{{ $errors->first('date') }}</p>
        </div>


        <div class="form-group">
            <label for="title"><b>Titulo</b></label>
            <input type="text" class="form-control" id="title" name="title" value="{{$noticia->title}}">
            <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
        </div>
        
        <div class="form-group slug-cont">
            <label for="title"><b>URL amigable</b></label>
            <input type="text" class="slug" id="slug" value="{{$noticia->slug}}" disabled>
        </div> 

        <div class="form-group">
            <label for="subtitle"><b>Subtitulo</b></label>
            <input type="text" class="form-control disabled" id="subtitle" name="subtitle" value="{{$noticia->subtitle}}">
        </div>

        <hr>


        <div class="form-group">
            <div class="row">
                <div class="col-7">
                    <label for="img_preview"><b>Imagen Preview</b> <span style="color:red;">800 x 600 px</span></label>
                    <p>Nombre de la imagen actual:
                    <span class="badge badge-info"> {{$noticia->img_preview}}</span></p>
                    <input type="file" class="form-control-file" id="img_preview" name="img_preview">
                    <p class="text-danger pl-1 pt-1">{{ $errors->first('img_preview') }}</p>
                </div>
                <div class="col-5">
                    @if (!empty($noticia->img_noticia))
                    <a href="/storage/imagenes/img_noticias/{{$noticia->img_preview}}" target="blanc">
                        <img class="img-responsive" style="border:solid 1px; width:150px ;float:right;" src="/storage/imagenes/img_noticias/{{$noticia->img_preview}}"></a>
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
                    <label for="img_noticia"><b>Imagen Completa</b></label>
                    <p>Nombre de la imagen actual:
                        <span class="badge badge-info"> {{$noticia->img_noticia}}</span></p>
                    <input type="file" class="form-control-file" id="img_noticia" name="img_noticia">
                    <p class="text-danger pl-1 pt-1">{{ $errors->first('img_noticia') }}</p>
                </div>
                <div class="col-5">
                    @if (!empty($noticia->img_noticia))
                    <a href="/storage/imagenes/img_noticias/{{$noticia->img_noticia}}" target="blanc">
                        <img class="img-responsive" style="border:solid 1px; width:150px ;float:right;" src="/storage/imagenes/img_noticias/{{$noticia->img_noticia}}"></a>

                    @else
                        <img style="width:200px" src="/img/noimg.png" class="card-img-top">
                    @endif
                </div>
            </div>
            <hr>
        </div>


        <div class="form-group">
            <label class="labels" for="content"><b>Contenido</b></label>
            <textarea id="content" class="form-control" name="content">{{$noticia->content}}</textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-success" type="submit">Guardar Cambios</button>
            <a class="btn btn-info" href="{{ route('admin')}}">Caneclar</a>
        </div>
    </form>
    <div class="container text-right mb-5">
        <a href="{{ route('admin')}}">
            <button class="btn btn-outline-secondary">Volver</button>
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
