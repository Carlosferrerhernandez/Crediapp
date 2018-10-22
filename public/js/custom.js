$(document).ready( function () {
    
gestion();

    // VARIABLES
    // ----------------------------------------------------------

    /*var calculatorInteres = $('#id_Interes').val();
    var calculatorGestion = $('#id_Gestion').val();
    var calculatorSeguro = $('#id_Seguro').val();*/

    var interes, gestion, seguro, dias, valor, result;

    var calculator = $('.calculator');
    var calculatorDias = calculator.find('.calculator__dias');
    var calculatorDinero = calculator.find('.calculator__dinero');


    var calculatorResult = calculator.find('.calculator__result');
    var dineroAmount = calculator.find('.dinero-amount');
    var diasAmount = calculator.find('.dias-amount');
    var interesAmount = calculator.find('.interes-amount');
    var gestionAmount = calculator.find('.gestion-amount');
    var seguroAmount = calculator.find('.seguro-amount');

    /*console.log(calculatorInteres,calculatorGestion,calculatorSeguro);*/

    function gestion(){
        $.ajax({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url:'/search',
            method:'GET',
            success: function(respuesta){
                /*console.log(respuesta);*/
                $('#valores').html(
                    `<input type="hidden" id="id_Interes" value="${respuesta[0]['interes']}">
                    <input type="hidden" id="id_Gestion" value="${respuesta[0]['gestion_credito']}">
                    <input type="hidden" id="id_Seguro" value="${respuesta[0]['seguro_bancario']}">
                `);
            }
        });

        
    }

    function commaSeparateNumber(val){
        while (/(\d+)(\d{3})/.test(val.toString())){
            val = val.toString().replace(/(\d+)(\d{3})/, '$1'+'.'+'$2');
        }
        return val;
    }


    // INIT BILL
    // ----------------------------------------------------------

    $(window).on('DOMContentLoaded', function () {

        var calculatorInteres = $('#id_Interes').val();
        var calculatorGestion = $('#id_Gestion').val();
        var calculatorSeguro = $('#id_Seguro').val();

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

        var calculatorInteres = $('#id_Interes').val();
        var calculatorGestion = $('#id_Gestion').val();
        var calculatorSeguro = $('#id_Seguro').val();

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

        var calculatorInteres = $('#id_Interes').val();
        var calculatorGestion = $('#id_Gestion').val();
        var calculatorSeguro = $('#id_Seguro').val();

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

   /* $(window).on('load', function () {
        gestion();
    });*/

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
			$(wrapper).append('<div class="col-md-4"><div class="md-form"><input type="text" class="form-control" id="nombre_banco" name="nombre_banco[]"><label for="nombre_banco">Banco</label></div></div><div class="col-md-4"><div class="md-form"><input type="text" class="form-control" id="t_cuenta" name="t_cuenta[]"><label for="t_cuenta">Tipo de Cuenta</label></div></div><div class="col-md-4"><div class="md-form"><input type="number" class="form-control" id="n_cuenta" name="n_cuenta[]"><label for="n_cuenta">Número de cuenta</label></div></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});


