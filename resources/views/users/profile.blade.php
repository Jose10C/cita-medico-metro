<?php

use Illuminate\Support\Str; ?>

@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('css')
<link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">
<link rel="stylesheet" href="{{ asset('modules/summernote/summernote-bs4.css') }}">
@endsection

@section('content')

<div class="section-header">
    <h1>@yield('title','Perfil')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Modificar Información Personal</h4>
                    <div class="card-header-form">
                        <a href="" class="btn btn-icon icon-left btn-dark"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <h2 class="section-title">Hola, {{$user->name}}</h2>
                    <p class="section-lead">
                        Cambie su información personal.
                    </p>
                    <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-5">
                            <div class="card profile-widget">
                                <div class="profile-widget-header">
                                    <img alt="image" src="{{ asset($user->avatar) }}" class="rounded-circle profile-widget-picture">
                                    <div class="profile-widget-items">
                                        <div class="profile-widget-item">
                                            <div class="profile-widget-item-label">Posts</div>
                                            <div class="profile-widget-item-value">187</div>
                                        </div>
                                        <div class="profile-widget-item">
                                            <div class="profile-widget-item-label">Followers</div>
                                            <div class="profile-widget-item-value">6,8K</div>
                                        </div>
                                        <div class="profile-widget-item">
                                            <div class="profile-widget-item-label">Following</div>
                                            <div class="profile-widget-item-value">2,1K</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-widget-description">
                                    <div class="profile-widget-name">{{$user->name}} {{$user->lastname}}
                                        <div class="text-muted d-inline font-weight-normal">
                                            <div class="slash"></div> {{$role}}
                                        </div>
                                    </div>
                                    {!! $user->biografia !!}
                                </div>
                                <div class="card-footer text-center">
                                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <a href="#" class="btn btn-social-icon btn-instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Form Edit -->
                        <div class="col-12 col-md-12 col-lg-7">
                            <div class="card">
                                <form action="{{ route('users.profile.update') }}" method="POST" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="card-header">
                                        <h4>Editar Perfil</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label for="name">Nombres</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{old('name', $user->name)}}" required="">
                                                <div class="invalid-feedback">
                                                    Por favor, ingrese su nombre.
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label for="lastname">Apellidos</label>
                                                <input type="text" class="form-control" name="lastname" id="lastname" value="{{old('lastname', $user->lastname)}}" required="">
                                                <div class="invalid-feedback">
                                                    Por favor, ingrese sus apellidos.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label for="email">Correo</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{old('email', $user->email)}}" required="">
                                                <div class="invalid-feedback">
                                                    Por favor, ingrese un correo válido.
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label for="telefono">Teléfono</label>
                                                <input type="tel" class="form-control" name="telefono" id="telefono" value="{{old('telefono', $user->telefono)}}" required="">
                                                <div class="invalid-feedback">
                                                    Por favor, ingrese un teléfono válido.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label for="direccion">Dirección</label>
                                                <input type="text" class="form-control" name="direccion" id="direccion" value="{{old('direccion', $user->direccion)}}">
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label for="dni">D.N.I.</label>
                                                <input type="tel" class="form-control" name="dni" id="dni" value="{{old('dni', $user->dni)}}">
                                            </div>
                                        </div>
                                        @if($role == 'medico' || $role == 'admin')
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="biografia">Biografía</label>
                                                <textarea class="form-control summernote-simple" name="biografia" id="biografia" rows="50">{{old('biografia', $user->biografia)}}</textarea>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
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
<script src="{{ asset('modules/izitoast/js/iziToast.min.js') }}"></script>
<script src="{{ asset('js/page/modules-toastr.js') }}"></script>
<script src="{{ asset('modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('js/citas/create.js') }}"></script>
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

@endsection