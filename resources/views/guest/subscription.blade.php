@extends('layouts.app')

@section('content')
	<div class="container-fluid" id="contacto">
		<div class="row">
			<div class="col-md-9">
					<form id="homeForm" method="POST" action="{{route('subscription.store')}}">
						{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">
							<h2>Contáctanos</h2>
							<p>¡Es un gusto poder ayudarte!  responderemos tus dudas e inquietudes en el menor tiempo posible.</p>
							
							<div class="md-form">
								<input type="tel" class="form-control" id="suscMail" name="suscMail" value="{{ $errors->has('suscMail') ? ' is-invalid' : '' }}">
								<label for="suscMail">Suscribirse</label>
								@if ($errors->has('suscMail'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('suscMail') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="col-md-6 align-self-end">
							<div class="md-form">
								
							</div>
						</div>
						<div class="col-12 text-center">
							<button type="submit" class="btn">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-3 align-self-center">
				<div class="contact-box">
					<img src="img/contacto.png">
					<p class="contacto-titulo">Atención al cliente</p>
					<p class="contacto-contenido">316 906 3779</p>
					<p class="contacto-titulo">Escríbenos</p>
					<p class="contacto-contenido">info@crediapp.com</p>
				</div>
			</div>
		</div>
	</div>
@endsection