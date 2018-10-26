$(document).change(function(){

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