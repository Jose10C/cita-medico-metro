@extends('layouts.guest')

@section('title', 'Nosotros')

@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto my-5">
                <div class="card card-primary">
                    <div class="card-header" style="text-align: center;">
                        <h4>Quienes Somos</h4>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <h3>
                            Centro de Salud Metropolitano - Abancay
                        </h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="subtitle">
                            Bienvenido al Centro de Salud Metropolitano de Abancay.

                            En el Centro de Salud Metropolitano de Abancay, nos dedicamos a proporcionar atención médica de calidad y compasiva a nuestra comunidad. Con un equipo de profesionales altamente calificados y tecnología médica de vanguardia, estamos comprometidos a promover y proteger la salud de nuestros pacientes.

                            Nuestro enfoque integral abarca una amplia gama de servicios de salud, incluyendo atención primaria, especialidades médicas y programas de salud preventiva. Nos esforzamos por ofrecer un ambiente acogedor y seguro donde nuestros pacientes se sientan cómodos y bien atendidos en cada visita.

                            En el Centro de Salud Metropolitano de Abancay, nos enorgullece servir como un pilar de la comunidad, trabajando en estrecha colaboración con pacientes, familias y otros proveedores de atención médica para mejorar el bienestar general de nuestra población.

                            Juntos, estamos construyendo un futuro más saludable y vibrante para Abancay y sus alrededores.
                        </div>
                        <br>
                    </div>
                    <div style="align-items: center;">
                        <div style="width: 300px; height: 300px;">
                            <img src="{{ asset('img/config/logo-claro-metropolitano.png') }}" alt="logo centro de salud metropolitano">
                        </div>
                        <br>
                    </div>
                    <div class="card-body">
                        <div class="subtitle">
                            El Centro de Salud Metropolitano - Abancay es una institución de salud de primer nivel, que brinda atención médica de calidad a la población de la ciudad de Abancay y sus alrededores.
                            Este texto destaca la misión y el compromiso del Centro de Salud Metropolitano de Abancay con la comunidad, así como su enfoque en la atención médica integral y la colaboración con pacientes y otros proveedores de atención médica.
                        </div>
                        <br>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="{{ asset('img/imagen-metro.jpeg')}}" class="img-fluid" alt="imagen-portada" width="10px">
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    <div class="col-md-6">
                        <h4>Misión</h4>
                        <p>
                            Brindar atención médica de calidad y compasiva a la población de Abancay y sus alrededores, promoviendo la salud y el bienestar de nuestros pacientes.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4>Visión</h4>
                        <p>
                            Ser reconocidos como un centro de salud de excelencia, comprometido con la salud y el bienestar de la comunidad de Abancay.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection