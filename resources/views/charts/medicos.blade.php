@extends('layouts.app')

@section('title', 'Reportes')

@section('content')

<div class="section-header">
    <h1>@yield('title','Reporte - Médicos')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Medicos</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Reporte - Desempeño Médicos</h4>
                </div>

                <div class="card-body">
                    <div class="input-daterange datepicker row align-items-center" data-date-format="yyyy-mm-dd">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Fecha Inicio" id="startDate" type="text" value="{{$start}}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Fecha Final" id="endDate" type="text" value="{{$end}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="container"></div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="{{ asset('js/charts/medicos.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>

@endsection