@extends('layouts.app')

@section('title', 'Gestionar Horario')

@section('content')

<div class="section-header">
    <h1>@yield('title','Bienvenidos')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Gestion Horario</div>
    </div>
</div>

<form action="{{ route('store-horario') }}" method="POST">
    @csrf
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Gestionar Mi Horario</h4>
                        <div class="card-header-form">
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="card-body p-2">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Dia</th>
                                    <th>Activo</th>
                                    <th>Turno Mañana</th>
                                    <th>Turno Tarde</th>
                                </tr>
                                @foreach ($horarios as $key => $horario)
                                <tr>
                                    <td>{{ $dias[$key] }}</td>
                                    <td>
                                        <label class="custom-switch mt-2">
                                            <input type="checkbox" name="activo[]" value="{{ $key }}" class="custom-switch-input" @checked($horario->activo)>
                                            <span class="custom-switch-indicator"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <select name="manana_inicio[]" class="form-control select2">
                                                    @for ($i=8; $i<=11; $i++)
                                                        <option value="{{ $i }}:00" @selected($i.':00 AM'==$horario->manana_inicio) >{{ $i }}:00 AM</option>
                                                        <option value="{{ $i }}:30" @selected($i.':30 AM'==$horario->manana_inicio) >{{ $i }}:30 AM</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select name="manana_fin[]" class="form-control select2">
                                                    @for ($i=8; $i<=11; $i++)
                                                        <option value="{{ $i }}:00" @selected($i.':00 AM'==$horario->manana_fin) >{{ $i }}:00 AM</option>
                                                        <option value="{{ $i }}:30" @selected($i.':30 AM'==$horario->manana_fin) >{{ $i }}:30 AM</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <select name="tarde_inicio[]" class="form-control select2">
                                                    @for ($i=2; $i<=11; $i++)
                                                        <option value="{{ $i+12 }}:00" @if($i.':00 PM'==$horario->tarde_inicio) selected @endif >{{ $i }}:00 PM</option>
                                                        <option value="{{ $i+12 }}:30" @if($i.':30 PM'==$horario->tarde_inicio) selected @endif >{{ $i }}:30 PM</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select name="tarde_fin[]" class="form-control select2">
                                                    @for ($i=2; $i<=11; $i++)
                                                        <option value="{{ $i+12 }}:00" @selected($i.':00 PM'==$horario->tarde_fin) > {{ $i }}:00 PM</option>
                                                        <option value="{{ $i+12 }}:30" @selected($i.':30 PM'==$horario->tarde_fin) > {{ $i }}:30 PM</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


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
                message: '¿Estás seguro de que deseas eliminar este registro?',
                position: 'topCenter',
                progressBarColor: 'rgba(255, 0, 0, 0.4)',
                buttons: [
                    ['<button><b>Sí</b></button>', function(instance, toast) {
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast);
                        document.querySelector('#eliminarData').submit();
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