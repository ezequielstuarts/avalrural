@extends('productos')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#Cheques</h3>
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
                                            <img src="img/productos/cheque.jpg" alt="" />
                                        </div>
                                        <div class="service_definition_first">
                                            <p> <strong>Los socios partícipes de AVAL RURAL SGR pueden financiarse en el mercado de capitales descontando cheques de pago diferido avalados por AVAL RURAL SGR, obteniendo agilidad y costos sumamente competitivos.</strong></p>
                                            <p class="last">Para poder operar con este instrumento, el socio partícipe será calificado con una línea global, mediante el mismo proceso de calificación que utiliza AVAL RURAL SGR para el otorgamiento de sus avales en otros productos, y deberá constituir las contragarantías habituales que solicita AVAL RURAL SGR. El socio partícipe, durante el plazo de vigencia de la línea podrá presentar cheques de pago diferido, propios o de terceros (en este caso debidamente endosados), hasta el monto global de la línea aprobada.
                                            <br>
                                            Los cheques salen a negociación en la Bolsa de Comercio de Buenos Aires con la denominación de la SGR, por lo tanto, el inversor compra un cheque garantizado por AVAL RURAL SGR y todos los socios partícipes tienen similar riesgo ante el mercado.</p>
                                        </div>
                                        <h3>Ventajas</h3>
                                        <ul class="items">
                                            <li>Agilidad y celeridad en la obtención del financiamiento (24-48 horas).</li>
                                            <li>Las mejores tasas de mercado en esta modalidad.</li>
                                            <li>Plazos de hasta 360 días.</li>
                                            <li>Posibilidad de adelantar cobros de terceros, evitando el riesgo inflacionario, tasa de interés y tipo de cambio.</li>
                                            <li>Posibilidad de acceder a capital de trabajo a través de la emisión de cheques propios.</li>
                                            <li>Seguridad y transparencia en todo el proceso.</li>
                                        </ul>
                                        <h3>Operatoria</h3>
                                        <p><strong>Paso 1: </strong>El socio partícipe de AVAL RURAL SGR, con calificación crediticia vigente, tiene que abrir una cuenta comitente en una de las Sociedades de Bolsa con las que trabaja AVAL RURAL SGR (no tiene costo de apertura ni de mantenimiento).</p>
                                        <p><strong>Paso 2: </strong>Ante la necesidad puntual de financiamiento, presenta a AVAL RURAL SGR:
                                        <ul class="items">
                                            <li>Cheque de pago diferido (si es un cheque de tercero, deberá estar endosado por el socio partícipe).</li>
                                            <li>Formulario Solicitud de Garantía de AVAL RURAL SGR.</li>
                                            <li>Contragarantía solicitada por AVAL RURAL SGR.</li>
                                        </ul>
                                        </p>
                                        <p><strong>Paso 3: </strong>AVAL RURAL SGR avala el cheque, lo presenta en la Caja de Valores y notifica a la Sociedad de Bolsa para que inicie la negociación del mismo. Esta negociación, si el cheque fue presentado antes de las <strong> 10:00 Hs am</strong>, se hace en el día. De lo contrario, puede llegar a liquidarse a las 24 horas.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- SECCION PRODUCTOS -->
                        <div class="containter">
                            <div class="buildify_tm_list_wrap container_productos" data-column="3" data-space="30">
                                <ul class="buildify_list buildify_list_mobile ">
                                    <li><div class="icono_producto_garantia "></div></li>
                                    <li><div class="icono_producto_aval "></div></li>
                                    <li><div class="icono_producto_lanzamiento "></div></li>
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
