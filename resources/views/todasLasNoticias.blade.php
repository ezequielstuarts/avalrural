@extends('welcome')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#Noticias</h3>
                </div>
            </div>
        </div>
        <div class="buildify_tm_section">
            <div class="container">
                <div class="buildify_tm_blog_wrap">
                    <div class="leftbox sticky_sidebar">
                        <div class="leftbox_inner">
                            <div class="buildify_tm_list_wrap" data-column="2" data-space="30">
                                <div class="buildify_tm_service_long_subtitulo">
                                    <p>Compartimos las principales noticias y novedades sobre nuestros productos y eventos con el objetivo de mantenerte informado sobre las actividades de Aval Rural SGR.</p>
                                </div>

                                <ul class="buildify_list">
                            @forelse ($noticias as $noticia)
                            <li>
                                <div class="list_inner">
                                    <div class="tarjeta_noticia">
                                        <div class="overlay_color"></div>
                                        <div class="content">
                                            <div class="content_inner">
                                                <div class="foto_noticia">
                                                    <img class="img_noticia" src="/storage/{{$noticia->img_preview}}" alt="" />
                                                </div>
                                                <div class="blog_title">
                                                    <h3><a href="noticias/{{$noticia->id}}">{{$noticia->title}}</a></h3>

                                                </div>
                                                <div class="blog_definition">
                                                    <p>{{$noticia->subtitle}}</p>
                                                </div>
                                                <div class="buildify_tm_read_more">
                                                    <p><a href="noticias/{{$noticia->id}}">Leer Más</a><span>
                                                    {{date('F Y', strtotime($noticia->date))}}
                                                     </span></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @empty
                            <h2>No hay Noticias</h2>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="buildify_tm_pagination_wrap">
                    <div class="pagination_inner">
                        <ul>

                            {{ $noticias->links() }}


                        </ul>
                    </div>
                </div>

            </div>
            <div class="rightbox sticky_sidebar">
                <div class="buildify_tm_service_single_wrap">
                    <div class="rightbox_inner">
                        <div class="in">
                            <div class="service_type_title">
                                <h3>Noticias</h3>
                            </div>
                            <div class="service_type_list">
                                <ul>
                                    <li><a href="quienes_somos.html">¿Quiénes somos?</a></li>
                                    <li class="activado"><a href="noticias.html"><p>Noticias</p></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
