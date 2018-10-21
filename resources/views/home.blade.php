@extends('layouts.dashboard')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-body">
				<div class="row">
					<div class="col-12 text-center">
						<img src="{{ asset('logo.png')}}" alt="" width="147" height="39,81">
						<h4>Bienvenido al panel de control de Crediapp</h4>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<hr>
				<div class="stats">
					<i class="fa fa-check"></i><strong>Usuario:</strong> {{ Auth::user()->user_name }} 
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-body ">
				<div class="row">
					<div class="col-5 col-md-4">
						<div class="icon-big text-left icon-success">
							<i class="nc-icon nc-credit-card"></i>
						</div>
					</div>
					<div class="col-7 col-md-8">
						<div class="numbers">
							<p class="card-category">Administrar valores</p>
							<p class="card-title"></p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer ">
				<hr>
				<div class="stats" style="color: #1EDC74">
					<a href="{{ URL::to('porcentajes/' . 1 . '/edit')}}"><i class="fa fa-refresh"></i>Actualizar ahora
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
