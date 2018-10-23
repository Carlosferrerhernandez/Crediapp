@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
	<div class="content">
		<div class="col-md-12">
			<div class="card">
				<div class="card-content table-responsive table-striped" style="padding-top: 30px;">
					<div class="table">
						<table class="table" width="100%" id="table" name="table-solicitudes">
							<thead>
								<tr>
									<th class="text-center">Estado solicitud</th>
									<th class="text-center">Nombre del solicitante</th>
									<th class="text-center">Detalles</th>
									<th class="text-center">Eliminar</th>
								</tr>
							</thead>
							<tbody class="container-fluid">
								@foreach($data as $solicitud)
								<tr>
									<td class="text-center">{{$solicitud->estado_solicitud}}</td>
									<td class="text-center">{{$solicitud->user->nombres}} {{$solicitud->user->apellidos}}</td>
									<br>
									<td class="td-actions text-center">
                                    <a href="{{ URL::to('solicitudes/' . $solicitud->id . '/user/' . $solicitud->user_id) }}" rel="tooltip" title="Ver mas" class="btn btn-success">Ver detalle</a>  
                                	</td>
                                	<td class="td-actions text-center">
                                    	<form action="/solicitudes/{{ $solicitud->id }}" method="POST">
								            {{ csrf_field() }}
								            {{ method_field('DELETE') }}

								            <button id="eliminar" class="btn btn-danger">Borrar solicitud</button>
								        </form>
                                    </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>    
</div>

<script>
	$('#eliminar').submit(function(e){
     confirm('Esta seguro de eliminar el registro?', function(result){
            if(!result) {
               return false;
            }
     }); 
});
</script>

@endsection
