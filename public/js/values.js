
	$( function() {

		$(".datepicker").datepicker({
			changeMonth: true,
			changeYear: true,
                dateFormat: 'yy-mm-dd', //Se especifica como deseamos representarla
                firstDay: 1

            });

		$.datepicker.regional['es'] = {clearText: 'Limpiar', clearStatus: '',
		   closeText: 'Cerrar', closeStatus: 'Cerrar sin modificar',
		   prevText: '< Ant', prevStatus: 'Ir al mes anterior',
		   nextText: 'Sig >', nextStatus: 'Ir al mes siguiente',
		   currentText: 'Actual', currentStatus: 'Ir al mes actual',
		   monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		   monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		   monthStatus: 'Ir a otro mes', yearStatus: 'Ir a otro año',
		   weekHeader: 'Sm', weekStatus: '',
		   dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		   dayNamesShort: ['Dom','Lun','Mar','Mie','Juv','Vie','Sab'],
		   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
		   dateFormat: 'yy-mm-dd', firstDay: 0,
		   initStatus: 'Escoger fecha', isRTL: false};
		$.datepicker.setDefaults($.datepicker.regional['es']);

	});

$(document).ready(function(){

	var valores = JSON.parse(localStorage.getItem("valores"));

	var dias = JSON.parse(localStorage.getItem("dias"));

		/*console.log(valores);
		console.log(dias);*/
		
		document.getElementById("valor_interes").setAttribute('value', valores.interes);
		document.getElementById("valor_total_pagar").setAttribute('value', valores.result);
		document.getElementById("valor_seguro").setAttribute('value', valores.seguro);
		document.getElementById("valor_solicitado").setAttribute('value', valores.valor);
		document.getElementById("valor_gestion").setAttribute('value', valores.gestion);

		document.getElementById("dias_limite").setAttribute('value', dias.dias)	;

});
