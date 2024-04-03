@extends('layouts.guest')

@section('title', $noticia->titulo)

@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto my-5">
                <div class="card card-primary">
                    <div class="card-header" style="text-align: center;">
                        <h4>{{ __($noticia->titulo) }}</h4>
                    </div>
                    <div style="text-align: end;">
                        <small>
                            Publicado por: {{ $noticia->usuario_id }}admin el {{ $noticia->created_at->format('d/m/Y') }}
                        </small>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="subtitle">
                            {{ $noticia->descripcion }}
                        </div>
                        <br>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset($noticia->imagen) }}" class="img-fluid" alt="{{$noticia->titulo}}" height="500px">
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    {!! $noticia->contenido !!}
                </div>
                <div class="mt-5 text-muted text-center">
                    Publicado el {{ $noticia->fecha_publicacion }}
                </div>
                <div class="mt-5 text-muted text-center">
                    Publicado por {{ $noticia->user_id }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection