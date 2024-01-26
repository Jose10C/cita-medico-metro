@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto my-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>{{ __('Iniciar Sesión') }}</h4>
                    </div>
    
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                {{ $errors->first() }}
                            </div>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Correo') }}</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" value="{{ old('email') }}" required autocomplete="email" autofocus required>
                                <div class="invalid-feedback">
                                    Por favor complete su correo electrónico.
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">{{ __('Contraseña') }}</label>
                                    <div class="float-right">
                                        @if (Route::has('password.request'))
                                        <a class="text-small" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required autocomplete="current-password">
                                <div class="invalid-feedback">
                                    Por favor ingrese su contraseña.
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember-me">{{ __('Recordarme') }}</label>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    ¿Aun no tiena una cuenta? <a href="{{route('register')}}">Registrarse</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
