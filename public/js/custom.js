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

        var save_interes = interes.toFixed(0);
        var save_gestion = gestion.toFixed(0);
        var save_seguro = seguro.toFixed(0);
        var save_result = result.toFixed(0);

        var valores = {valor:valor, interes:save_interes, gestion:save_gestion, seguro:save_seguro, result:save_result };
        
        if (typeof(Storage) !== "undefined") {

            localStorage.setItem("valores", JSON.stringify(valores) );
            
        } else {
            // LocalStorage no soportado en este navegador
        }
         
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

        var dias = { dias:dias };
        
        if (typeof(Storage) !== "undefined") {

            localStorage.setItem("dias", JSON.stringify(dias));
            
        } else {
            // LocalStorage no soportado en este navegador
        }
         
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

var ultimo = null;

function marcar(elemento) {
  ultimo = elemento;
}

function limpiar() {
  if (ultimo != null) {
    ultimo.value = "";
  }
}


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
			$(wrapper).append('<div class="col-md-4"><div class="md-form"><select class="form-control" id="nombre_banco" name="nombre_banco[]"><option selected="" disabled="true">Banco</option><option value="BANCO DE BOGOTA">BANCO DE BOGOTA</option><option value="BANCO POPULAR">BANCO POPULAR</option><option value="BANCO ITAU CORPBANCA COLOMBIA">BANCO ITAU CORPBANCA COLOMBIA</option><option value="BANCOLOMBIA">BANCOLOMBIA</option><option value="BANCO CITIBANK COLOMBIA">BANCO CITIBANK COLOMBIA</option><option value="BANCO GNB SUDAMERIS">BANCO GNB SUDAMERIS</option><option value="BBVA COLOMBIA">BBVA COLOMBIA</option><option value="ITAU HELM BANK">ITAU HELM BANK</option><option value="RED MULTIBANCA COLPATRIA">RED MULTIBANCA COLPATRIA</option><option value="BANCO DE OCCIDENTE">BANCO DE OCCIDENTE</option><option value="BANCO CAJA SOCIAL">BANCO CAJA SOCIAL</option><option value="BANCO AGRARIO DE COLOMBIA">BANCO AGRARIO DE COLOMBIA</option><option value="BANCO DAVIVIENDA">BANCO DAVIVIENDA</option><option value="BANCO AV VILLAS">BANCO AV VILLAS</option><option value="BANCO PROCREDIT COLOMBIA">BANCO PROCREDIT COLOMBIA</option><option value="BANCO PICHINCHA">BANCO PICHINCHA</option><option value="BANCOOMEVA">BANCOOMEVA</option><option value="FALLABELLA">FALLABELLA</option><option value="BANCO FINANDINA">BANCO FINANDINA</option><option value="BANCO MULTIBANK S.A.">BANCO MULTIBANK S.A.</option><option value="BANCO SANTANDER DE NEGOCIOS COLOMBIA">BANCO SANTANDER DE NEGOCIOS COLOMBIA</option><option value="BANCO COOPERATIVO COOPCENTRAL">BANCO COOPERATIVO COOPCENTRAL</option><option value="BANCO COMPARTIR SA">BANCO COMPARTIR SA</option><option value="FINANCIERA JURISCOOP">FINANCIERA JURISCOOP</option><option value="COOPERATIVA FINANCIERA DE ANTIOQUIA">COOPERATIVA FINANCIERA DE ANTIOQUIA</option><option value="COOPERATIVA FINANCIERA COTRAFA">COOPERATIVA FINANCIERA COTRAFA</option><option value="CONFIAR">CONFIAR</option><option value="SERFINANSA">SERFINANSA</option><option value="COLTEFINANCIERA">COLTEFINANCIERA 370</option><option value="NEQUI">NEQUI</option></select></div></div><div class="col-md-4"><div class="md-form"><select class="form-control" id="t_cuenta" name="t_cuenta[]"><option selected="" disabled="true">Tipo de cuenta</option><option value="Ahorros">Ahorros</option><option value="Corriente">Corriente</option><option value="Nomina">Nómina</option></select></div></div><div class="col-md-4"><div class="md-form"><input type="number" class="form-control" id="n_cuenta" name="n_cuenta[]"><label for="n_cuenta">Número de cuenta<span>*</span></label></div></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});


