@extends('layouts.app')

@section('content')
	<div class="container-fluid" id="contacto">
		<div class="row">
			<div class="col-md-9">
					<form id="homeForm" method="POST" action="{{route('contact.store')}}">
						{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">
							<h2>Contáctanos</h2>
							<p>¡Es un gusto poder ayudarte!  responderemos tus dudas e inquietudes en el menor tiempo posible.</p>
							<div class="md-form">
								<input type="text" class="form-control" id="homeName" name="homeName">
								<label for="homeName">Nombre completo</label>
							</div>
							<div class="md-form">
								<input type="email" class="form-control" id="homeMail" name="homeMail">
								<label for="homeMail">Correo electrónico</label>
							</div>
							<div class="md-form">
								<input type="tel" class="form-control" id="homeCell" name="homeCell" value="{{ $errors->has('homeCell') ? ' is-invalid' : '' }}">
								<label for="homeCell">Celular</label>
								@if ($errors->has('homeCell'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('homeCell') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="col-md-6 align-self-end">
							<div class="md-form">
								<textarea onkeyup="auto_grow(this)" class="form-control align-self-end" id="homeMsg" name="homeMsg" rows="1"></textarea>
								<label for="homeMsg">Mensaje</label>
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