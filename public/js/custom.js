$(document).ready( function () {


    // VARIABLES
    // ----------------------------------------------------------

    var interes, gestion, seguro, dias, valor, result;
    var calculator = $('.calculator');
    var calculatorDias = calculator.find('.calculator__dias');
    var calculatorDinero = calculator.find('.calculator__dinero');
    var calculatorInteres = 2;
    var calculatorGestion = 8;
    var calculatorSeguro = 3;
    var calculatorResult = calculator.find('.calculator__result');
    var dineroAmount = calculator.find('.dinero-amount');
    var diasAmount = calculator.find('.dias-amount');
    var interesAmount = calculator.find('.interes-amount');
    var gestionAmount = calculator.find('.gestion-amount');
    var seguroAmount = calculator.find('.seguro-amount');

    function commaSeparateNumber(val){
        while (/(\d+)(\d{3})/.test(val.toString())){
            val = val.toString().replace(/(\d+)(\d{3})/, '$1'+'.'+'$2');
        }
        return val;
    }


    // INIT BILL
    // ----------------------------------------------------------

    $(window).on('DOMContentLoaded', function () {
        dineroAmount.text( '$' + commaSeparateNumber(calculatorDinero.val()) );
        diasAmount.text( calculatorDias.val() );
        dias = calculatorDias.val() * 1;
        valor = calculatorDinero.val() * 1;
        interes = ( ( valor * ( calculatorInteres / 100 ) / 30 ) * dias );
        gestion = ( valor * ( calculatorGestion / 100 ) );
        seguro = ( valor * ( calculatorSeguro / 100 ) );
        interesAmount.text( '$' + commaSeparateNumber(interes.toFixed(0)) );
        gestionAmount.text( '$' + commaSeparateNumber(gestion.toFixed(0)) );
        seguroAmount.text( '$' + commaSeparateNumber(seguro.toFixed(0)) );
        result = valor + interes + gestion + seguro;
        calculatorResult.text( '$' + commaSeparateNumber(result.toFixed(0)) );
    });


    // RANGE FUNCTION
    // ----------------------------------------------------------

    calculatorDinero.on('change', function () {

        if ( calculatorDias.val() === '' || isNaN( calculatorDias.val() ) ) {
            alert('Enter bill amount, please!')
        } else {
            dias = calculatorDias.val() * 1;
        }

        dineroAmount.text( '$' + commaSeparateNumber(calculatorDinero.val()) );
        diasAmount.text( calculatorDias.val() );
        dias = calculatorDias.val() * 1;
        valor = calculatorDinero.val() * 1;
        interes = ( ( valor * ( calculatorInteres / 100 ) / 30 ) * dias );
        gestion = ( valor * ( calculatorGestion / 100 ) );
        seguro = ( valor * ( calculatorSeguro / 100 ) );
        interesAmount.text( '$' + commaSeparateNumber(interes.toFixed(0)) );
        gestionAmount.text( '$' + commaSeparateNumber(gestion.toFixed(0)) );
        seguroAmount.text( '$' + commaSeparateNumber(seguro.toFixed(0)) );
        result = valor + interes + gestion + seguro;
        calculatorResult.text( '$' + commaSeparateNumber(result.toFixed(0)) );
    });

    calculatorDias.on('change', function () {

        if ( calculatorDinero.val() === '' || isNaN( calculatorDinero.val() ) ) {
            alert('Enter bill amount, please!')
        } else {
            dias = calculatorDinero.val() * 1;
        }

        dineroAmount.text( '$' + commaSeparateNumber(calculatorDinero.val()) );
        diasAmount.text( calculatorDias.val() );
        dias = calculatorDias.val() * 1;
        valor = calculatorDinero.val() * 1;
        interes = ( ( valor * ( calculatorInteres / 100 ) / 30 ) * dias );
        gestion = ( valor * ( calculatorGestion / 100 ) );
        seguro = ( valor * ( calculatorSeguro / 100 ) );
        interesAmount.text( '$' + commaSeparateNumber(interes.toFixed(0)) );
        gestionAmount.text( '$' + commaSeparateNumber(gestion.toFixed(0)) );
        seguroAmount.text( '$' + commaSeparateNumber(seguro.toFixed(0)) );
        result = valor + interes + gestion + seguro;
        calculatorResult.text( '$' + commaSeparateNumber(result.toFixed(0)) );
    });

});


$('input[type="range"]').change(function () {
	var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
	
	$(this).css('background-image',
				'-webkit-gradient(linear, left top, right top, '
				+ 'color-stop(' + val + ', #1EDC74), '
				+ 'color-stop(' + val + ', #9A9A9A)'
				+ ')'
				);
});

$('.owl-carousel').owlCarousel({
	loop:true,
	autoplay:true,
	autoplayTimeout:10000,
	margin:60,
	dots:true,
	center:true,
	responsive:{
		0:{
			items:1
		},
		992:{
			items:3
		}
	}
})

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(".radioSelect").each(function(){
    showSpecificFields(this);
});

$(".radioSelect").click(function(){
   showSpecificFields(this);
});


function showSpecificFields(obj){
    if($(obj).is(":checked")){
    var radioVal = $(obj).val();
     $(".fieldsSpecific").each(function(){
         if($(this).attr('id') == radioVal){
             $(this).show();
         } else{
             $(this).hide();                 
         }
     });   
    }
}

$(".radioSelect2").each(function(){
    showSpecificFields2(this);
});

$(".radioSelect2").click(function(){
   showSpecificFields2(this);
});


function showSpecificFields2(obj){
    if($(obj).is(":checked")){
    var radioVal = $(obj).val();
     $(".fieldsSpecific2").each(function(){
         if($(this).attr('id') == radioVal){
             $(this).show();
         } else{
             $(this).hide();                 
         }
     });   
    }
}

function aceptar() {
	$('#terminosCondiciones').prop('checked', true);
	$("#tycModal").modal('hide');
}

$(document).ready(function() {
	var max_fields      = 3; //maximum input boxes allowed
	var wrapper   		= $(".infoBanco"); //Fields wrapper
	var add_button      = $(".agregarCuenta"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div class="col-md-4"><div class="md-form"><input type="text" class="form-control" id="nombreReferencia" name="nombreReferencia"><label for="nombreReferencia">Banco</label></div></div><div class="col-md-4"><div class="md-form"><input type="text" class="form-control" id="direccionReferencia" name="direccionReferencia"><label for="direccionReferencia">Tipo de Cuenta</label></div></div><div class="col-md-4"><div class="md-form"><input type="number" class="form-control" id="cuenta" name="cuenta"><label for="cuenta">Número de cuenta</label></div></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});