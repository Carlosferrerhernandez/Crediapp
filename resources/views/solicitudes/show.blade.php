@extends('layouts.application')

@section('content')

<!-- FORMULARIO SOLICITUD -->
<div class="container-fluid" id="solicitud">
	<h3>Solicitud de crédito</h3>
	<p class="d-none d-sm-block">{{$user->nombres}}, {{$user->apellidos}}</p>

	<h4>Datos personales</h4>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="nombres" name="nombres" value="{{$user->nombres}}" disabled="true">
				<label for="nombres">Nombres<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$user->apellidos}}" disabled="true">
				<label for="apellidos">Apellidos<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="number" class="form-control" id="n_documento" name="n_documento" value="{{$user->n_documento}}" disabled="true">
				<label for="n_documento">Documento de Identidad<span>*</span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="lugar_expedicion" name="lugar_expedicion" value="{{$user->lugar_expedicion}}" disabled="true">
				<label for="lugar_expedicion">Lugar y Fecha de Expedición<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="datepicker form-control" type="text" name="fecha_expedicion" placeholder="Fecha de expedicion" value="{{$user->fecha_expedicion}}" disabled="true">
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" disabled="true">
				<label for="email">Correo electrónico<span>*</span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<input type="number" class="form-control" id="celular" name="n_celular" value="{{$user->n_celular}}" disabled="true">
				<label for="celular">Celular<span>*</span></label>
			</div>
		</div>
		<div class="col-md-8 align-self-end">
			<div class="estadoCivilGroup row">
				<div class="col-md-3 col-lg-2 align-self-end">
					<label for="estadoCivil">Estado Civil<span>*</span></label>
					<br>
					<strong>
						<label>{{$user->e_civil}}</label>
					</strong>
				</div>
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
					<input type="text" class="form-control" id="nombres_conyuge" name="nombres_conyuge" value="{{$conyuge->nombres_conyuge}}" disabled="true">
					<label for="nombres_conyuge">Nombres<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="apellido_conyuge" name="apellido_conyuge" value="{{$conyuge->apellido_conyuge}}" disabled="true">
					<label for="apellido_conyuge">Apellidos<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="documento_conyuge" name="documento_conyuge" value="{{$conyuge->documento_conyuge}}" disabled="true">
					<label for="documento_conyuge">Documento de Identidad<span>*</span></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="lugar_conyuge" name="lugar_conyuge" value="{{$conyuge->lugar_conyuge}}" disabled="true">
					<label for="lugar_conyuge">Lugar y Fecha de Nacimiento<span>*</span></label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input class="datepicker form-control" type="text" name="nacimiento_conyuge" placeholder="Fecha nacimiento" value="{{$conyuge->nacimiento_conyuge}}" disabled="true">
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="tel" class="form-control" id="telefono_conyuge" name="telefono_conyuge" value="{{$conyuge->telefono_conyuge}}" disabled="true">
					<label for="telefono_conyuge">Teléfono</label>
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
				<input type="text" class="form-control" id="direccion" name="direccion" value="{{$ubicacion->direccion}}" disabled="true">
				<label for="direccion">Dirección<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="barrio" name="barrio" value="{{$ubicacion->barrio}}" disabled="true">
				<label for="barrio">Barrio<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$ubicacion->ciudad}}" disabled="true">
				<label for="ciudad">Ciudad<span>*</span></label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="departamento" name="departamento" value="{{$ubicacion->departamento}}" disabled="true">
				<label for="departamento">Departamento<span>*</span></label>
			</div>
		</div>
		<div class="col-md-8 align-self-end">
			<div class="viviendaGroup row">
				<div class="col-md-4 col-lg-3 align-self-end">
					<label for="vivienda">Tipo de vivienda:<span>*</span></label>
					<br>
					<strong><label class="form-check-label" for="viviendaRadio1">{{$ubicacion->vivienda}}</label></strong>
				</div>
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
		<div class="col-md-12 align-self-end">
			<div class="actividadGroup row">
				<div class="col-md-4 col-lg-3 align-self-end">
					<label for="actividad">Ocupación, oficio o profesión:<span>*</span></label>
					<label for="">{{$actividad->ocupacion}}</label>
				</div>
			</div>
		</div>
	</div>
	@if($actividad->ocupacion == "Asalariado")
	<div class="row empresaGroup fieldsSpecific2" id="Asalariado">
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="empresa" name="empresa" value="{{$actividad->empresa}}" disabled="true">
				<label for="empresa">Empresa donde trabaja<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="cargo" name="cargo" value="{{$actividad->cargo}}" disabled="true">
				<label for="cargo">Cargo<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="tel" class="form-control" id="telefono_empresa" name="telefono_empresa" value="{{$actividad->telefono_empresa}}" disabled="true">
				<label for="telefono_empresa">Teléfono de contacto<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="direcccion_trabajo" name="direcccion_trabajo" value="{{$actividad->direcccion_trabajo}}" disabled="true">
				<label for="direcccion_trabajo">Dirección laboral<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="tel" class="form-control" id="ciudad_empresa" name="ciudad_empresa" value="{{$actividad->ciudad_empresa}}" disabled="true">
				<label for="ciudad_empresa">Ciudad<span>*</span></label>
			</div>
		</div>
	</div>
	@elseif($actividad->ocupacion == "Independiente")
	<div class="row tipoGroup fieldsSpecific2" id="Independiente">
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="actividad_independiente" name="actividad_independiente" value="{{$actividad->actividad_independiente}}" disabled="true">
				<label for="actividad_independiente">Ocupación o tipo de actividad<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="direccion_independiente" name="direccion_independiente" value="{{$actividad->direccion_independiente}}" disabled="true">
				<label for="direccion_independiente">Dirección<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="ciudad_independiente" name="ciudad_independiente" value="{{$actividad->ciudad_independiente}}" disabled="true">
				<label for="ciudad_independiente">Ciudad<span>*</span></label>
			</div>
		</div>
	</div>
	@elseif($actividad->ocupacion == "Otro")
	<div class="row tipoGroup fieldsSpecific2" id="Otro">
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="otra_ocupacion" name="otra_ocupacion" value="{{$actividad->otra_ocupacion}}" disabled="true">
				<label for="otra_ocupacion">¿Cuál?<span>*</span></label>
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
				<input type="text" class="form-control" id="nombre_referencia" name="nombre_referencia" value="{{$referencia->nombre_referencia}}" disabled="true">
				<label for="nombre_referencia">Nombre Completo<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="direccion_referencia" name="direccion_referencia" value="{{$referencia->direccion_referencia}}" disabled="true">
				<label for="direccion_referencia">Dirección<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="tel" class="form-control" id="telefono_referencia" name="telefono_referencia" value="{{$referencia->telefono_referencia}}" disabled="true">
				<label for="telefono_referencia">Teléfono<span>*</span></label>
			</div>
		</div>
	</div>
	@endforeach

	<h4>Información Bancaria</h4>
	@foreach($cuentas as $cuenta)
	<div class="row infoBanco">
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="nombre_banco" name="nombre_banco" value="{{$cuenta->nombre_banco}}" disabled="true">
				<label for="nombre_banco">Banco<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="text" class="form-control" id="t_cuenta" name="t_cuenta" value="{{$cuenta->t_cuenta}}" disabled="true">
				<label for="t_cuenta">Tipo de Cuenta<span>*</span></label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="md-form">
				<input type="number" class="form-control" id="n_cuenta" name="n_cuenta" value="{{$cuenta->n_cuenta}}" disabled="true">
				<label for="n_cuenta">Número de cuenta<span>*</span></label>
			</div>
		</div>
	</div>
	@endforeach

	{{-- @foreach($solicitudes as $solicitud) --}}
	<div class="row submit-row">
		<div class="row col-md-12">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="nombre_banco" name="nombre_banco" value="{{$solicitudes->valor_solicitado}}" disabled="true">
					<label for="nombre_banco">Valor solicitado</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="t_cuenta" name="t_cuenta" value="{{$solicitudes->dias_limite}}" disabled="true">
					<label for="t_cuenta">Dias limite de pago</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="n_cuenta" name="n_cuenta" value="{{$solicitudes->valor_gestion}}" disabled="true">
					<label for="n_cuenta">Gestion de crédito</label>
				</div>
			</div>
		</div>
		<div class="row col-md-12">
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="nombre_banco" name="nombre_banco" value="{{$solicitudes->valor_seguro}}" disabled="true">
					<label for="nombre_banco">Seguro</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="text" class="form-control" id="t_cuenta" name="t_cuenta" value="{{$solicitudes->valor_interes}}" disabled="true">
					<label for="t_cuenta">Interes</label>
				</div>
			</div>
			<div class="col-md-4">
				<div class="md-form">
					<input type="number" class="form-control" id="n_cuenta" name="n_cuenta" value="{{$solicitudes->valor_total_pagar}}" disabled="true">
					<label for="n_cuenta">Total a pagar</label>
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
			<input type="radio" name="estado_solicitud" value="Aprobado" checked> Aprobar <br><br>
  			<input type="radio" name="estado_solicitud" value="Desaprobado"> Desaprobar
			<div class="col-12 text-center">
				<button type="submit" class="contacto-btn">Responder solicitud</button>
			</div>
  		@elseif($solicitudes->estado_solicitud == 'Aprobado')
			<label>Aprobado</label>
		@elseif($solicitudes->estado_solicitud == 'Desaprobado')
			<label>Desaprobado</label>
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
