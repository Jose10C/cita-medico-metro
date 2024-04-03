@extends('layouts.guest')

@section('title', 'Info Contacto')

@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto my-5">
                <div class="card card-primary">
                    <div class="card-header" style="text-align: center;">
                        <h4>Contactos</h4>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="contact-info">
                                    <h2>Información de Contacto</h2>
                                    <div class="info">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p>Dirección:  Jr. Huancavelica - Abancay</p>
                                    </div>
                                    <div class="info">
                                        <i class="fas fa-phone-alt"></i>
                                        <p>Teléfono: (083)-322-312</p>
                                    </div>
                                    <div class="info">
                                        <i class="fas fa-envelope"></i>
                                        <p>Correo electrónico: contactos@metropolitano.com</p>
                                    </div>
                                    <!-- Otros detalles de contacto si es necesario -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection