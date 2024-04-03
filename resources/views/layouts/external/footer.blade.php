<!--Start Footer-->
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="emergency">
                    <i class="fa fa-tty"></i>
                    <span class="text">Emergencias</span>
                    <span class="number">(083)-322-312</span>
                    <img src="{{ asset('img/clinica/emergency-divider.png') }}" alt="iii">
                </div>
            </div>
        </div>

        <div class="main-footer">
            <div class="row">
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="title">
                            <h5>Menú de Pagina</h5>
                        </div>

                        <div class="detail">
                            <ul>
                                <li><a href="{{ route('lista.medicos') }}">Incio</a></li>
                                <li><a href="{{ route('nosotros.index') }}">Nosotros</a></li>
                                <li><a href="{{ route('all.noticias') }}">Noticias</a></li>
                                <li><a href="{{ route('servicios.index') }}">Servicios</a></li>
                                <li><a href="{{ route('contact.index') }}">Contactanos</a></li>
                                <li><a href="{{ route('login') }}">Inciar Sesion</a></li>
                                <li><a href="{{ route('register') }}">Reservar Cita</a></li>
                                <li><a href="{{ route('register') }}">Registrarse</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="newsletter">
                        <div class="title">
                            <h5>REGISTRARSE</h5>
                        </div>

                        <div class="detail">
                            <div class="signup-text">
                                <i class="icon-dollar"></i>
                                <span>Regístrate con tu nombre y correo electrónico para realizar citas médicas</span>
                            </div>

                            <div class="form">
                                <p class="subscribe_success" id="subscribe_success" style="display: none"></p>
                                <p class="subscribe_error" id="subscribe_error" style="display: none"></p>

                                <form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
                                    <input type="text" data-delay="300" placeholder="Nombre" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" />
                                    <input type="text" data-delay="300" placeholder="Correo" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" />
                                    <input name="Subscribe" type="submit" value="Reservar Cita" onClick="validateSubscription();" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-touch">
                        <div class="title">
                            <h5>CONTACTOS</h5>
                        </div>

                        <div class="detail">
                            <div class="get-touch">
                                <span class="text">Centro de Salud Metropolitano - Abancay </span>

                                <ul>
                                    <li>
                                        <i class="icon-location"></i>
                                        <span>Estamos Ubicados en:  Jr. Huancavelica - Abancay, Apurimac</span>
                                    </li>
                                    <li>
                                        <i class="icon-phone4"></i>
                                        <span>(083)-322-312</span>
                                    </li>
                                    <li>
                                        <a href="#."><i class="icon-dollar"></i>
                                            <span>contactos@metropolitano.com</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyrights">
                    Copyright &copy; Metropolitano - Abancay 2023  {{config('app.name')}}
                    </span>
                </div>

                <div class="col-md-6">
                    <div class="social-icons">
                        <a href="#." class="fb"><i class="icon-euro"></i></a>
                        <a href="#." class="tw"><i class="icon-yen"></i></a>
                        <a href="#." class="gp"><i class="icon-google-plus"></i></a>
                        <a href="#." class="vimeo"><i class="icon-vimeo4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Footer-->
<a href="#0" class="cd-top"></a>