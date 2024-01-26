@extends('layouts.app')

@section('title', 'Calendario')

@section('css')
<link rel="stylesheet" href="{{ asset('modules/fullcalendar/fullcalendar.min.css') }}">
@endsection

@section('content')

<div class="section-header">
    <h1>@yield('title','Calendario')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Mi Calendario</h4>
                    <div class="card-header-form">
                        <a href="{{ route('home') }}" class="btn btn-icon icon-left btn-dark"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <h2 class="section-title">Calendar</h2>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="card-body">
                                    <div class="fc-overflow">
                                        <div id="myEvent"></div>
                                    </div>
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

@section('js')
<script src="{{ asset('modules/fullcalendar/fullcalendar.min.js') }}"></script>

<script src="{{ asset('js/page/modules-calendar.js') }}"></script>
@endsection