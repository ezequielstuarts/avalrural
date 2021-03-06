@extends('admin.layout')
@section('admin')

<div class="row ">
    <div class="container">
        <div class="boton-nueva-noticia">
            <a class="" href="{{route('admin.noticias.nueva_noticia')}}">
                Nueva Noticia
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body card-admin">
                <i style="padding-right:10px;" class="float-left fas fa-newspaper"></i>
                <h4 class="card-title">NOTICIAS</h4>

                @if ( $totalNoticiasVisibles > 0)
                    <h5 class="card-text">{{$totalNoticiasVisibles}} Noticias visibles.</h5>
                @else
                    <h5 class="text-secondary">No hay noticias visibles.</h5>
                @endif

                @if ( $totalNoticiasOcultas < 1)
                    <h5 class="text-secondary">No hay noticias ocultas.</h5>
                @else
                    <h5 class="card-text">{{$totalNoticiasOcultas}} Noticias Ocultas.</h5>
                @endif
                @if ( $totalNoticiasVisibles > 0)
                <hr>
                    <footer class="blockquote-footer">Última actualización el: {{$noticias->last()->updated_at->format('d-m-Y') }} | Hace {{ $noticias->last()->updated_at->diffForHumans() }}.</footer>
                @endif

            </div>
        </div>

        <div class="col-md-6">
            <div class="card-body card-admin">
                <i style="padding-right:10px;" class="float-left fas fa-clipboard-check"></i>
                <h4 class="card-title">MENSAJES</h4>
                @if ( $totalMensajes > 0)
                    <h5 class="card-text">{{$totalMensajes}} Mensajes recibidos.</h5>
                @else
                    <h5 class="text-secondary">No hay Mensajes.</h5>
                @endif
                @if ( $totalMensajes > 0)
                <hr>
                    <footer class="blockquote-footer">Último mensaje recibido el: {{$mensajes->last()->created_at->format('d-m-Y') }} | Hace {{ $mensajes->last()->created_at->diffForHumans() }}.</footer>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-body card-admin">
                <i style="padding-right:10px;" class="float-left fas fa-users"></i>
                <h4 class="card-title">PRECALIFICACIONES</h4>
                @if ( $totalPrecalificaciones > 0)
                    <h5 class="card-text">{{$totalPrecalificaciones}} Precalificaciones recibidas.</h5>
                @else
                    <h5 class="text-secondary">No hay Precalificaciones.</h5>
                @endif
                @if ( $totalPrecalificaciones > 0)
                <hr>
                    <footer class="blockquote-footer">Última precalificacion recibida el: {{$precalificaciones->last()->updated_at->format('d-m-Y') }} | Hace {{ $precalificaciones->last()->updated_at->diffForHumans() }}.</footer>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-body card-admin">
                <i style="padding-right:10px;" class="float-left fas fa-user"></i>
                <h4 class="card-title">USUARIO ACTUAL</h4>
                <p class="card-text"><b>Estás logueado como:</b> {{  Auth::user()->name }}, <b>Tienes permisos de:</b>
                    @if ( Auth::user()->rol)
                        Administrador.
                    @else
                        Invitado.
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>



@endsection