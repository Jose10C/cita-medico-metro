@extends('layouts.guest')

@section('title', 'Inicio')

@section('content')

<!-- Horarios -->
<div class="container">
    <div class="time-table-sec">
        <ul id="accordion2" class="accordion2">
            <li>
                <ul class="submenu time-table">
                    <li class="tit">
                        <h5>Nuestros Horarios</h5>
                    </li>
                    <li>
                        <span class="day">Lunes - Viernes</span>
                        <span class="divider">-</span>
                        <span class="time">8:00 - 16:00</span>
                    </li>
                    <li>
                        <span class="day">Sábado</span>
                        <span class="divider">-</span>
                        <span class="time">9:00 - 13:00</span>
                    </li>
                    <li>
                        <span class="day">Sunday</span>
                        <span class="divider">-</span>
                        <span class="time">8:00 - 12.00</span>
                    </li>
                </ul>
                <div class="link">
                    <img class="time-tab" src="{{ asset('img/clinica/timetable-menu.png') }}" alt="Clinica Metro">
                </div>
            </li>
        </ul>
    </div>
</div>

<!--Start Banner-->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul> <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <img src="{{ asset('img/clinica/slides/banner-img8.jpg') }}" alt="imagen" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <div class="tp-caption customin customout rs-parallaxlevel-0" data-x="right" data-y="188" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 4;"><img class="transprint" src="{{ asset('img/clinica/slides/transprint-bg.png') }}" alt="transicion">
                </div>
                <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="218" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Medicina General
                </div>
                <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="255" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Especialistas en Medicina General</div>
                <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="325" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="text-align:left;">Relize su reserva para medicina general, con nuestros
                        <br />especialistas en los diferentes áreas.
                    </div>
                </div>
                <div class="tp-caption banner-button tp-resizeme rs-parallaxlevel-0  fade start" data-x="670" data-y="402" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; border-radius: 5px;">
                    <div style="text-align:left; background:#525866; border-radius: 5px;">
                        <a href="{{ route('create-cita') }}" class="read-more" style=" line-height: initial; color: #fff; text-transform: uppercase; font-weight: 500; padding: 12px 36px; display: inline-block; font-size: 18px; ">Reservar Cita</a>
                    </div>
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <img src="{{ asset('img/clinica/slides/banner-img9.jpg') }}" alt="iamgen 2" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <div class="tp-caption customin customout rs-parallaxlevel-0" data-x="left" data-y="188" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 4;"><img style="border-bottom:solid 6px #02adc6;" src="{{ asset('img/clinica/slides/transprint-bg.png') }}" alt="no se">
                </div>
                <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start" data-x="30" data-y="218" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Atención para toda la familia</div>
                <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start" data-x="30" data-y="255" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">affordable
                    Servicio de Primer Nivel
                </div>
                <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start" data-x="30" data-y="325" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="text-align:left;">Nuestros servicios en la salud estan a su alcance, con
                        <br />la mejor atención para toda la familia.
                    </div>
                </div>
                <div class="tp-caption banner-button tp-resizeme rs-parallaxlevel-0  fade start" data-x="30" data-y="402" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; border-radius: 5px;">
                    <div style="text-align:left; background:#525866; border-radius: 5px;">
                        <a href="patient-and-family.html" class="read-more" style=" line-height: initial; color: #fff; text-transform: uppercase; font-weight: 500; padding: 12px 36px; display: inline-block; font-size: 18px; ">Reservar Cita</a>
                    </div>
                </div>
            </li>

            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <img src="{{ asset('img/clinica/slides/banner-img10.jpg') }}" alt="knwiod" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <div class="tp-caption customin customout rs-parallaxlevel-0" data-x="right" data-y="188" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="700" data-start="1200" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 4;"><img style="border-bottom:solid 6px #02adc6;" src="{{ asset('img/clinica/slides/transprint-bg.png') }}" alt="scscsc">
                </div>
                <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="218" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Reservar Cita
                </div>
                <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="255" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Atecion para prevencion del cancer
                </div>
                <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="325" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="text-align:left;">Venga a realizar su examen y evite
                        <br />futuros problemas en su salud y prevenga el cancer.
                    </div>
                </div>
                <div class="tp-caption banner-button tp-resizeme rs-parallaxlevel-0  fade start" data-x="670" data-y="402" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; border-radius: 5px;">
                    <div style="text-align:left; background:#525866; border-radius: 5px;">
                        <a href="procedures.html" class="read-more" style=" line-height: initial; color: #fff; text-transform: uppercase; font-weight: 500; padding: 12px 36px; display: inline-block; font-size: 18px; ">Reservar Cita</a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--End Banner-->

<!--Start Make Cita-->
<div class="make-appointment">
    <div class="container">
        <ul id="accordion" class="accordion">
            <li>
                <div class="link">
                    <i class="fa fa-caret-square-o-down"></i><span class="appointment-title">RESERVAR UNA CITA</span>
                    <i class="icon-chevron-down"></i>
                </div>
                <section class="bgcolor-3">
                    <p class="error" id="error" style="display: none"></p>
                    <p class="success" id="success" style="display: none"></p>
                    <form method="POST" action="#" onSubmit="return false">
                        @csrf
                        <span class="input input--kohana">
                            <select name="especialidad_id" id="especialidad" class="form-control select2" required="">
                                <option value="">-Seleccionar Especialidad</option>
                            </select>
                            <input class="input__field input__field--kohana" type="text" id="input-29" name="input-29" />
                            <label class="input__label input__label--kohana" for="input-29">
                                <i class="icon-user6 icon icon--kohana"></i>
                                <span class="input__label-content input__label-content--kohana">Nombres</span>
                            </label>
                        </span>
                        <span class="input input--kohana">
                            <input class="input__field input__field--kohana" type="text" id="input-30" name="input-30" />
                            <label class="input__label input__label--kohana" for="input-30">
                                <i class="icon-dollar icon icon--kohana"></i>
                                <span class="input__label-content input__label-content--kohana">Correo</span>
                            </label>
                        </span>
                        <span class="input input--kohana last">
                            <input class="input__field input__field--kohana" type="text" id="input-31" name="input-31" />
                            <label class="input__label input__label--kohana" for="input-31">
                                <i class="icon-phone5 icon icon--kohana"></i>
                                <span class="input__label-content input__label-content--kohana">Nro Celular</span>
                            </label>
                        </span>

                        <span class="input input--kohana">
                            <input class="input__field input__field--kohana" type="text" id="datepicker" placeholder="Fecha de Citas" onClick="" name="datepicker" />
                        </span>

                        <span class="input input--kohana message">
                            <input class="input__field input__field--kohana" type="text" id="textarea" name="textarea" />
                            <label class="input__label input__label--kohana" for="textarea">
                                <i class="icon-new-message icon icon--kohana"></i>
                                <span class="input__label-content input__label-content--kohana">Mensaje</span>
                            </label>
                        </span>

                        <input name="submit" type="submit" value="Reservar" onClick="validateAppointment();" />
                    </form>
                </section>
            </li>
        </ul>
    </div>
</div>
<!--End Make Cita-->

<!--Start Content-->
<div class="content">
    <!--Start Services-->
    <div class="services-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-sec">
                        <div class="icon">
                        <i class='fa fa-bed'></i>
                        </div>

                        <div class="detail">
                            <h5>Laboratorio de Operaciones</h5>
                            <p>
                            Contamos con un moderno laboratorio de operaciones para
                            garantizar la más alta calidad en nuestros 
                            procedimientos médicos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-sec">
                        <div class="icon">
                            <i class="fa fa-ambulance"></i>
                        </div>

                        <div class="detail">
                            <h5>Servicios de Emergencia</h5>
                            <p>
                            Estamos aquí para brindarte atención inmediata y de calidad en
                            situaciones de emergencia. Nuestros servicios de emergencia
                            están disponibles las 24 horas del día, los 7 días de la semana.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-sec">
                        <div class="icon">
                            <i class="fa fa-wheelchair-alt"></i>
                        </div>

                        <div class="detail">
                            <h5>Centro de Rehabilitación</h5>
                            <p>
                            En nuestro Centro de Rehabilitación, te ofrecemos un espacio dedicado a tu recuperación y bienestar. Con un equipo multidisciplinario de especialistas en rehabilitación, diseñamos programas personalizados.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-sec">
                        <div class="icon">
                            <i class="fa fa-user-md"></i>
                        </div>

                        <div class="detail">
                            <h5>Medicos Calificados</h5>
                            <p>
                            En nuestro centro, contamos con una destacada selección de médicos calificados y experimentados, comprometidos con brindarte la mejor atención médica posible.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Services-->

    <!--Start Welcome-->
    <div class="welcome dark-back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <h2><span>Bienvenidos a</span> Especialidades Medicas</h2>
                        <p>
                        Descubre algunos de los servicios frecuentes que ofrecemos en nuestro centro de salud. Desde consultas médicas generales hasta tratamientos especializados, estamos aquí para atender tus necesidades de salud de manera integral.
                        </p>
                    </div>
                </div>
            </div>

            <div id="tabbed-nav">
                <ul>
                    <li><a>Cirugía médica</a></li>
                    <li><a>Departamentos</a></li>
                    <li><a>Vida del paciente</a></li>
                    <li><a>Nacimiento del bebé</a></li>
                </ul>

                <div>
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="welcome-serv-img">
                                    <img src="{{ asset('img/clinica/services-img2.jpg') }}" alt="dsdsdsd">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail">
                                    <h4>Cirujía Médica</h4>
                                    <p>
                                    En C.S. Metropolitano, ofrecemos servicios de cirugía médica de vanguardia, respaldados por un equipo de cirujanos altamente calificados y experimentados. Nuestro compromiso es brindar atención quirúrgica de la más alta calidad, utilizando tecnología de punta y técnicas avanzadas para garantizar resultados óptimos para nuestros pacientes. Ya sea que necesites una cirugía de rutina o un procedimiento más complejo, puedes confiar en nuestro equipo para proporcionar cuidados seguros y efectivos en todas las etapas de tu tratamiento.
                                    </p>
                                    <a href="about-us.html">Reservar Cita</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="welcome-serv-img">
                                    <img src="{{ asset('img/clinica/services-img3.jpg') }}" alt="dsdsdsd">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail">
                                    <h4>Departamentos</h4>
                                    <p>
                                    Nuestros departamentos médicos están diseñados para ofrecer una atención integral y especializada en diversas áreas de la medicina. Desde cardiología hasta neurología, contamos con un equipo de profesionales altamente capacitados y especializados en cada campo. Nuestro objetivo es proporcionar a nuestros pacientes un cuidado completo y personalizado, utilizando los últimos avances médicos y tecnológicos. Ya sea que necesites atención preventiva, diagnóstico o tratamiento, nuestros departamentos médicos están aquí para atender todas tus necesidades de salud con el más alto nivel de calidad y atención.
                                    </p>
                                    <a href="about-us.html">Reservar Cita</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="welcome-serv-img">
                                    <img src="{{ asset('img/clinica/services-img1.jpg') }}" alt="sieueis">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail">
                                    <h4>Vida de Nuestros Pacientes</h4>
                                    <p>
                                    Nuestro enfoque en la vida del paciente va más allá del tratamiento médico; nos preocupamos por brindar un ambiente acogedor y comprensivo que promueva el bienestar integral. Desde el momento en que llegas, nos esforzamos por hacer tu estadía lo más cómoda y tranquila posible. Nuestro equipo de profesionales médicos y de apoyo está dedicado a cuidar no solo de tu salud física, sino también de tu bienestar emocional y mental. Te ofrecemos programas de apoyo, educación sobre la salud y servicios personalizados para ayudarte a navegar por tu experiencia médica con confianza y comodidad. En cada paso del camino, estamos aquí para apoyarte y brindarte la atención que mereces.
                                    </p>
                                    <a href="about-us.html">Reservar Cita</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="welcome-serv-img">
                                    <img src="{{ asset('img/clinica/services-img4.jpg') }}" alt="fdfda">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail">
                                    <h4>Equipos de Ultima Tecnología</h4>
                                    <p>
                                    Nuestra institución médica está equipada con la última tecnología disponible en el campo de la salud. Nos comprometemos a proporcionar a nuestros pacientes acceso a equipos de vanguardia que permitan diagnósticos precisos y tratamientos efectivos. Desde tecnología de imágenes de alta resolución hasta sistemas de cirugía asistida por robot, estamos constantemente actualizando nuestros equipos para garantizar que nuestros pacientes reciban la mejor atención posible. Con nuestro compromiso con la innovación tecnológica, puedes confiar en que estás recibiendo atención médica de la más alta calidad en todo momento.
                                    </p>
                                    <a href="about-us.html">Reservar Cita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Welcome-->

    <!--Start Specialists-->

    <!--End Specialists-->

    <!--Start Doctor Quote-->
    <div class="dr-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="quote">"Afrontar los desafíos de un entorno sanitario en constante cambio."</span>
                    <span class="name">- Dr. Jonathan Gobi</span>
                </div>
            </div>
        </div>
    </div>
    <!--End Doctor Quote-->

    <!--Start Latest News-->
    <div class="latest-news dark-back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <h2><span>Revisa nuestra noticias</span> Recientes </h2>
                        <p>
                            Como centro de salud nosotros compartimos con ustedes sobre
                            las actividades que realiamos como campañas médicas, capacitaciones,
                            labores sociales y más contenido.
                        </p>
                    </div>
                </div>
            </div>
            <div id="latest-news">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div id="owl-demo" class="owl-carousel">
                                @foreach($noticias as $noticia)
                                <div class="post item">
                                    <img class="lazyOwl" src="{{ asset($noticia->imagen) }}" alt="rerer">
                                    <div class="detail">
                                        <img src="{{ asset('img/clinica/news-dr1.jpg') }}" alt="yuyu">
                                        <h4>
                                            <a href="{{ url ('noticias/noticias-nuevas/'.$noticia->slug) }}">{{ $noticia->titulo }}</a>
                                        </h4>
                                        <p>
                                            {{ $noticia->descripcion }}
                                        </p>
                                        <span><i class="icon-clock3"></i> {{ $noticia->created_at }}</span>
                                        <span class="comment"><a href="{{ url ('noticias/noticias-nuevas/'.$noticia->slug) }}"><i class="icon-icons206"></i> 3 Comments</a></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Latest News-->

    <!--Start Testimonials-->
    <div class="patients-testi dark-testi">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title main-title2">
                        <h2><span>Lo que nuestros pacientes</span> comentas sobre nosotros</h2>
                    </div>
                </div>
            </div>

            <div id="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="span12">
                                <div id="owl-demo2" class="owl-carousel">
                                    <div class="testi-sec">
                                        <img src="{{ asset('img/clinica/testimonial-img1.jpg') }}" alt="tyytjk">
                                        <div class="height10"></div>
                                        <span class="name">Eliana Gimenez</span>
                                        <span class="patient">Paciente</span>
                                        <div class="height30"></div>
                                        <p>
                                        Me siento increíblemente agradecido por el excepcional equipo médico en este centro de salud. Desde el primer día, me sentí escuchado, comprendido y bien cuidado. Recomiendo encarecidamente este centro a cualquiera que busque atención médica de primera calidad con un toque humano.
                                        </p>
                                        <div class="height35"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End Testimonials-->
</div>
<!--End Content-->
@endsection