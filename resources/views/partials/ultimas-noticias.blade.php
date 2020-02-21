<div class="buildify_tm_section">
    <div class="buildify_tm_news_wrap">
        <div class="container">
            <div class="buildify_tm_universal_carousel_wrap">
                <div class="title_holder light">
                    <div class="span">
                        <h3>Ultimas Noticias</h3>
                    </div>
                </div>
                <div class="buildify_tm_list_wrap" data-column="3" data-space="0">
                    @forelse ($noticias as $noticia)

                    <ul class="buildify_list buildify_tm_miniboxes">
                        <li class="buildify_tm_minibox">
                            <div class="inner">
                                <div class="image_news">
                                    <img class="sg" src="/storage/{{$noticia->img_preview}}" alt="" />
                                </div>
                                <div class="main_part">
                                    <div class="title_holder_news">
                                        <h3><a href="/noticias/{{$noticia->id}}">{{ str_limit($noticia->title, 45) }}</a></h3>
                                    </div>
                                    <div class="definition">
                                        <p>{{ str_limit($noticia->subtitle, 50) }}</p>
                                    </div>
                                    <div class="read_more_news">
                                        <p><a href="/noticias/{{$noticia->id}}">Ver más</a><span>{{ $noticia->created_at->isoFormat('MMMM YYYY', 'Do MMMM')  }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
