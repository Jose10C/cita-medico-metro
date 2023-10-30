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
    <div id="app">
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
        <div class="main-wrapper container">
            <!-- Content -->
            <div class="main-content">
                <div class="section-body">
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
                                            <div class="text-job text-muted">Doctor Especialista}</div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('Empezaste a seguir a {{$medico->name}}');" data-unfollow-action="alert('Dejaste de seguir a {{$medico->name}}');">Agendar Cita</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('img/avatar/avatar-2.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">2. Kusnaedi</div>
                                            <div class="text-job text-muted">Mobile Developer</div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('user2 followed');" data-unfollow-action="alert('user2 unfollowed');">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('img/avatar/avatar-3.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">3. Bagus Dwi Cahya</div>
                                            <div class="text-job text-muted">UI Designer</div>
                                            <div class="user-cta">
                                                <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('img/avatar/avatar-4.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">4. Wildan Ahdian</div>
                                            <div class="text-job text-muted">Project Manager</div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">5. Deden Febriansyah</div>
                                            <div class="text-job text-muted">IT Support</div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('img/avatar/avatar-2.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">6. Deden Febriansyah</div>
                                            <div class="text-job text-muted">IT Support</div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('img/avatar/avatar-4.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">7. Deden Febriansyah</div>
                                            <div class="text-job text-muted">IT Support</div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="user-item">
                                        <img alt="image" src="{{ asset('img/avatar/avatar-4.png') }}" class="img-fluid">
                                        <div class="user-details">
                                            <div class="user-name">8. Omer Frederick</div>
                                            <div class="text-job text-muted">DJ Karaoke</div>
                                            <div class="user-cta">
                                                <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
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