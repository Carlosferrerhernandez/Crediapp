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
									<th class="text-center">Correo del suscriptor</th>
									<th class="text-center">Detalles</th>
								</tr>
							</thead>
							<tbody class="container-fluid">
								@foreach($data as $suscripcion)
								<tr>
									<td class="text-center">{{$suscripcion->suscMail}}</td>
									<td class="td-actions text-center">
                                    <a href="{{ URL::to('suscripciones/' . $suscripcion->id) }}" rel="tooltip" title="Ver mas" class="btn btn-success btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i>
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

@endsection
