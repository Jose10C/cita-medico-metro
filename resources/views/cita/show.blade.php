@extends('layouts.app')

@section('title', 'Detalle de Cita')

@section('content')

<div class="section-header">
    <h1>@yield('title','Detalle de Cita')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Detalle de Cita</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detalle de Cita</h4>
                    <div class="card-header-form">
                        <a href="{{ route('mis-citas') }}" class="btn btn-icon icon-left btn-dark"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>

                <div class="card-body p-2">
                    <div class="card-body">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image" src="{{asset('img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Fecha</div>
                                        <div class="profile-widget-item-value">{{$cita->fecha_cita}}</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Hora</div>
                                        <div class="profile-widget-item-value">{{$cita->Scheduled_Time_12}}</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Estado</div>
                                        <div class="profile-widget-item-value">
                                            @if($cita->estado == 'Cancelada')
                                            <span class="badge badge-danger">Cancelada</span>
                                            @endif
                                            @if($cita->estado == 'Confirmada')
                                            <span class="badge badge-warning">{{$cita->estado}}</span>
                                            @endif
                                            @if($cita->estado == 'Reservada')
                                            <span class="badge badge-info">{{$cita->estado}}</span>
                                            @endif
                                            @if($cita->estado == 'Atendida')
                                            <span class="badge badge-success">{{$cita->estado}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description pb-0">
                                <div class="profile-widget-name">
                                    @if($role == 'paciente' || $role == 'admin')
                                        Médico(a): {{$cita->medico->name}} 
                                        <div class="text-muted d-inline font-weight-normal">
                                            <div class="slash"></div> Especialidad: {{$cita->especialidad->nombre}}
                                        </div>
                                    @endif
                                    <br>
                                    @if($role == 'medico' || $role == 'admin')
                                        Paciente: {{$cita->paciente->name}}
                                        <div class="text-muted d-inline font-weight-normal">
                                            <div class="slash"></div> Para: {{$cita->especialidad->nombre}}
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table  table-sm">
                                            <thead>
                                            <tr>
                                                <th scope="col">Tipo de Cita</th>
                                                <th scope="col">Síntomas que presenta</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$cita->tipo}}</td>
                                                <td>{{$cita->sintomas}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert bg-light text-primary">
                                    <p>
                                        @if($cita->cancelacion)
                                        <li class="media">
                                            <img alt="image" class="mr-3 rounded-circle" width="50" src="{{asset('img/browsers/safari.png')}}">
                                            <div class="media-body">
                                                <div class="media-title">
                                                    Estado 
                                                    @if($cita->estado == 'Cancelada')
                                                    <span class="badge badge-danger">Cancelada</span>
                                                    @else
                                                    <span class="badge badge-success">{{$cita->estado}}</span>
                                                    @endif
                                                </div>
                                                <div class="text-job">( {{$cita->cancelacion->cancelado_por->name}} )</div>
                                            </div>
                                            <div class="media-items">
                                                <div class="media-item">
                                                    <div class="media-value"> <small> {{$cita->cancelacion->created_at}} </small> </div>
                                                    <div class="media-label">Fecha de Cancelación</div>
                                                </div>
                                                <div class="media-item">
                                                    <div class="media-value"> <small> {{$cita->cancelacion->motivo}} </small> </div>
                                                    <div class="media-label">Motivo</div>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                        <li class="media">
                                            @if($cita->estado == 'Cancelada')
                                            <img alt="image" class="mr-3 rounded-circle" width="50" src="{{asset('img/browsers/safari.png')}}">
                                            <div class="media-body">
                                                <div class="media-title">Motivo 
                                                    @if($cita->estado == 'Cancelada')
                                                    <span class="badge badge-danger">Cancelada</span>
                                                    @endif
                                                </div>
                                                <div class="text-job">* La cita fue cancelada antes de su confirmación.</div>
                                            </div>
                                            @endif
                                        </li>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer text-center pt-0">
                                <a href="{{ route('mis-citas') }}" class="btn btn-icon icon-left btn-dark"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                            </div>
                        </div>
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

@endsection