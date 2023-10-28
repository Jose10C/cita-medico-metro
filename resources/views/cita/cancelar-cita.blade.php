@extends('layouts.app')

@section('title', 'Mis Citas')

@section('content')

<div class="section-header">
    <h1>@yield('title','Mis Citas')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Paciente</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Cancelar Cita</h4>
                    <div class="card-header-form">
                        <a href="{{ route('mis-citas') }}" class="btn btn-icon icon-left btn-dark"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="card-body">
                        @if($role == 'paciente')
                        <p>Se cancelará la cita reservada con el Médico <b>{{$cita->medico->name}}</b> (especialidad <b>{{$cita->especialidad->nombre}}</b>), programada para el día <b>{{$cita->fecha_cita}}</b> a horas <b>{{$cita->Scheduled_Time_12}}</b>. </p>
                        @elseif($role == 'medico')
                        <p>Se cancelará la cita reservada del Paciente <b>{{$cita->paciente->name}}</b> (especialidad <b>{{$cita->especialidad->nombre}}</b>), programada para el día <b>{{$cita->fecha_cita}}</b> a horas <b>{{$cita->Scheduled_Time_12}}</b>. </p>
                        @else
                        <p>Se cancelará la cita reservada del Paciente <b>{{$cita->paciente->name}}</b>, atendido por el Médico <b>{{$cita->medico->name}}</b> en la especialidad de <b>{{$cita->especialidad->nombre}}</b>, programada para el día <b>{{$cita->fecha_cita}}</b> a horas <b>{{$cita->Scheduled_Time_12}}</b>. </p>
                        @endif
                        <form action="{{ route('cancelar-cita', $cita->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="motivo">Escriba los motivos de la cancelación de la cita.</label>
                                <textarea class="form-control" name="motivo" id="motivo" rows="3" required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Cancelar Cita</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery -->
<script src="{{ asset('modules/jquery.min.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('modules/izitoast/js/iziToast.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('js/page/modules-toastr.js') }}"></script>

@if (session('message'))
<script>
    $(document).ready(function() {
        iziToast.success({
            title: 'Muy Bien!',
            message: "{{session('message')}}",
            position: 'topRight',
            icon: 'fa fa-check-circle'
        });
    });
</script>
@endif

<script>
    function confirmacion() {
        $(document).ready(function() {
            iziToast.error({
                theme: 'info',
                icon: 'fa fa-question-circle',
                title: 'Confirmación',
                message: '¿Estás seguro de que deseas cancelar la cita reservada?',
                position: 'topCenter',
                progressBarColor: 'rgba(255, 0, 0, 0.4)',
                buttons: [
                    ['<button><b>Sí</b></button>', function(instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                        document.querySelector('#cancelarCita').submit();
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                    }, true],
                    ['<button>No</button>', function(instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                    }]
                ]
            });
        });
    }
</script>

@endsection