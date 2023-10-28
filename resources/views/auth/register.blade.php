@extends('layouts.guest')

@section('title', 'Registrarse')

@section('content')

<div class="row">
    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="login-brand">
            <img src="{{asset('img/stisla-fill.svg')}}" alt="logo" width="50" class="shadow-light rounded-circle">
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('Registrarse') }}</h4>
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
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">{{ __('Nombres') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required="" autocomplete="name" autofocus>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="lastname">{{ __('Apellidos') }}</label>
                            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="email">{{ __('Correo') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label>Telefono</label>
                            <input name="telefono" type="tel" class="form-control" value="{{ old('telefono') }}" autocomplete="telefono">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="password" class="d-block">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required>
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="password-confirm" class="d-block">Confirmar contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    *Informacion Adicional
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Dirección</label>
                            <input name="direccion" type="text" class="form-control" value="{{ old('direccion') }}">
                        </div>
                        <div class="form-group col-6">
                            <label>D.N.I.</label>
                            <input name="dni" type="tel" class="form-control" value="{{ old('dni') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                            <label class="custom-control-label" for="agree"> (*)Estoy de acuerdo con los términos y condiciones</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection