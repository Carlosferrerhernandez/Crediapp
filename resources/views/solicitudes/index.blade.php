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
								</tr>
							</thead>
							<tbody class="container-fluid">
								@foreach($data as $solicitud)
								<tr>
									<td class="text-center">{{$solicitud->estado_solicitud}}</td>
									<td class="text-center">{{$solicitud->user->nombres}} {{$solicitud->user->apellidos}}</td>
									<td class="td-actions text-center">
                                    <a href="{{ URL::to('solicitudes/' . $solicitud->id) }}" rel="tooltip" title="Ver mas" class="btn btn-success btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i>
                                    </a>
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

{{-- <div class="row">
	<div class="col-lg-12 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<div class="col-md-12">
							<div class="card-header">
								<h5 class="card-title">Editar valores</h5>
							</div>
							<div class="table">
								<table class="table" width="100%" id="table" name="table-solicitudes">
									<thead>
										<tr>
											<th class="text-center">Codigo solicitud</th>
											<th class="text-center">Estado solicitud</th>
											<th class="text-center">User id</th>
										</tr>
									</thead>
									<tbody class="container-fluid">
										@foreach($data as $solicitud)
										<tr>
											<td class="text-center">{{$solicitud->id}}</td>
											<td class="text-center">{{$solicitud->estado_solicitud}}</td>
											<td class="text-center">{{$solicitud->user_id}}</td>
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
	</div>
</div> --}}


@endsection
