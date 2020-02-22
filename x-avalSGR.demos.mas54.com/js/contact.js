
$(function () {

	$('#contact_form2').on('submit', function (e)	{

		e.preventDefault();

		$('#contacto_mensaje').html('Enviando consulta, por favor espere...');

		$('#envio_contacto').attr('disabled', true);
		
		$.ajax({

			type: 'post',
			url: 'contact.aspx',
			data: $('#contact_form2').serialize(),
			dataType: "html",

			success: function (data) {
				$('#contacto_mensaje').html(data);
				$('#envio_contacto').attr('disabled', false);
			},

			error: function (data) {
				$('#contacto_mensaje').html('Error al enviar formulario.');
				$('#envio_contacto').attr('disabled', false);
			}

		});

	});

});
