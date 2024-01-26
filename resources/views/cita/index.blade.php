@extends('layouts.app')

@section('title', 'Mis Citas')

@section('content')

<div class="section-header">
    <h1>@yield('title','Mis Citas')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Mis Citas</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Mis Citas</h4>
                    <div class="card-header-form">
                        <!-- <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="card-body">
                        <ul class="nav nav-tabs justify-content-center" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a href="#citas-pendientes" class="nav-link btn-icon icon-left active" data-toggle="tab" role="tab" aria-selected="false"><i class="fas fa-hourglass-half"></i> Citas Pendientes</a>
                            </li>
                            <li class="nav-item">
                                <a href="#mis-citas" class="nav-link btn-icon icon-left" data-toggle="tab" role="tab" aria-selected="false"><i class="fas fa-calendar-check"></i> Citas Confirmadas</a>
                            </li>
                            <li class="nav-item">
                                <a href="#historial" class="nav-link btn-icon icon-left" data-toggle="tab" role="tab" aria-selected="false"><i class="fas fa-clipboard"></i> Historial de Citas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                

                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="citas-pendientes" role="tabpanel">
                        @include('cita.tablas.cita-pendiente')
                    </div>
                    <div class="tab-pane fade" id="mis-citas" role="tabpanel">
                        @include('cita.tablas.cita-confirmada')
                    </div>
                    <div class="tab-pane fade" id="historial" role="tabpanel">
                        @include('cita.tablas.cita-historial')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('modules/izitoast/js/iziToast.min.js') }}"></script>

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

@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
    $(document).ready(function() {
        iziToast.error({
            title: 'Error!',
            message: "{{ $error }}",
            position: 'topRight',
            icon: 'fa fa-ban',
        });
    });
</script>
@endforeach
@endif

<script>
    function confirmacion(userId) {
        $(document).ready(function() {
            iziToast.error({
                theme: 'info',
                icon: 'fa fa-question-circle',
                title: 'Confirmación',
                message: '¿Estás seguro de que deseas eliminar la cita antes de ser confirmada por el especialista?',
                position: 'topCenter',
                progressBarColor: 'rgba(255, 0, 0, 0.4)',
                buttons: [
                    ['<button><b>Sí</b></button>', function(instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                        document.querySelector('#cancelarCita'+userId).submit();
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