@extends('productos')
@section('title', 'Aval Rural SGR | #Fideicomisos')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#FideicomisosFinancieros</h3>
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
                                            <img src="img/productos/fideicomiso.jpg" alt="" />
                                        </div>
                                        <div class="service_definition_first">
                                            <p> <strong>Estructura financiera y legal que permite a los productores agropecuarios financiar un porcentaje importante de sus costos de siembra cancelando con cereal al término de la cosecha.</strong></p>
                                            <p class="last"></p>
                                        </div>
                                        <h3>Destinatarios:</h3>
                                        <p>Productores de trigo, maíz, soja o girasol.</p>
                                        <h3>Destino de los fondos:</h3>
                                        <p>Financiamiento de insumos, arrendamientos y laboreos de entre el 35-50% de la producción final estimada (dependiendo </p>
                                        <h3>Costo estimado del financiamiento:</h3>
                                        <p>El mismo dependerá de la tasa exigida por el inversor al momento de la colocación del fideicomiso financiero. <a href="documentos/series_emitidas.pdf">Ver Series Emitidas</a></p>
                                        <h3>Ventajas</h3>
                                        <ul class="items">
                                            <li>Obtención de capital de trabajo desde el inicio hasta la finalización del ciclo del negocio.</li>
                                            <li>Financiamiento a través de una única fuente que permite cubrir los distintos costos relacionados con la siembra.</li>
                                            <li>Costo de financiación competitivo, debido a la seguridad jurídica de la estructura del fideicomiso financiero y a la garantía de la SGR.</li>
                                            <li>El medio de pago es el cereal producido.</li>
                                        </ul>
                                        <h3>Operatoria</h3>
                                        <p><strong>Paso 1: </strong>Como condición previa para acceder al financiamiento, los productores agropecuarios firman Letras de Cambio aceptadas y garantizadas por AVAL RURAL SGR. El aval de AVAL RURAL SGR se emite una vez recibida la contragarantía por parte del productor.</p>
                                        <p><strong>Paso 2: </strong>También, como condición previa, los productores firman un contrato de compra venta con Cofco Intl Argentina (con un aforo de aprox. 20%), a través del cual se comprometen a entregar una cantidad de producto en fecha determinada.</p>
                                        <p><strong>Paso 3: </strong>El productor cede al fideicomiso financiero los derechos de cobro de los contratos de compra venta.</p>
                                        <p><strong>Paso 4: </strong>Una vez que todos los contratos han sido firmados y formalizados, se emiten los VRD (valores representativos de deuda). El producido de la colocación será utilizado para comprar las Letras de Cambio.</p>
                                        <p><strong>Paso 5: </strong>El Fiduciario entrega el dinero a los productores para que éstos afronten sus costos de siembra.</p>
                                        <p><strong>Paso 6: </strong>AVAL RURAL SGR realiza el control de la utilización de los fondos y el monitoreo de los cultivos. </p>
                                        <p><strong>Paso 7: </strong>Una vez realizada la cosecha, los productores entregan el producto al exportador (Cofco Intl).</p>
                                        <p><strong>Paso 8: </strong>Cofco Intl exporta la mercadería y realiza toda la operatoria necesaria para ingresar las divisas en el mercado argentino.</p>
                                        <p><strong>Paso 9: </strong>Cofco Intl transfiere dichos fondos al Fiduciario para cancelar el préstamo con los inversores.</p>
                                        <p><strong>Paso 10: </strong> El fiduciario transfiere a los productores el remanente de la liquidación del contrato de compra-venta (si lo hubiere). <a class="oculto" href="documentos/series_emitidas.pdf">Ver Series Emitidas </a></p>
                                        <h3 class="oculto"><a href="#">Próximos lanzamientos</a></h3>
                                        <h3 class="oculto"><a href="#">Pasos para obtener una garantía</a></h3>
                                        <h3 class="oculto"><a href="#">Cómo obtener un aval</a></h3>
                                    </div>
                                </li>
                                <li>
                            </ul>
                        </div>
                        <!-- SECCION PRODUCTOS -->
                            <div class="centrar_boton">
                                <button class="boton_descarga">
                                    <a href="documentos/series_emitidas.pdf" target="_blank"><p>VER SERIES EMITIDAS</p></a>


                                </button>
                            </div>
                        <div class="containter">
                            <div class="buildify_tm_list_wrap container_productos" data-column="3" data-space="30">
                                <ul class="buildify_list">
                                    <li><div class="icono_producto_garantia"></div></li>
                                    <li><div class="icono_producto_aval"></div></li>
                                    <li><div class="icono_producto_lanzamiento"></div></li>
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
