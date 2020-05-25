@extends('productos')
@section('title', 'Aval Rural SGR | #GarantíasComerciales')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#GarantíasComerciales</h3>
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
                                            <img src="img/productos/garantias.jpg" alt="" />
                                        </div>
                                        <div class="service_definition_first">
                                            <p> <strong>Este producto esta pensado para aquellas pymes que necesiten ampliar el crédito comercial, además de apoyar y desarrollar su cadena de valor.</strong></p>
                                            <p class="last">Constituye un instrumento de garantía a los efectos de fortalecer la relación de una empresa con sus clientes y proveedores, asegurando el cumplimiento de los pagos que surgen de cualquier transacción comercial.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
