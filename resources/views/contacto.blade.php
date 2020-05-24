@extends('welcome')
@section('content')

@section('scripts-headers')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection


<div class="buildify_tm_content_wrap">
    <div class="buildify_tm_content buildify_tm_content_gris">
        <div class="buildify_tm_universal_title_holder">
            <div class="container">
                <div class="title_holder_inner">
                    <h3>#Contacto</h3>
                </div>
            </div>
        </div>
               
        


        <div class="buildify_tm_section">
            <div class="container">
                <div class="buildify_tm_service_single_wrap">
                    <div class="rightbox sticky_sidebar">
                        <div class="buildify_tm_service_single_wrap">
                            <div class="rightbox_inner">
                                <div class="in">
                                    <div class="service_type_title">
                                        <h3>Contacto</h3>
                                    </div>
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
                            <div id="success" class="oculto" role="alert">
                                <p><b class="respuesta-success"></b><span class="mensaje-success"></span> 
                                </p>
                            </div>

                            <form data-route="{{route('enviar_contacto')}}" class="contact_form" id="formulario-contacto" method="post" enctype="multipart/form-data">
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
                                                    
                                                    <div class="row">
                                                        <label>Apellido<span></span></label>
                                                        <input id="apellido" name="apellido" type="text" value="{{old("apellido")}}" >
                                                        <p id="error_apellidoo" class="error">{{ $errors->first('apellido') }}</p>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <label>Nombre<span></span></label>
                                                        <input id="nombre" name="nombre" type="text" value="{{old("nombre")}}" >
                                                        <p id="error_nombree"  class="error">{{ $errors->first('nombre') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Empresa<span></span></label>
                                                        <input id="empresa" name="empresa" type="text" value="{{old("empresa")}}" >
                                                        <p id="error_empresaa" class="error">{{ $errors->first('empresa') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>CUIT (empresa)<span></span></label>
                                                        <input id="cuit" name="cuit" type="number" value="{{old("cuit")}}" >
                                                        <p id="error_cuitt" class="error">{{ $errors->first('cuit') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Localidad<span></span></label>
                                                        <input id="localidad" name="localidad" type="text" value="{{old("localidad")}}" >
                                                        <p id="error_localidadd" class="error">{{ $errors->first('localidad') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Teléfono<span></span></label>
                                                        <input id="telefono" name="telefono" type="number" value="{{old("telefono")}}" >
                                                        <p id="error_telefonoo" class="error">{{ $errors->first('telefono') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>E-mail<span></span></label>
                                                        <input id="email" name="email" type="email" value="{{old("email")}}" >
                                                        <p id="error_emaill" class="error">{{ $errors->first('email') }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <label>Consulta<span></span></label>
                                                        <textarea id="consulta" name="consulta" value="{{old("consulta")}}" ></textarea>
                                                        <p id="error_consultaa" class="error">{{ $errors->first('consulta') }}</p>
                                                    </div>

                                                    <div class="row">
                                                        <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                                                        <p class="error">{{ $errors->first('g-recaptcha-response') }}</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <label><input id="terminos" name="acepta" type="checkbox">Acepto condiciones legales. </label>
                                                    <a href="#popup-legales" class="popuplegal-link-contacto">Reservas Legales</a>
                                                    <p id="error_terminos" class="error">{{ $errors->first('acepta') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <p id="error" class="error" style="padding-bottom:5px;"></p>
                                        <input type="submit" id="enviar" value="Enviar"/>
                                        <input type="button" id="enviando" value="Enviando..." class="oculto"/>
                                        <div style="color: red; margin-top: 10px;" id=""></div>
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

@endsection
