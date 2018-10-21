@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-body">
				<div class="row">
					<div class="col-12">
						<div class="col-md-12">
							<div class="card-header">
								<h5 class="card-title">Editar valores</h5>
							</div>
							<div class="card-body">
								<form method="POST" id="edit_competencia" action="{{ route('porcentajes.update', $porcentaje->id)}}" role="form">
									{{ csrf_field() }}
									<input type="hidden" name="_method" value="PUT">

									<div class="row">
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<label>Gestión de crédito</label>
												<input type="number" class="form-control" name="gestion_credito" step="0.01" value="{{$porcentaje->gestion_credito}}">
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<label>Seguro</label>
												<input type="number" class="form-control" name="seguro_bancario" step="0.01" value="{{$porcentaje->seguro_bancario}}">
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<label>Interés</label>
												<input type="number" class="form-control" name="interes" step="0.01" value="{{$porcentaje->interes}}">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<label>Motivos</label>
												<textarea class="form-control textarea" placeholder="No es requerido" name="detalle_cambio">{{$porcentaje->detalle_cambio}}</textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="update ml-auto mr-auto">
											<button type="submit" class="btn btn-success btn-round">Actualizar valores</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
