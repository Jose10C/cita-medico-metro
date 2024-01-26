<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> @yield('title','Bienvenidos') &mdash; {{ config('app.name') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">

</head>

<body class="layout-3">

    <div class="section-body" style="background-color: rebeccapurple;">
        
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('buscar.cita') }}" method="GET">
                @csrf
                <div class="form-group">
                    <input type="text" name="dni" id="dni" placeholder="Ingrese su DNI">
                    <input type="text" name="codigo_cita" id="codigo_cita" placeholder=" Ingrese el código de su cita">
                </div>
                <div>
                    <button type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <!-- Lista de medicos -->
        <div class="card card-danger">
            <div class="card-header">
                <h4>Users</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="owl-carousel owl-theme" id="users-carousel">
                    @foreach ($medicos as $medico)
                    <div>
                        <div class="user-item">
                            <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="img-fluid">
                            <div class="user-details">
                                <div class="user-name">{{$medico->id}}. {{$medico->name}} {{$medico->lastname}}</div>
                                <div class="text-job text-muted">Doctor Especialista</div>
                                <div class="user-cta">
                                    <button class="btn btn-primary follow-btn" data-follow-action="alert('Empezaste a seguir a {{$medico->name}}');" data-unfollow-action="alert('Dejaste de seguir a {{$medico->name}}');">Agendar Cita</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="{{asset('modules/jquery.min.js')}}"></script>
    <script src="{{asset('modules/popper.js')}}"></script>
    <script src="{{asset('modules/tooltip.js')}}"></script>
    <script src="{{asset('modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('modules/moment.min.js')}}"></script>
    <script src="{{asset('js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-user.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>