@extends('productos')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#ObligacionesNegociablesSimples</h3>
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
                                <div class="service_type_list">
                                    <ul>
                                        <li class="active"><a href="cheques">Cheque</a></li>
                                        <li><a href="pagares">Pagarés</a></li>
                                        <li><a href="bancos">Bancos</a></li>
                                        <li class="activado"><a href="obligaciones">Obligaciones Negociables Simples</a></li>
                                        <li><a href="fideicomisos">Fideicomisos Financieros</a></li>
                                        <li><a href="garantias">Garantías Comerciales</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leftbox sticky_sidebar">
                        <div class="buildify_tm_list_wrap" data-column="1" data-space="60">
                            <ul class="buildify_list">
                                <li>
                                    <div class="list_inner">
                                        <div class="service_image_first">
                                            <img src="img/productos/oblig_neg_simples.jpg" alt="" />
                                        </div>
                                        <div class="service_definition_first">
                                            <p> <strong>Las obligaciones negociables (ON) son bonos privados que representan valores de deuda de la sociedad que las emite. Entre el emisor de las obligaciones negociables (en este caso, la MiPyME) y el inversor existe una relación que no se diferencia de la de un préstamo. Las obligaciones negociables pueden ser colocadas entre el público inversor mediante su cotización y negociación en el mercado de capitales. </strong></p>
                                            <p class="last">Las MiPyMEs cuentan con un régimen simplificado de ON que implica menor carga administrativa y mayor flexibilidad. Son automáticamente autorizadas a hacer oferta pública de obligaciones negociables, previo registro ante la CNV y cumplimiento de los requisitos de información que exige dicho organismo.</p>
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
