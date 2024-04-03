@extends('layouts.guest')

@section('title', 'Noticias')

@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto my-5">
                <div class="card card-primary">
                    <div class="card-header" style="text-align: center;">
                        <h4>Sección de Noticias</h4>
                    </div>
                    <br>
                    <div class="card-body">
                        <div class="subtitle">
                            REVISA NUESTRAS DIFERENTES NOTICIAS Y EVENTOS
                        </div>
                        <br>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($noticias as $noticia)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{ asset($noticia->imagen) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $noticia->titulo }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $noticia->descripcion }}</p>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ url('noticias/noticias-nuevas/'.$noticia->slug) }}" class="btn btn-primary">Leer más</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection