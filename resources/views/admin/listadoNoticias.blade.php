
<div class="leftbox_inner">
    <div class="buildify_tm_list_wrap" data-column="2" data-space="30">
        <ul class="buildify_list">
            @forelse ($noticias as $noticia)
            <li>
                aaaaaaaaaaaaaaaaaaaaa
                <div class="list_inner">
                    <div class="tarjeta_noticia">
                        <div class="overlay_color"></div>
                        <div class="content">
                            <div class="content_inner">
                                <div class="foto_noticia">
                                    <img class="img_noticia" src="/storage/{{$noticia->img_preview}}" alt="" />
                                </div>
                                <div class="blog_title">
                                    <h3><a href="nuevos_limites_pyme">{{$noticia->title}}</a></h3>

                                </div>
                                <div class="blog_definition">
                                    <p>{{$noticia->subtitle}}</p>
                                </div>
                                <div class="buildify_tm_read_more">
                                    <p><a href="nuevos_limites_pyme">Leer Más</a><span>Diciembre 2019</span></p>
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
