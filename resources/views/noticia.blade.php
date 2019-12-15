@extends('welcome')
@section('title', 'Noticias')
@section('content')	
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
                                <li><a href="quienes_somos.html">¿Quiénes somos?</a></li>
                                <li class="activado"><a href="noticias.html"><p>Noticias</p></a></li>
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
                                <p><span><a href="noticias.html">Ver todas las noticias</a></span></p>
                                <div class="fecha_noticia">
                                    <p>Julio, 2019</p>
                                </div>
                            </div>
                            <div class="single_title">
                                <h3>{{$noticia->title}}</h3>
                            </div>
                            <div class="blog_single_image">
                                <img src="/storage/{{$noticia->img_noticia}}" alt="" />
                            </div>
                        </div>
                        <div class="buildify_tm_top_section">
                            <div class="subtitle txt_noticias">
                                
                                <!-- <h6></h6> <br> -->
                                <br>
                                {{$noticia->content}}
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>
<div class="buildify_tm_section">
    <div class="buildify_tm_quotebox">
        <div class="container">
            <div class="inner">
                <h3 class="text">Enviá tu <a href="contact.html">consulta.</a></h3>
                <span class="pattern"></span>
            </div>
        </div>
    </div>
</div>
</div>

@endsection