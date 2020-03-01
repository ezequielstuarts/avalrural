<div class="popup-contenedor">
	<h4>Precalificate Aquí</h5>
	<div class="buildify_tm_contact_wrap sin_margen_bottom">
		<div class="get_in_touch_wrap">
			<div class="inner_wrap">
                <form class="contact_form" id="precalif_form" enctype="multipart/form-data" method="post" action="{{ route('precalificacion') }}">
                    @csrf
					<div class="empty_notice"><span>Por favor, complete los datos obligatorios.</span></div>

                    <div class="row"><!-- <label><span></span></label> -->
                        <input id="NombreYApellido" name="NombreYApellido" type="text" placeholder="Nombre y Apellido" />
                        <div id="error_nombreyapellido" class="error_disable error">
                            <p>Debe introducir un Nombre y Apellido</p>
                        </div>
                    </div>
                    <p class="p-error"></p>

                    <div class="row">
                        <input id="Email" name="Email" type="email" placeholder="E-mail"  />
                        <div id="error_email" class="error_disable error">
                            <p>Debe introducir un Email</p>
                        </div>
                    </div>
					<div class="row">
                        <input id="Telefono" name="Telefono" type="number" placeholder="Teléfono"  />
                        <div id="error_telefono" class="error_disable error">
                            <p>Debe introducir un Telefono</p>
                        </div>
                    </div>
					<div class="row">
                        <input id="Celular" name="Celular" type="number" placeholder="Celular"  />
                        <div id="error_celular" class="error_disable error">
                            <p>Debe introducir un Celular</p>
                        </div>
                    </div>
					<div class="row">
                        <input id="Empresa" name="Empresa" type="text" placeholder="Empresa"  />
                        <div id="error_empresa" class="error_disable error">
                            <p>Debe introducir su empresa</p>
                        </div>
                    </div>
					<div class="row">
                        <input id="CUIT" name="CUIT" type="number" placeholder="CUIT"  />
                        <div id="error_cuit" class="error_disable error">
                            <p>Debe introducir un CUIT</p>
                        </div>
                    </div>
					<div class="row">
						<select id="Rubro" name="Rubro"  >
							<option value="">Seleccione</option>
							<option value="Agro">Agro</option>
							<option value="Comercio">Comercio</option>
							<option value="Idustria y Minería">Idustria y Minería</option>
							<option value="Servicios">Servicios</option>
							<option value="Construcción">Construcción</option>
							<option value="Otros">Otros</option>
                        </select>
                        <div id="error_rubro" class="error_disable error">
                            <p>Debe elegir un Rubro</p>
                        </div>
					</div>

					<div class="row">
                        <input id="AFIP" name="AFIP" type="text" placeholder="Código de Afip - Pega aquí el link"  />
                        <div id="error_afip" class="error_disable error">
                            <p>Debe introducir un codigo AFIP</p>
                        </div>
					</div>
					<div class="row row2">
						<a href="https://servicios1.afip.gov.ar/genericos/nomencladorActividades/index.aspx" target="_blank">Ver codigos de Afip</a>
					</div>

					<div class="row adjunto">
						<label>Último Balance (Adjuntar)</label>
						<input type="file" name="Balance" />
						<label>Nómina de accionistas (Adjuntar)</label>
						<input type="file" name="Nomina" />
					</div>
					<div class="row">
                        <textarea id="Actividad" name="Actividad" placeholder="Describí brevemente tu actividad."  ></textarea>
                        <div id="error_actividad" class="error_disable error">
                            <p>Debe introducir un Actividad</p>
                        </div>
					</div>
					<div class="row margen">
						<div class="row">
							<div class="g-recaptcha" data-sitekey="6Le45mcUAAAAAPJ3V-7KKSD7ILhwVeh2zX7ehAhY"></div>
							<script src='https://www.google.com/recaptcha/api.js'></script>
						</div>
						<div class="row50-enviar">
							<!--a id="send_message" href="#">Enviar</a-->
							<input type="submit" value="Enviar" style="background-color: #7dba57" />
							<div style="color: red; margin-top: 10px;"></div>
						</div>
						<div class="row50-terminos">
							<label><input id="Acepta" name="Acepta" type="checkbox" value="SI"  style="width: 12px !important; height: 12px !important;" /> Acepto Políticas de privacidad</label>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row100">
			<hr>
			<p class="legales-pequenios">Los datos son recabados con la finalidad de interponganrlos a la base de datos de Cofco Intl y sus vinculadas. Cofco Intl no se responsabiliza por aquellos datos o documentación falsa y/o inexacta aportados por sus titulares. Asimismo se le informa que el archivo de los mismos será informático, y puede ser consultado por el titular de los mismos en las oficinas de Francisco Narciso de Laprida 3175, Piso 1, CP 1603, Villa Martelli, Argentina, o al teléfono (011) 4468-8000, previa acreditación de su identidad. Ante la solicitud fehaciente de acceso a los datos por parte del titular, Cofco Intl dará cumplimiento con el requerimiento dentro del plazo de 10 días corridos y, en cumplimiento con la Ley 25.326, estos datos podrán ser rectificados y/o suprimidos. Los datos requeridos en el presente son de carácter obligatorio para todo aquel cuya intención sea formar parte de la base de datos de Cofco Intl, ya que de no informarlos y/o ser completos, se verá imposibilitado el ingreso a la base. Para cualquier consulta al respecto podrán comunicarse al teléfono (011) 4468-8183 El titular de los datos personales tiene la facultad de ejercer el derecho de acceso a los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interés legítimo al efecto conforme lo establecido en el artículo 14, inciso 3 de la Ley Nº 25.326. La DIRECCIÓN NACIONAL DE PROTECCIÓN DE DATOS PERSONALES, Órgano de Control de la Ley Nº 25.326, tiene la atribución de atender las denuncias y reclamos que se interpongan con relación al incumplimiento de las normas sobre protección de datos personales.</p>
			<hr>
		</div>
	</div>
	<a class="popup-cerrar" href="#" id="cerrar-pop">X</a>
</div>
</div>

