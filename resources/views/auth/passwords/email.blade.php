@extends('layouts.auth')

@section('content')

<div class="row h-100 align-items-center">
    <div class="col-12 col-md-6">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card card-login">
                <div class="card-header">
                    <div class="card-header">
                        <h4 class="header text-center">{{ __('Restablecer contraseña') }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electronico" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-block mb-3 btn-sesion">Enviar correo</button>
                            <a href="{{ route('home') }}" class="btn btn-block mb-3 btn-olvide">Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
