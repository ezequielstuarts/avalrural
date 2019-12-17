@extends('welcome')
@section('content')
<link rel="stylesheet" href="css/menuacordeon.css">
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#FAQ</h3>
                </div>
            </div>
        </div>
        <div class="buildify_tm_section">
            <div class="container">
                <div class="buildify_tm_service_single_wrap">
                    <!-- <div class="buildify_tm_list_wrap" data-column="1" data-space="60"> -->
                        <ul class="buildify_list titulos_faq">
                            <div id="container-main">
                                <div class="menujq">
                                        <ul class="fondo_acordeon .accordion-titulo.open">
                                        <li><a href="javascript:void();">¿Cuáles son los requisitos para asociarse?</a>
                                            <ul class="items">
                                            <li>Ser considerado una pequeña o mediana empresa (pyme) según la Resolución General 11/2016.</li>
                                            <li>Tener regularizada la situación impositiva y previsional.</li>
                                            <li>Estar en situación normal en el sistema financiero.</li>
                                            </ul>
                                        </li>
                                        </ul>

                                        <ul class="fondo_acordeon .accordion-titulo.open">
                                        <li><a href="javascript:void();">¿Qué costo tiene asociarse?</a>
                                            <ul class="items">
                                            <li>El único costo es por la suscripción de acciones, 44 acciones con valor un peso cada una.</li>
                                            </ul>
                                        </li>
                                        </ul>
                                        <ul class="fondo_acordeon .accordion-titulo.open">
                                        <li><a href="javascript:void();">¿Qué comisiones cobra AVAL RURAL SGR?</a>
                                            <ul class="items">
                                            <li>Únicamente una comisión por otorgamiento de aval, sólo se paga si se solicita ser avalado y por el plazo de cada operación.</li>
                                            </ul>
                                        </li>
                                        </ul>
                                        <ul class="fondo_acordeon .accordion-titulo.open">
                                        <li><a href="javascript:void();">¿Qué contragarantías puedo presentar?</a>
                                            <ul class="items">
                                            <li>Fianzas personales.</li>
                                            <li>Garantías reales (prendas/hipotecas).</li>
                                            <li>Cesión facturas, pagarés, de boleto de compra-venta de cereales.</li>
                                            <li>Otras cesiones de derechos.</li>
                                            </ul>
                                        </li>
                                        </ul>
                                        <ul class="fondo_acordeon .accordion-titulo.open">
                                        <li><a href="javascript:void();">¿Hay que presentar muchos papeles?</a>
                                            <ul class="items">
                                            <li>Similar a la información que se presenta a entidades bancarias, no es imprescindible el formato, lo importante es la información.</li>
                                            </ul>
                                        </li>
                                        </ul>
                                </div>
                            </div>
                        </ul>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script  src="js/menu_acordeon_secciones.js"></script>
@endsection
