@extends('layouts.auth')

@section('content')
<div class="row h-100 align-items-center">
    <div class="col-12 col-md-6">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="card card-login">
                <div class="card-header">
                    <div class="card-header">
                        <h4 class="header text-center">Restablecer contraseña</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Correo electronico" value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-block mb-3 btn-sesion">{{ __('Restablecer') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
