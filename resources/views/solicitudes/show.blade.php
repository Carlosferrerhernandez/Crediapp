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
					<label for="lugar_expedicion">Lugar y Fecha de Expedición<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input class="datepicker form-control" type="text" name="fecha_expedicion" placeholder="Fecha de expedicion" required="">
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
					<input type="number" class="form-control" id="celular" name="n_celular">
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
						<label for="lugar_conyuge">Lugar y Fecha de Nacimiento<span>*</span></label>
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input class="datepicker form-control" type="text" name="nacimiento_conyuge" placeholder="Fecha nacimiento">
					</div>
				</div>
				<div class="col-md-4">
					<div class="md-form">
						<input type="tel" class="form-control" id="telefono_conyuge" name="telefono_conyuge">
						<label for="telefono_conyuge">Teléfono</label>
					</div>
				</div>
			</div>
		</div>
		<h4>Ubicación</h4>
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
					<input type="text" class="form-control" id="ciudad" name="ciudad" required="">
					<label for="ciudad">Ciudad<span>*</span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="departamento" name="departamento" required="">
					<label for="departamento">Departamento<span>*</span></label>
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
					<input type="tel" class="form-control" id="telefono_empresa" name="telefono_empresa">
					<label for="telefono_empresa">Teléfono de contacto<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="direccion_laboral" name="direccion_laboral">
					<label for="direccion_laboral">Dirección laboral<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="tel" class="form-control" id="ciudad_empresa" name="ciudad_empresa">
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
					<input type="tel" class="form-control" id="telefono_referencia" name="telefono_referencia" required="">
					<label for="telefono_referencia">Teléfono<span>*</span></label>
				</div>
			</div>
		</div>
		<h4>Información Bancaria</h4>
		<div class="row infoBanco">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="nombre_banco" name="nombre_banco[]">
					<label for="nombre_banco">Banco<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="t_cuenta" name="t_cuenta[]">
					<label for="t_cuenta">Tipo de Cuenta<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="n_cuenta" name="n_cuenta[]">
					<label for="n_cuenta">Número de cuenta<span>*</span></label>
				</div>
			</div>
		</div>
	</form>
</div>


<script>
	$( function() {

		$(".datepicker").datepicker({
			changeMonth: true,
			changeYear: true,
                dateFormat: 'yy-mm-dd', //Se especifica como deseamos representarla
                firstDay: 1
            });

	});
</script>


@endsection
