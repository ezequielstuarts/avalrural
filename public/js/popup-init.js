/* Carga del form "PRECALIFICATE AQUI" en todas  */
/* las paginas que posean un contenedor "#popup" */

$(function() {
	$.ajax({
		url: 'partials/modal-popup.html',
		method: 'get',
		data: null,
		datatype: 'html',
		async: false,
		cache: false,
		beforeSend: function(response) {
			$('#popup').html('');
		},
		error: function(response, status, statustext) {
			console.log({'response': response, 'status': status, 'statustext': statustext});
		},
		success: function(response) {
			try {
				$('#popup').html(response);


				// envío de formulario
				// ------------------------------------------------------------
				$('#precalif_form').on('submit', function (e)	{

					e.preventDefault();

					$('#precalif_mensaje').html('Enviando formulario, por favor espere...');

					$('#envio_precalif').attr('disabled', true);
					
					$.ajax({

						type: 'post',
						url: 'precalif.aspx',
						data: new FormData(this), // $('#precalif_form').serialize(),
						dataType: "html",
						cache: false,
						processData: false,
						contentType: false,
	
						success: function (data) {
							$('#precalif_mensaje').html(data);
							$('#envio_precalif').attr('disabled', false);
						},

						error: function (data) {
							$('#precalif_mensaje').html('Error al enviar formulario.');
							$('#envio_precalif').attr('disabled', false);
						}

					});

				});
				// ------------------------------------------------------------
				// fin de envío de formulario


			} catch(e) {
				console.log(response);
				console.log(e);
			}
		}
	});
});


$(function () {


});
