<!--Start PreLoader-->
<!-- <div id="preloader">
            <div id="status">&nbsp;</div>
            <div class="loader">
                <p>Cargando...</p>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> -->
<!--End PreLoader-->
<!--Start Cabecera-->
<div id="header-1">
    <!--Start Top Bar-->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <span> <i class="fa fa-home"></i> Av. Diaz Varcenas 293 - Abancay</span>
                </div>
                <div class="col-md-7">
                    <div class="get-touch">
                        <ul>
                            <li>
                                <a><i class="fa fa-phone"></i> (084)445-323</a>
                            </li>
                            <li>
                                <a href="#."><i class="fa fa-envelope"></i> contactos@metropolitano.com</a>
                            </li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="#." class="fb"><i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#." class="tw"><i class="fa fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#." class="gp"><i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Top Bar End-->
    <style>
        .logo-container {
            position: absolute;
            top: -20px;
            left: 0;
            z-index: 1000;
            /* Asegura que la imagen esté por encima del contenido */
        }
    </style>
    <!--Start Header-->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-container">
                        <a href="/" class="logo"><img src="{{ asset('img/config/logo-claro-metropolitano.png')}}" style="max-width: 130px; height: 130px; max-height: 200px;" alt="Logo Clinica Metropolitano Abancay" title="Logo Clinica Metropolitano Abancay"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <nav class="menu-2">
                        <ul class="nav wtf-menu">
                            <li class="item-select parent"><a href="/">Inicio</a></li>
                            <li class="parent">
                                <a href="#.">Nosotros</a>
                                <ul class="submenu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="about-us2.html">About Us 2</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#.">Procesos</a>
                                <ul class="submenu">
                                    <li class="select-menu">
                                        <a href="index.html">Home Page 1</a>
                                    </li>
                                    <li><a href="index2.html">Home Page 2</a></li>
                                    <li><a href="index3.html">Home Page 3</a></li>
                                    <li><a href="index4.html">Home Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class="parent">
                                <a href="#.">Galería</a>
                                <ul class="submenu">
                                    <li class="parent">
                                        <a href="#">Simple Gallery</a>
                                        <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li>
                                                <a href="gallery-simple-two.html">Columns Two</a>
                                            </li>
                                            <li>
                                                <a href="gallery-simple-three.html">Columns Three</a>
                                            </li>
                                            <li>
                                                <a href="gallery-simple-four.html">Columns Four</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#">Nimble Gallery</a>
                                        <i class="icon-chevron-small-right"></i>
                                        <ul class="submenu">
                                            <li>
                                                <a href="gallery-nimble-two.html">Columns Two</a>
                                            </li>
                                            <li>
                                                <a href="gallery-nimble-three.html">Columns Three</a>
                                            </li>
                                            <li>
                                                <a href="gallery-nimble-four.html">Columns Four</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="parent">
                                <a href="#.">Novedades</a>
                                <ul class="submenu">
                                    <li><a href="news-sidebar.html">Sidebar</a></li>
                                    <li><a href="news-text.html">Text-Based</a></li>
                                    <li><a href="news-single.html">Single Post</a></li>
                                    <li><a href="news-double.html">Double Post</a></li>
                                    <li><a href="news-masonary.html">Masonary</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Servicios</a></li>
                            <li class="parent">
                                <a href="#.">Contáctanos</a>
                                <ul class="submenu">
                                    <li><a href="contact-us.html">Contact-Us One</a></li>
                                    <li><a href="contact-us2.html">Contact-Us Two</a></li>
                                </ul>
                            </li>
                            @if (Route::has('login'))
                            @auth
                            <li class="parent">
                                <a href="{{ url('/home') }}">Admin</a>
                            </li>
                            @else
                            <li class="parent">
                                <a href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                            <!-- <li class="parent">
                                        <a href="{{ route('register') }}" >Register</a>
                                    </li> -->
                            @endif
                            @endauth
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Mobile Menu Start -->
<div class="container">
    <div id="page">
        <header class="header">
            <a href="#menu"></a>
        </header>
        <nav id="menu">
            <ul>
                <li class="select">
                    <a href="#.">InicioMovie</a>
                    <ul>
                        <li class="select">
                            <a href="index.html">Pagina principal</a>
                        </li>
                        <li><a href="index2.html">Home Page 2</a></li>
                        <li><a href="index3.html">Home Page 3</a></li>
                        <li><a href="index4.html">Home Page 4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#.">Nosotros</a>
                    <ul>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="about-us2.html">About Us 2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#.">Pages</a>
                    <ul>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="services2.html">Services Two</a></li>
                        <li><a href="appointment.html">Appointment</a></li>
                        <li><a href="departments.html">Departments</a></li>
                        <li>
                            <a href="patient-and-family.html">Patient and Family</a>
                        </li>
                        <li><a href="team-members.html">Team Members One</a></li>
                        <li><a href="team-members2.html">Team Members Two</a></li>
                        <li><a href="research.html">Research</a></li>
                        <li><a href="tables.html">Pricing tabels</a></li>
                    </ul>
                </li>
                <li><a href="procedures.html">Procedures</a></li>
                <li>
                    <a href="#.">Gallery</a>
                    <ul>
                        <li>
                            <a href="#.">Simple Gallery</a>
                            <ul>
                                <li><a href="gallery-simple-two.html">Columns Two</a></li>
                                <li>
                                    <a href="gallery-simple-three.html">Columns Three</a>
                                </li>
                                <li>
                                    <a href="gallery-simple-four.html">Columns Four</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#.">Nimble Gallery</a>
                            <ul>
                                <li><a href="gallery-nimble-two.html">Columns Two</a></li>
                                <li>
                                    <a href="gallery-nimble-three.html">Columns Three</a>
                                </li>
                                <li>
                                    <a href="gallery-nimble-four.html">Columns Four</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#.">Novedades</a>
                    <ul>
                        <li><a href="news-sidebar.html">Sidebar</a></li>
                        <li><a href="news-text.html">Text-Based</a></li>
                        <li><a href="news-single.html">Single Post</a></li>
                        <li><a href="news-double.html">Double Post</a></li>
                        <li><a href="news-masonary.html">Masonary</a></li>
                    </ul>
                </li>
                <li><a href="shop.html">Shop</a></li>
                <li>
                    <a href="#.">Contact Us</a>
                    <ul>
                        <li><a href="contact-us.html">Contact-Us One</a></li>
                        <li><a href="contact-us2.html">Contact-Us Two</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- Mobile Menu End -->