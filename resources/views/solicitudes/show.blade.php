@extends('layouts.dashboard')

@section('content')

<!-- FORMULARIO SOLICITUD -->
<div class="container-fluid" id="solicitud">
	<h3 style="margin-bottom: 0px;">Solicitud de crédito</h3>
	<p class="d-none d-sm-block" style="font-size: 20px;">{{$user->nombres}}, {{$user->apellidos}}</p>
	<h4>Datos personales</h4>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<label for="nombres">Nombres</label>
				<input type="text" class="form-control" id="nombres" name="nombres" value="{{$user->nombres}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="apellidos">Apellidos</label>
				<input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$user->apellidos}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="n_documento">Documento de Identidad</label>
				<input type="number" class="form-control" id="n_documento" name="n_documento" value="{{$user->n_documento}}" disabled="true">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<label for="lugar_expedicion">Lugar y Fecha de Expedición</label>
				<input type="text" class="form-control" id="lugar_expedicion" name="lugar_expedicion" value="{{$user->lugar_expedicion}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="">Fecha Expedicion</label>
				<input type="text" class="datepicker form-control" type="text" name="fecha_expedicion" placeholder="Fecha de expedicion" value="{{$user->fecha_expedicion}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="email">Correo electrónico</label>
				<input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" disabled="true">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<label for="celular">Celular</label>
				<input type="number" class="form-control" id="celular" name="n_celular" value="{{$user->n_celular}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="estadoCivil">Estado Civil</label>
				<input type="text" class="form-control" value="{{$user->e_civil}}" disabled="true">
			</div>
		</div>
	</div>
	@if($conyuges->count())
	@foreach($conyuges as $conyuge)
	<div class="datosConyuge fieldsSpecific" id="Casado">
		<h4>Datos del cónyuge</h4>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<label for="nombres_conyuge">Nombres</label>
					<input type="text" class="form-control" id="nombres_conyuge" name="nombres_conyuge" value="{{$conyuge->nombres_conyuge}}" disabled="true">
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<label for="apellido_conyuge">Apellidos</label>
					<input type="text" class="form-control" id="apellido_conyuge" name="apellido_conyuge" value="{{$conyuge->apellido_conyuge}}" disabled="true">
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<label for="documento_conyuge">Documento de Identidad</label>
					<input type="number" class="form-control" id="documento_conyuge" name="documento_conyuge" value="{{$conyuge->documento_conyuge}}" disabled="true">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<label for="lugar_conyuge">Lugar y Fecha de Nacimiento</label>
					<input type="text" class="form-control" id="lugar_conyuge" name="lugar_conyuge" value="{{$conyuge->lugar_conyuge}}" disabled="true">
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<label for="">Fecha Expedicion</label>
					<input class="datepicker form-control" type="text" name="nacimiento_conyuge" placeholder="Fecha nacimiento" value="{{$conyuge->nacimiento_conyuge}}" disabled="true">
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<label for="telefono_conyuge">Teléfono</label>
					<input type="tel" class="form-control" id="telefono_conyuge" name="telefono_conyuge" value="{{$conyuge->telefono_conyuge}}" disabled="true">
				</div>
			</div>
		</div>
	</div>
	@endforeach
	@else
	@endif
	<h4>Ubicación</h4>
	@foreach($ubicaciones as $ubicacion)
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<label for="direccion">Dirección</label>
				<input type="text" class="form-control" id="direccion" name="direccion" value="{{$ubicacion->direccion}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="barrio">Barrio</label>
				<input type="text" class="form-control" id="barrio" name="barrio" value="{{$ubicacion->barrio}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="ciudad">Ciudad</label>
				<input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$ubicacion->ciudad}}" disabled="true">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<label for="departamento">Departamento</label>
				<input type="text" class="form-control" id="departamento" name="departamento" value="{{$ubicacion->departamento}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="departamento">Tipo de vivienda:</label>
				<input type="text" class="form-control" id="departamento" name="departamento" value="{{$ubicacion->vivienda}}" disabled="true">
			</div>
		</div>
	</div>
	@endforeach
	<h4>Actividad Económica</h4>
	<div class="row">
		<input type="hidden" id="valor_interes" name="valor_interes" value="">
		<input type="hidden" id="valor_total_pagar" name="valor_total_pagar" value="">
		<input type="hidden" id="valor_seguro" name="valor_seguro" value="">
		<input type="hidden" id="valor_solicitado" name="valor_solicitado" value="">
		<input type="hidden" id="valor_gestion" name="valor_gestion" value="">

		<input type="hidden" id="dias_limite" name="dias_limite" value="">
	</div>
	@foreach($actividades as $actividad)
	<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<label for="actividad">Ocupación, oficio o profesión:</label>
					<input type="text" class="form-control" id="departamento" name="departamento" value="{{$actividad->ocupacion}}" disabled="true">
				</div>
			</div>
	</div>
	@if($actividad->ocupacion == "Asalariado")
	<div class="row empresaGroup fieldsSpecific2" id="Asalariado">
		<div class="col-md-4">
			<div class="md-form">
				<label for="empresa">Empresa donde trabaja</label>
				<input type="text" class="form-control" id="empresa" name="empresa" value="{{$actividad->empresa}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="cargo">Cargo</label>
				<input type="text" class="form-control" id="cargo" name="cargo" value="{{$actividad->cargo}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="telefono_empresa">Teléfono de contacto</label>
				<input type="tel" class="form-control" id="telefono_empresa" name="telefono_empresa" value="{{$actividad->telefono_empresa}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="direcccion_trabajo">Dirección laboral</label>
				<input type="text" class="form-control" id="direcccion_trabajo" name="direcccion_trabajo" value="{{$actividad->direcccion_trabajo}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="ciudad_empresa">Ciudad</label>
				<input type="tel" class="form-control" id="ciudad_empresa" name="ciudad_empresa" value="{{$actividad->ciudad_empresa}}" disabled="true">
			</div>
		</div>
	</div>
	@elseif($actividad->ocupacion == "Independiente")
	<div class="row tipoGroup fieldsSpecific2" id="Independiente">
		<div class="col-md-4">
			<div class="md-form">
				<label for="actividad_independiente">Ocupación o tipo de actividad</label>
				<input type="text" class="form-control" id="actividad_independiente" name="actividad_independiente" value="{{$actividad->actividad_independiente}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="direccion_independiente">Dirección</label>
				<input type="text" class="form-control" id="direccion_independiente" name="direccion_independiente" value="{{$actividad->direccion_independiente}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="ciudad_independiente">Ciudad</label>
				<input type="text" class="form-control" id="ciudad_independiente" name="ciudad_independiente" value="{{$actividad->ciudad_independiente}}" disabled="true">
			</div>
		</div>
	</div>
	@elseif($actividad->ocupacion == "Otro")
	<div class="row tipoGroup fieldsSpecific2" id="Otro">
		<div class="col-md-4">
			<div class="md-form">
				<label for="otra_ocupacion">¿Cuál?</label>
				<input type="text" class="form-control" id="otra_ocupacion" name="otra_ocupacion" value="{{$actividad->otra_ocupacion}}" disabled="true">
			</div>
		</div>
	</div>
	@endif
	@endforeach

	@foreach($referencias as $referencia)
	<h4>Referencia familiar</h4>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<label for="nombre_referencia">Nombre Completo</label>
				<input type="text" class="form-control" id="nombre_referencia" name="nombre_referencia" value="{{$referencia->nombre_referencia}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="direccion_referencia">Dirección</label>
				<input type="text" class="form-control" id="direccion_referencia" name="direccion_referencia" value="{{$referencia->direccion_referencia}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="telefono_referencia">Teléfono</label>
				<input type="tel" class="form-control" id="telefono_referencia" name="telefono_referencia" value="{{$referencia->telefono_referencia}}" disabled="true">
			</div>
		</div>
	</div>
	@endforeach

	<h4>Información Bancaria</h4>
	@foreach($cuentas as $cuenta)
	<div class="row infoBanco">
		<div class="col-md-4">
			<div class="md-form">
				<label for="nombre_banco">Banco</label>
				<input type="text" class="form-control" id="nombre_banco" name="nombre_banco" value="{{$cuenta->nombre_banco}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="t_cuenta">Tipo de Cuenta</label>
				<input type="text" class="form-control" id="t_cuenta" name="t_cuenta" value="{{$cuenta->t_cuenta}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="n_cuenta">Número de cuenta</label>
				<input type="number" class="form-control" id="n_cuenta" name="n_cuenta" value="{{$cuenta->n_cuenta}}" disabled="true">
			</div>
		</div>
	</div>
	@endforeach

	{{-- @foreach($solicitudes as $solicitud) --}}
	<div class="row submit-row">
		<div class="col-md-4">
			<div class="md-form">
				<label for="nombre_banco">Valor solicitado</label>
				<input type="text" class="form-control" id="nombre_banco" name="nombre_banco" value="{{$solicitudes->valor_solicitado}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="t_cuenta">Dias limite de pago</label>
				<input type="text" class="form-control" id="t_cuenta" name="t_cuenta" value="{{$solicitudes->dias_limite}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="n_cuenta">Gestion de crédito</label>
				<input type="number" class="form-control" id="n_cuenta" name="n_cuenta" value="{{$solicitudes->valor_gestion}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="nombre_banco">Seguro</label>
				<input type="text" class="form-control" id="nombre_banco" name="nombre_banco" value="{{$solicitudes->valor_seguro}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="t_cuenta">Interes</label>
				<input type="text" class="form-control" id="t_cuenta" name="t_cuenta" value="{{$solicitudes->valor_interes}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<label for="n_cuenta">Total a pagar</label>
				<input type="number" class="form-control" id="n_cuenta" name="n_cuenta" value="{{$solicitudes->valor_total_pagar}}" disabled="true">
			</div>
		</div>
	</div>
</div>

{{-- Modal success --}}

<div class="modal fade" id="mostrarmodalsolicitud" tabindex="-1" role="dialog" aria-labelledby="enviadoModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<img src="{{ asset('img/enviado-check.png')}}"><br>
				<h2>¡Se actualizo el estado del credito correctamente!</h2>
			</div>
		</div>
	</div>
</div>

{{-- @endforeach --}}
<form method="POST" id="edit_solicitud" action="{{ route('solicitudes.update', $solicitudes->id)}}" role="form">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">

	<input type="hidden" name="user_id" value="{{$solicitudes->user_id}}">
	<input type="hidden" name="solicitud_id" value="{{$solicitudes->id}}">

	@if($solicitudes->estado_solicitud == 'Pendiente')
		<div class="container-fluid">
			<div class="text-center" style="font-size:15px;">
			  	<button type="text" name="estado_solicitud" value="Aprobado" class="btn btn-success btn-show">Aprobar</button>
			</div>
			<div class="text-center" style="font-size:15px;">
			  	<button type="text" name="estado_solicitud" value="Desaprobado" class="btn btn-danger btn-show .alert.alert-danger">Desaprobar</button>
			</div>
		</div>
	@elseif($solicitudes->estado_solicitud == 'Aprobado')
		<div class="container-fluid">
			<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 25px; padding-right: 20px;">
				<div class="text-center" style="font-size:15px;">
			  		Estado de la solicitud<br>
			  		<strong style="">Aprobado</strong>
				</div>
			</div>
		</div>
	@elseif($solicitudes->estado_solicitud == 'Desaprobado')
		<div class="container-fluid">
			<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 25px; padding-right: 20px;">
				<div class="text-center" style="font-size:15px;">
			  		Estado de la solicitud<br>
			  		<strong style="">Desaprobado</strong>
				</div>
			</div>
		</div>
	@endif
</form>

@if(!empty(Session::get('success_solicitud')) && Session::get('success_solicitud') == 5)
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#mostrarmodalsolicitud").modal("show");
		});
	</script>
@endif

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
