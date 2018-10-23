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
									<th class="text-center">Eliminar</th>
								</tr>
							</thead>
							<tbody class="container-fluid">
								@foreach($data as $suscripcion)
								<tr>
									<td class="text-center">{{$suscripcion->suscMail}}</td>
                                	<br>
                                	<td class="td-actions text-center">
                                    	<form action="/suscripciones/{{ $suscripcion->id }}" method="POST">
								            {{ csrf_field() }}
								            {{ method_field('DELETE') }}

								            <button id="eliminar" class="btn btn-danger">Borrar suscripcion</button>
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

{{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> --}}

@endsection
