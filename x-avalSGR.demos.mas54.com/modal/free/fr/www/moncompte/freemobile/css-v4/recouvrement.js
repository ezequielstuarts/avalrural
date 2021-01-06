function num_format( iVal ) {
	aTemp = iVal.toFixed(2).split('.');
	if( aTemp[1] == '00' )
		return aTemp[0];
	while( aTemp[1].length < 2 )
		aTemp[1] += '0';
	return aTemp[0] + '.' + aTemp[1];
}
function validerRegularisation() {
	var saisie    = $(':input[name="inputTypedAmount"]').val(),
		amountMin = $('#amountRegul').text();

	saisie    = parseFloat(parseFloat(saisie).toFixed(2));
	amountMin = parseFloat(amountMin);

	if( isNaN(saisie) || saisie < 0 ) {
		alert('Le montant saisi est invalide. Veuillez saisir un montant positif en euros.');
		return false;
	}

	var amountTotal = saisie + amountMin;

	if( amountTotal > 1000 ) {
		$(':input[name="inputTypedAmount"]').val( num_format(1000 - amountMin) ).trigger('keyup');
		alert('Le montant à régler ne peux pas dépasser 1 000€.');
		return false;
	}

	$('.divBarring #step1 .right .contentStep').html('Vous avez choisi de régler : <span class="bold red">'+num_format(amountTotal)+'€</span>');
	$('#moreCredit').val(saisie);
	$('.step').removeClass('disabled');
	$('#cbMontant').html(num_format(amountTotal)+'€');
	$('#selectStep, .paiementCB').removeClass('hide');

	return true;
}


$('document').ready(function() {
	$('.btnRegulariser').on('click', function() {
		new $.Modal({
			width   : 'large',
			type    : '',
			title   : 'Régularisation de votre surconsommation',
			content : $('#formAddCredit').html(),
			buttons : [
				{ texte:'Valider', icon:'icon-ok', color:'bt bt-red', callback: function() { return validerRegularisation(); } }
			]
		});


		$(':input[name="inputTypedAmount"]').on('keyup', function() {

			var saisie    = parseFloat( parseFloat( $(this).val() ).toFixed(2) ),
				amountMin = parseFloat( $('#amountRegul').text() );

			if( isNaN(saisie) || saisie < 0 )
				saisie = 0;

			var amountTotal = saisie + amountMin;
			$(':input[name="amountTotal"]').attr('value', num_format(amountTotal));
		});
	});
});