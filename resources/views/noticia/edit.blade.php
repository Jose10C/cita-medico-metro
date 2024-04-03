@extends('layouts.app')

@section('title', 'Editar')

@section('content')


<div class="section-header">
    <h1>@yield('title','Bienvenidos')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        
        <div class="breadcrumb-item">Editar</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar Noticias</h4>
                    <div class="card-header-form">
                        
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="card">
                        <form action="{{ route('noticias.update', $noticia) }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="titulo" class="col-sm-3 col-form-label">Titulo</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="titulo" name="titulo" class="form-control" required="" minlength="3" value="{{ old('titulo',$noticia->titulo) }}">
                                        <div class="invalid-feedback">
                                            El titulo no puede ser vacio, al menos 3 caracteres.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="col-sm-3 col-form-label">Slug</label>
                                    <div class="col-sm-9" id="slug">
                                        <input type="text" id="slug" name="slug" class="form-control" required="" minlength="10" value="{{ old('slug',$noticia->slug) }}">
                                        <div class="invalid-feedback">
                                            El slug no puede ser vacio, al menos 10 caracteres.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">
                                    <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="descripcion" name="descripcion" required="">{{ old('descripcion', $noticia->descripcion) }}</textarea>
                                        <div class="invalid-feedback">
                                            Debe agregar una breve descripción.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contenido" class="col-sm-3 col-form-label">Contenido</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="contenido" name="contenido" required="">{{ old('contenido', $noticia->contenido) }}</textarea>
                                        <div class="invalid-feedback">
                                            Debe agregar contenido a la noticia.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="imagen" class="col-sm-3 col-form-label">Imagen</label>
                                    <div class="col-sm-9">
                                        <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">
                                        <div class="invalid-feedback">
                                            La imagen no puede ser vacia.
                                        </div>
                                        <img src="{{ asset($noticia->imagen) }}" alt="imagen" class="img-thumbnail" style="width: 100px;">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group mb-0 row">
                                    <label for="estado" class="col-sm-3 col-form-label">Estado</label>
                                    <div class="col-sm-9">
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <p>BORRADOR</p>
                                                <input type="radio" name="estado" id="estado_borrador" value="BORRADOR" class="selectgroup-input" @if($noticia->estado === "BORRADOR") checked @endif>
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-sun"></i></span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <p>PUBLICAR</p>
                                                <input type="radio" name="estado" id="estado_publicado" value="PUBLICADO" class="selectgroup-input" @if($noticia->estado == "PUBLICADO") checked @endif>
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-moon"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_publicacion" class="col-sm-3 col-form-label">Fecha Publicación</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="form-control" required="" value="{{ old('fecha_publicacion', $noticia->fecha_publicacion) }}">
                                        <div class="invalid-feedback">
                                            La fecha de publicación no puede ser vacia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
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

@endsection