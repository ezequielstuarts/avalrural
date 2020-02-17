@extends('productos')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#Bancos</h3>
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
                                            <img src="img/productos/banco.jpg" alt="" />
                                        </div>
                                        <div class="service_definition_first">
                                            <p> <strong>Endeudamiento en pesos y dólares con alguna de las entidades financieras con las que tenemos acuerdo; hasta 7 años de plazo con destino capital de trabajo y/o bienes de capital.</strong></p>
                                            <p class="last">Los acuerdos con entidades financieras incluyen menores tasas, bonificación de comisiones, alargamiento de plazos y/o aumento de línea preexistente. <br> <br>
                                            Se pueden garantizar los siguientes tipos de operación:
                                            </p>
                                        </div>
                                        <h3>Corto Plazo</h3>
                                        <p>
                                            Préstamo en $, tasa fija y variable, hasta 360 días. Amortización mensual, semestral o al vencimiento.
                                            <br>
                                            Préstamo en U$S para los exportadores, tasa fija y variable, hasta 360 días
                                        </p>
                                        <h3>Largo Plazo</h3>
                                        <p>
                                        Préstamo en $, tasa fija y variable, hasta 72 meses. Amortización mensual o semestral. Posibilidad período de gracia. <br>
                                        Créditos con tasa subsidiada Sepyme, Préstamos de inversión productiva BCRA, Fonapyme, BICE, FONTAR.
                                        <br>
                                        Leasing. Amortización mensual o semestral. Posibilidad período de gracia.
                                        </p>

                                        <h3>Ventajas</h3>
                                        <ul class="items">
                                            <li>Acceso a financiamiento bancario, líneas especiales o ampliación de los límites preexistentes por aporte de garantía adicional.</li>
                                            <li>Agilidad y celeridad en la confirmación del financiamiento.</li>
                                            <li>Excelentes condiciones de tasas de mercado, minimización de comisiones y costos de seguro.</li>
                                            <li>Flexibilidad en las garantías solicitadas.</li>
                                            <li>Plazos de hasta 72 meses.</li>
                                        </ul>
                                        <h3>Operatoria</h3>
                                        <p><strong>Paso 1: </strong>El socio partícipe de AVAL RURAL SGR, calificado crediticiamente, selecciona una entidad financiera y tipo de operación de acuerdo a la oferta disponible.</p>
                                        <p><strong>Paso 2: </strong>AVAL RURAL SGR solicita a la entidad el financiamiento con aval para la pyme de acuerdo a las condiciones vigentes enviando la información disponible. </p>
                                        <p><strong>Paso 3: </strong>Aprobada la operación en el banco, el socio presenta a AVAL RURAL SGR: Formulario Solicitud de Garantía de AVAL RURAL SGR. Contragarantía solicitada por AVAL RURAL SGR.</p>
                                        <p><strong>Paso 4: </strong>Abre cuenta en el Banco (en caso de no ser cliente) y la instrumentación de la operación.</p>
                                        <p><strong>Paso 5: </strong>AVAL RURAL SGR avala frente al Banco y se desembolsa el dinero.</p>
                                        <p><strong>Paso 6: </strong>AVAL RURAL SGR emite el aval y el socio partícipe obtiene el financiamiento.</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="list_inner">
                                <h3>Bancos que aceptan nustros avales</h3>
                                <img src="img/acuerdo_bancos.png" alt="">
                            </div>

                        </div>
                        <!-- SECCION PRODUCTOS -->
                        <div class="containter">
                            <div class="buildify_tm_list_wrap container_productos" data-column="3" data-space="30">
                                <ul class="buildify_list">
                                    <li><div class="icono_producto_garantia"></div></li>
                                    <li><div class="icono_producto_aval"></div></li>

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
