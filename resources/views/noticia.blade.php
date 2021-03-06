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
        <div class="buildify_tm_service_single_wrap">
            <div class="rightbox sticky_sidebar">
                <div class="rightbox_inner">
                    <div class="in">
                        <div class="service_type_title">
                            <h3>Noticias</h3>
                        </div>
                        <div class="service_type_list">
                            <ul>
                                <li><a href="/quienes_somos">¿Quiénes somos?</a></li>
                                <li class="activado"><a href="/noticias"><p>Noticias</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leftbox sticky_sidebar">
                <div class="buildify_tm_list_wrap" data-column="1" data-space="60">
                    <div class="leftbox_inner">
                        <div class="buildify_tm_top_section">
                            <div class="category_date">
                                <p><span><a href="/noticias">Ver todas las noticias</a></span></p>
                                <div class="fecha_noticia">
                                    <p>{{ $noticia->created_at->isoFormat('MMMM YYYY', 'Do MMMM')  }}</p>
                                </div>
                            </div>
                            <div class="single_title">
                                <h3>{{$noticia->title}}</h3>
                            </div>
                        <div class="blog_single_image">
                            @if (!empty($noticia->img_noticia))
                                <img src="/storage/imagenes/img_noticias/{{$noticia->img_noticia}}"/>
                            @else
                                <img src="/img/noimg.png" class="card-img-top">
                            @endif
                        </div>
                        </div>
                        <div class="buildify_tm_top_section">
                            <div class="subtitle txt_noticias">
                                <h6 style="padding-bottom: 20px"> <b>{{$noticia->subtitle}}</b></h6>
                                {!!$noticia->content!!}
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
