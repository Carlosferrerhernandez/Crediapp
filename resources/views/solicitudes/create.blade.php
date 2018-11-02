@extends('layouts.application')

@section('content')

<!-- FORMULARIO SOLICITUD -->
<div class="container-fluid" id="solicitud">
	<h3>Solicitar crédito</h3>
	<p class="d-none d-sm-block">Ingresa todos los datos solicitados, revisa que la información suministrada sea correcta.</p>

	<form id="datos_prestamo" role="form" method="POST" action="{{ route('solicitudes.store') }}">
		{{ csrf_field() }}
		<h4>Datos personales</h4>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="nombres" name="nombres" required="">
					<label for="nombres">Nombres<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="apellidos" name="apellidos" required="">
					<label for="apellidos">Apellidos<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="n_documento" name="n_documento" required="">
					<label for="n_documento">Documento de Identidad<span>*</span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="lugar_expedicion" name="lugar_expedicion" required="">
					<label for="lugar_expedicion">Lugar de expedición<span>*</span></label>
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input class="datepicker form-control" type="text" name="fecha_expedicion" required="" placeholder="Fecha de Nacimiento *">
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="email" class="form-control" id="email" name="email" required="">
					<label for="email">Correo electrónico<span>*</span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="n_celular" name="n_celular">
					<label for="celular">Celular<span>*</span></label>
				</div>
			</div>
			<div class="col-md-8 align-self-end">
				<div class="estadoCivilGroup row">
					<div class="col-md-3 col-lg-2 align-self-end">
						<label for="estadoCivil">Estado Civil<span>*</span></label>
					</div>
					<div class="col-md-9 col-lg-10">
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect" type="radio" name="e_civil" id="estadoCivilRadio1" value="Soltero">
							<label class="form-check-label" for="estadoCivilRadio1">Soltero</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect" type="radio" name="e_civil" id="estadoCivilRadio2" value="Casado" checked>
							<label class="form-check-label" for="estadoCivilRadio2">Casado</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect" type="radio" name="e_civil" id="estadoCivilRadio3" value="Separado">
							<label class="form-check-label" for="estadoCivilRadio3">Separado</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect" type="radio" name="e_civil" id="estadoCivilRadio4" value="Viudo">
							<label class="form-check-label" for="estadoCivilRadio4">Viudo</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect" type="radio" name="e_civil" id="estadoCivilRadio5" value="Union libre">
							<label class="form-check-label" for="estadoCivilRadio5">Unión Libre</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect" type="radio" name="e_civil" id="estadoCivilRadio6" value="Otro">
							<label class="form-check-label" for="estadoCivilRadio6">Otro</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="datosConyuge fieldsSpecific" id="Casado">
			<h4>Datos del cónyuge</h4>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="nombres_conyuge" name="nombres_conyuge">
						<label for="nombres_conyuge">Nombres<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="apellido_conyuge" name="apellido_conyuge">
						<label for="apellido_conyuge">Apellidos<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="number" class="form-control" id="documento_conyuge" name="documento_conyuge">
						<label for="documento_conyuge">Documento de Identidad<span>*</span></label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="md-form">
						<input type="text" class="form-control" id="lugar_conyuge" name="lugar_conyuge">
						<label for="lugar_conyuge">Lugar de Nacimiento<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input class="datepicker form-control" type="text" name="nacimiento_conyuge" placeholder="Fecha de Nacimiento *">
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="number" class="form-control" id="telefono_conyuge" name="telefono_conyuge">
						<label for="telefono_conyuge">Teléfono</label>
					</div>
				</div>
			</div>
		</div>
		<h4>Ubicación del solicitante</h4>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="direccion" name="direccion" required="">
					<label for="direccion">Dirección<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="barrio" name="barrio" required="">
					<label for="barrio">Barrio<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<select class="form-control" id="departamento" name="departamento" required="">
						<option value="" disabled selected>Departamento*</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<select class="form-control" id="ciudad" name="ciudad" required="">
						<option value="" disabled selected>Ciudad*</option>
					</select>
				</div>
			</div>
			<div class="col-md-8 align-self-end">
				<div class="viviendaGroup row">
					<div class="col-md-4 col-lg-3 align-self-end">
						<label for="vivienda">Tipo de vivienda:<span>*</span></label>
					</div>
					<div class="col-md-8 col-lg-9">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="vivienda" id="viviendaRadio1" value="Propia" checked>
							<label class="form-check-label" for="viviendaRadio1">Propia</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="vivienda" id="viviendaRadio2" value="Alquilada">
							<label class="form-check-label" for="viviendaRadio2">Alquilada</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="vivienda" id="viviendaRadio3" value="Familiar">
							<label class="form-check-label" for="viviendaRadio3">Familiar</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h4>Actividad Económica</h4>
		<div class="row">
			<input type="hidden" id="valor_interes" name="valor_interes" value="">
			<input type="hidden" id="valor_total_pagar" name="valor_total_pagar" value="">
			<input type="hidden" id="valor_seguro" name="valor_seguro" value="">
			<input type="hidden" id="valor_solicitado" name="valor_solicitado" value="">
			<input type="hidden" id="valor_gestion" name="valor_gestion" value="">
			
			<input type="hidden" id="dias_limite" name="dias_limite" value="">
		</div>
		<div class="row">
			<div class="col-md-12 align-self-end">
				<div class="actividadGroup row">
					<div class="col-md-4 col-lg-3 align-self-end">
						<label for="actividad">Ocupación, oficio o profesión:<span>*</span></label>
					</div>
					<div class="col-md-8 col-lg-9">
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect2" type="radio" name="ocupacion" id="actividadRadio1" value="Asalariado" checked>
							<label class="form-check-label" for="actividadRadio1">Asalariado</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect2" type="radio" name="ocupacion" id="actividadRadio2" value="Independiente">
							<label class="form-check-label" for="actividadRadio2">Independiente</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect2" type="radio" name="ocupacion" id="actividadRadio3" value="Pensionado">
							<label class="form-check-label" for="actividadRadio3">Pensionado</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect2" type="radio" name="ocupacion" id="actividadRadio4" value="Socio">
							<label class="form-check-label" for="actividadRadio4">Socio</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input radioSelect2" type="radio" name="ocupacion" id="actividadRadio5" value="Otro">
							<label class="form-check-label" for="actividadRadio5">Otro</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row empresaGroup fieldsSpecific2" id="Asalariado">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="empresa" name="empresa">
					<label for="empresa">Empresa donde trabaja<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="cargo" name="cargo">
					<label for="cargo">Cargo<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="telefono_empresa" name="telefono_empresa">
					<label for="telefono_empresa">Teléfono de contacto<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="direcccion_trabajo" name="direcccion_trabajo">
					<label for="direcccion_trabajo">Dirección laboral<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="search" class="form-control" id="ciudad_empresa" name="ciudad_empresa">
					<label for="ciudad_empresa">Ciudad<span>*</span></label>
				</div>
			</div>
		</div>
		<div class="row tipoGroup fieldsSpecific2" id="Independiente">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="actividad_independiente" name="actividad_independiente">
					<label for="actividad_independiente">Ocupación o tipo de actividad<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="direccion_independiente" name="direccion_independiente">
					<label for="direccion_independiente">Dirección<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="ciudad_independiente" name="ciudad_independiente">
					<label for="ciudad_independiente">Ciudad<span>*</span></label>
				</div>
			</div>
		</div>

		<div class="row tipoGroup fieldsSpecific2" id="Otro">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="otra_ocupacion" name="otra_ocupacion">
					<label for="otra_ocupacion">¿Cuál?<span>*</span></label>
				</div>
			</div>
		</div>
		<h4>Referencia familiar</h4>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="nombre_referencia" name="nombre_referencia" required="">
					<label for="nombre_referencia">Nombre Completo<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="direccion_referencia" name="direccion_referencia" required="">
					<label for="direccion_referencia">Dirección<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="telefono_referencia" name="telefono_referencia" required="">
					<label for="telefono_referencia">Teléfono<span>*</span></label>
				</div>
			</div>
		</div>
		<h4>Información Bancaria</h4>
		<div class="row infoBanco">
			<div class="col-md-4">
				<div class="md-form">
					<select class="form-control" id="nombre_banco" name="nombre_banco[]">
						<option selected="" disabled="true">Seleccionar Banco</option>
						<option value="BANCO DE BOGOTA">BANCO DE BOGOTA</option>
						<option value="BANCO POPULAR">BANCO POPULAR</option>
						<option value="BANCO ITAU CORPBANCA COLOMBIA">BANCO ITAU CORPBANCA COLOMBIA</option>
						<option value="BANCOLOMBIA">BANCOLOMBIA</option>
						<option value="BANCO CITIBANK COLOMBIA">BANCO CITIBANK COLOMBIA</option>
						<option value="BANCO GNB SUDAMERIS">BANCO GNB SUDAMERIS</option>
						<option value="BBVA COLOMBIA">BBVA COLOMBIA</option>
						<option value="ITAU HELM BANK">ITAU HELM BANK</option>
						<option value="RED MULTIBANCA COLPATRIA">RED MULTIBANCA COLPATRIA</option>
						<option value="BANCO DE OCCIDENTE">BANCO DE OCCIDENTE</option>
						<option value="BANCO CAJA SOCIAL">BANCO CAJA SOCIAL</option>
						<option value="BANCO AGRARIO DE COLOMBIA">BANCO AGRARIO DE COLOMBIA</option>
						<option value="BANCO DAVIVIENDA">BANCO DAVIVIENDA</option>
						<option value="BANCO AV VILLAS">BANCO AV VILLAS</option>
						<option value="BANCO PROCREDIT COLOMBIA">BANCO PROCREDIT COLOMBIA</option>
						<option value="BANCO PICHINCHA">BANCO PICHINCHA</option>
						<option value="BANCOOMEVA">BANCOOMEVA</option>
						<option value="FALLABELLA">FALLABELLA</option>
						<option value="BANCO FINANDINA">BANCO FINANDINA</option>
						<option value="BANCO MULTIBANK S.A.">BANCO MULTIBANK S.A.</option>
						<option value="BANCO SANTANDER DE NEGOCIOS COLOMBIA">BANCO SANTANDER DE NEGOCIOS COLOMBIA</option>
						<option value="BANCO COOPERATIVO COOPCENTRAL">BANCO COOPERATIVO COOPCENTRAL</option>
						<option value="BANCO COMPARTIR SA">BANCO COMPARTIR SA</option>
						<option value="FINANCIERA JURISCOOP">FINANCIERA JURISCOOP</option>
						<option value="COOPERATIVA FINANCIERA DE ANTIOQUIA">COOPERATIVA FINANCIERA DE ANTIOQUIA</option>
						<option value="COOPERATIVA FINANCIERA COTRAFA">COOPERATIVA FINANCIERA COTRAFA</option>
						<option value="CONFIAR">CONFIAR</option>
						<option value="SERFINANSA">SERFINANSA</option>
						<option value="COLTEFINANCIERA">COLTEFINANCIERA 370</option>
						<option value="NEQUI">NEQUI</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<select class="form-control" id="t_cuenta" name="t_cuenta[]">
						<option selected="" disabled="true">Tipo de cuenta</option>
						<option value="Ahorros">Ahorros</option>
						<option value="Corriente">Corriente</option>
						<option value="Nomina">Nómina</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="n_cuenta" name="n_cuenta[]">
					<label for="n_cuenta">Número de cuenta<span>*</span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button class="agregarCuenta"><img src="{{ asset('img/agregar-cuenta.png')}}"> Agregar otra cuenta bancaria</button>
			</div>
			<div class="col-md-12">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="terminosCondiciones">
					<label class="custom-control-label" for="terminosCondiciones">Acepto los <button type="button" class="modalTyc" data-toggle="modal" data-target="#tycModal">términos y condiciones</button></label>
				</div>
			</div>
		</div>
		<div class="row submit-row">
			<div class="col-12 text-center">
				<button type="submit" class="btn-enviar">Enviar solicitud</button>
			</div>
		</div>
		<div class="col-md-4" style="display: none">
			<div class="md-form">
				<input type="text" class="form-control" id="nombre_mail" name="nombre_mail">
				<input type="text" class="form-control" id="dir_email" name="dir_email">
				<input type="number" class="form-control" id="tel_mail" name="tel_mail">
			</div>
		</div>
	</form>
</div>

<!-- Modal -->
<div class="modal fade" id="tycModal" tabindex="-1" role="dialog" aria-labelledby="tycModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tycModalLabel">Términos y condiciones</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5>Autorización de consulta en la base de datos.</h5>
				Declaro que la información que he suministrado es verídica y doy mi consentimiento expreso e irrevocable a (Crediapp), o quien sea en el futuro el acreedor del crédito solicitado, para:<br><br>
				a) Consultar, en cualquier tiempo, en Datacrédito o en cualquier otro operador de información financiera y crediticia, toda la información relevante para adelantar estudios de riesgo crediticio en cualquiera de sus etapas y para la realización de campañas de mercadeo y ofrecimiento de productos.<br><br>
				b) Reportar a Datacrédito o a cualquier central e información de riesgo, datos sobre el cumplimiento o incumplimiento de mis obligaciones crediticias, comerciales o de servicios, o de mis deberes legales de contenido patrimonial, y mis datos de ubicación y contacto.<br><br>
				c) Suministrar a Datacrédito o a cualquier otra central de información de riesgo datos relativos a mis solicitudes de crédito, así como otros atinentes a mis relaciones comerciales, financieras y en general socioeconómicas que yo haya entregado o que consten en registros públicos, bases de datos públicas o documentos públicos.
				<h5>Autorización de descuento de valores.</h5>
				Autorizo a Crediapp o a sus autorizados a descontar del pago total del crédito los valores de los intereses, el seguro, la administración y el uso de la plataforma para dar por concluida mi obligación financiera. Así mismo confirmo haber leído, entendido y aceptado cada uno de los ítems anteriormente señalados.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">No acepto</button>
				<button type="button" class="btn btn-primary" onclick="aceptar()">Acepto</button>
			</div>
		</div>
	</div>
</div>

<script src="{{ asset('js/values.js') }}"></script>
<script src="{{ asset('js/countries.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$("#nombres").keyup(function () {
			var value = $(this).val();
			$("#nombre_mail").val(value);
		});
		$("#email").keyup(function () {
			var value = $(this).val();
			$("#dir_email").val(value);
		});
		$("#n_celular").keyup(function () {
			var value = $(this).val();
			$("#tel_mail").val(value);
		});
	});
</script>

<script language="javascript">
	populateCountries("departamento", "ciudad"); // Departamento ubicacion solicitante

	populateStates("ciudad"); // Cuidad
</script>

@endsection
