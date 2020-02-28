@extends('welcome')
@section('content')
<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#Contacto</h3>
                </div>
            </div>
        </div>

        @if (session('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" data-dismiss="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>{{ session('mensaje') }}</h4>
        </div>
        @endif


        <div class="buildify_tm_section">
            <div class="container">
                <div class="buildify_tm_service_single_wrap">
                    <div class="rightbox sticky_sidebar">
                        <div class="rightbox_inner">
                            <div class="in">
                                <div class="service_type_title">
                                    <h3>Contacto</h3>
                                </div>
                                <div class="service_type_list">
                                    <ul>
                                        <li>Tel: +5411 4468 8291</li>
                                        <li class="mail"><a href="mailto:info@avalrural.com.ar">info@avalrural.com.ar</a></li>
                                        <li>Francisco Narciso de Laprida 3175  <br>Piso 1, CP 1603 - Villa Martelli <br>NODUS Business District</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leftbox sticky_sidebar">
                        <div class="buildify_tm_list_wrap" data-column="1" data-space="60">


                            <form action={{route('enviar_contacto')}} class="contact_form" id="contact_form2" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <ul class="buildify_list">
                                <li>
                                    <div class="list_inner">
                                        <div class="service_definition_first">
                                            <p><strong>Para contactarse con AVAL RURAL SGR lo puede hacer por teléfono, vía email o completando el siguiente formulario:</strong></p>
                                        </div>
                                        <div class="buildify_tm_contact_wrap">
                                            <div class="get_in_touch_wrap">
                                                <div class="inner_wrap">
                                                    <div class="empty_notice"><span>Por favor, complete los datos obligatorios.</span></div>

                                                    <div class="row">
                                                        <label>Apellido<span></span></label>
                                                        <input id="Apellido" name="apellido" type="text" value="{{old("apellido")}}" required>
                                                        <p style="color: red;">{{ $errors->first('apellido') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Nombre<span></span></label>
                                                        <input id="Nombre" name="nombre" type="text" value="{{old("nombre")}}" required>
                                                        <p style="color: red;">{{ $errors->first('nombre') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Empresa<span></span></label>
                                                        <input id="Empresa" name="empresa" type="text" value="{{old("empresa")}}" required>
                                                        <p style="color: red;">{{ $errors->first('empresa') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>CUIT (empresa)<span></span></label>
                                                        <input id="CUIT" name="cuit" type="number" value="{{old("cuit")}}" required>
                                                        <p style="color: red;">{{ $errors->first('cuit') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Localidad<span></span></label>
                                                        <input id="Localidad" name="localidad" type="text" value="{{old("localidad")}}" required>
                                                        <p style="color: red;">{{ $errors->first('localidad') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Teléfono<span></span></label>
                                                        <input id="Telefono" name="telefono" type="number" value="{{old("telefono")}}" required>
                                                        <p style="color: red;">{{ $errors->first('telefono') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>E-mail<span></span></label>
                                                        <input id="Email" name="email" type="email" value="{{old("email")}}" required>
                                                        <p style="color: red;">{{ $errors->first('email') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Consulta<span></span></label>
                                                        <textarea id="Consulta" name="consulta" value="{{old("consulta")}}" required></textarea>
                                                    </div>

                                                    <div class="row">
                                                        <div class="g-recaptcha" data-sitekey="6LcaxWgUAAAAAC21W4A7zOpBpyhXoMpP8K11t82v"></div>

                                                        <!-- <div class="g-recaptcha" data-sitekey="6Le45mcUAAAAAPJ3V-7KKSD7ILhwVeh2zX7ehAhY"></div> -->
                                                        <script src='https://www.google.com/recaptcha/api.js'></script>
                                                    </div>
                                                    <div class="row">
                                                        <input type="submit" id="" value="Enviar" style="background-color: #7dba57" />
                                                        <div style="color: red; margin-top: 10px;" id=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label><input id="Acepta" name="Acepta" type="checkbox" value="SI" required >Acepto condiciones legales. </label>
                                        <a href="#popup-legales-contacto" class="popuplegal-link-contacto">Reservas Legales</a>
                                    </div>
                                </li>
                            </ul>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
