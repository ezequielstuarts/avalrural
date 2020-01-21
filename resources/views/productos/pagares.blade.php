@extends('productos')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#Pagarés</h3>
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
                                    <h3>Productos</h3>
                                </div>
                                @include('partials.nav.productos')
                            </div>
                        </div>
                    </div>
                    <div class="leftbox sticky_sidebar">
                        <div class="buildify_tm_list_wrap" data-column="1" data-space="60">
                            <ul class="buildify_list">
                                <li>
                                    <div class="list_inner">
                                        <div class="service_image_first">
                                            <img src="img/productos/Pagare.jpg" alt="" />
                                        </div>
                                        <div class="service_definition_first">
                                            <p> <strong>Los socios partícipes de AVAL RURAL SGR también pueden financiarse en el mercado de capitales descontando Pagaré Bursátil avalados por AVAL RURAL SGR, obteniendo agilidad y costos competitivos.</strong></p>
                                            <p class="last">Para poder operar con este instrumento, el socio partícipe será calificado con una línea global, mediante el mismo proceso de calificación que los demás productos ofrecidos. <br> <br>
                                            Los Pagaré, como los cheques, salen a negociación en la Bolsa de Comercio de Buenos Aires con la denominación de la SGR, por lo tanto, el inversor compra un Pagaré garantizado por AVAL RURAL SGR y todos los socios partícipes tienen similar riesgo ante el mercado.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                            </ul>
                        </div>
                        <!-- SECCION PRODUCTOS -->
                        <div class="containter">
                            <div class="buildify_tm_list_wrap container_productos" data-column="3" data-space="30">
                                <ul class="buildify_list">
                                    <li><div class="icono_garantia"></div></li>
                                    <li><div class="icono_aval"></div></li>
                                    <li><div class="icono_lanzamiento oculto"></div></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END SECCION PRODUCTOS -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
