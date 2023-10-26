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
                    <h4>Lista de Mis Citas</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#mis-citas" role="tab" aria-selected="true">
                                    <i class="ni ni-calendar-grid-58 mr-2"></i>Mis Citas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#citas-pendientes" role="tab" aria-selected="false">
                                    <i class="ni ni-bell-55 mr-2"></i>Citas Pendientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#historial" role="tab" aria-selected="false">
                                    <i class="ni ni-folder-17 mr-2"></i>Historial</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="mis-citas" role="tabpanel">
                        @include('cita.cita-confirmada')
                    </div>
                    <div class="tab-pane fade" id="citas-pendientes" role="tabpanel">
                        @include('cita.cita-pendiente')
                    </div>
                    <div class="tab-pane fade" id="historial" role="tabpanel">
                        @include('cita.cita-historial')
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