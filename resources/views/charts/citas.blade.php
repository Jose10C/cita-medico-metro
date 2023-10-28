@extends('layouts.app')

@section('title', 'Reportes')

@section('content')

<div class="section-header">
    <h1>@yield('title','Reporte - Citas')</h1>
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
                    <h4>Reporte - Frecuencia de Citas</h4>
                </div>

                <div class="card-body">
                    <div id="container"></div>
                </div>

            </div>
        </div>
    </div>
</div>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Citas Registradas al Mes'
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Citas'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Citas Registradas',
            data: @json($cantidad)
        }]
    });
</script>



@endsection