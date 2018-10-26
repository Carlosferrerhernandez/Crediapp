@extends('layouts.auth')

@section('content')
<div class="row h-100 align-items-center">
	<div class="col-12 col-md-6">
		<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="card card-login">
				<div class="card-header">
					<div class="card-header">
						<h3 class="header text-center">Iniciar sesión</h3>
					</div>
				</div>
				<div class="card-body">
					<div class="input-group">
						<input type="email" class="form-control" placeholder="Email" name="email">
						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>
					<div class="input-group">
						<input type="password" placeholder="Contraseña" class="form-control" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group">
						<div class="form-check">
									{{-- <label class="form-check-label">
										<input class="form-check-input" type="checkbox" value="">
										<span class="form-check-sign"></span>
										Recuérdame
									</label> --}}
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										{{ __('Recuerdame') }}
									</label>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-block mb-3 btn-sesion">Ingresar</button>
							<a href="{{ route('password.request') }}" class="btn btn-block mb-3 btn-olvide">Olvidaste tu contraseña</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		@endsection