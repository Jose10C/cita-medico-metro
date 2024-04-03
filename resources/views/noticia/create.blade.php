@extends('layouts.app')

@section('title', 'Agregar Nuevo')

@section('content')

<div class="section-header">
    <h1>@yield('title','Bienvenidos')</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('noticias.index') }}">Noticias</a></div>
        <div class="breadcrumb-item">Nuevo</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Lista de Noticias</h4>
                    <div class="card-header-form">
                        <a href="{{ route('noticias.index') }}" class="btn btn-icon icon-left btn-danger"> <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="card">
                        <form action="{{ route('noticias.store') }}" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="titulo" class="col-sm-3 col-form-label">Titulo</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="titulo" name="titulo" class="form-control" required="" minlength="3" value="{{ old('titulo') }}">
                                        <div class="invalid-feedback">
                                            El titulo no puede ser vacio, al menos 3 caracteres.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slug" class="col-sm-3 col-form-label">Slug</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="slug" name="slug" class="form-control" required="" minlength="10" value="{{ old('slug') }}">
                                        <div class="invalid-feedback">
                                            El slug no puede ser vacio, al menos 10 caracteres.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">
                                    <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="descripcion" name="descripcion" required="">{{ old('descripcion') }}</textarea>
                                        <div class="invalid-feedback">
                                            Debe agregar una breve descripción.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contenido" class="col-sm-3 col-form-label">Contenido</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="contenido" name="contenido" required="">{{ old('contenido') }}</textarea>
                                        <div class="invalid-feedback">
                                            Debe agregar contenido a la noticia.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="imagen" class="col-sm-3 col-form-label">Imagen</label>
                                    <div class="col-sm-9">
                                        <input type="file" id="imagen" name="imagen" class="form-control">
                                        <div class="invalid-feedback">
                                            Debe agregar una imagen a la noticia.
                                        </div>
                                        <img id="imagen_preview" src="" alt="Imagen" class="img-fluid" style="max-width: 200px;">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group mb-0 row">
                                    <label for="estado" class="col-sm-3 col-form-label">Estado</label>
                                    <div class="col-sm-9">
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="estado" id="estado" value="BORRADOR" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-sun"></i></span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="estado" id="estado" value="PUBLICADO" class="selectgroup-input">
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-moon"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_publicacion" class="col-sm-3 col-form-label">Fecha de Publicación</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="form-control" value="{{ old('fecha_publicacion') }}">
                                        <div class="invalid-feedback">
                                            Debe agregar una fecha de publicación.
                                        </div>
                                    </div>
                                </div>
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

<script>
    $(document).ready(function() {
        $('#titulo').keyup(function() {
            var cadena = $(this).val();
            cadena = cadena.toLowerCase();
            cadena = cadena.replace(/[^a-z0-9]+/g, '-');
            $('#slug').val(cadena);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#fecha_publicacion').val(new Date().toISOString().slice(0, 10));
    });
</script>
<script>
    $(document).ready(function() {
        $('#contenido').summernote();
    });
</script>
<script>
    $(document).ready(function() {
        $('#imagen').change(function() {
            const file = $(this)[0].files[0];
            const fileReader = new FileReader();
            fileReader.onload = function(e) {
                $('#imagen_preview').attr('src', e.target.result);
            }
            fileReader.readAsDataURL(file);
        });
    });
</script>
@endsection