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
                <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="218" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Medical care
                </div>
                <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="255" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Health care
                    SOLUTION
                </div>
                <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="325" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="text-align:left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        <br />do eiusmod tempor incididunt ut labore
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
                <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start" data-x="30" data-y="218" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Family Plans
                </div>
                <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start" data-x="30" data-y="255" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">affordable
                    solutions
                </div>
                <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start" data-x="30" data-y="325" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="text-align:left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        <br />do eiusmod tempor incididunt ut labore
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
                <div class="tp-caption title-bold tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="218" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Research
                </div>
                <div class="tp-caption small-title tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="255" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">cancer
                    researchers honored
                </div>
                <div class="tp-caption paragraph tp-resizeme rs-parallaxlevel-0 fade start" data-x="670" data-y="325" data-speed="1000" data-start="1800" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                    <div style="text-align:left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        <br />do eiusmod tempor incididunt ut labore
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
                    <form name="appointment_form" id="appointment_form" method="post" action="#" onSubmit="return false">
                        <span class="input input--kohana">
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
                            <h5>Operation Theater</h5>
                            <p>
                                If you need a doctor for to consectetuer Lorem ipsum
                                dolor, consectetur adipiscing elit Lorem ipsum dolor,
                                consectetur Ut volutpat eros.
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
                            <h5>Emergency Services</h5>
                            <p>
                                If you need a doctor for to consectetuer Lorem ipsum
                                dolor, consectetur adipiscing elit Lorem ipsum dolor,
                                consectetur Ut volutpat eros.
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
                            <h5>Rehabilitation Center</h5>
                            <p>
                                If you need a doctor for to consectetuer Lorem ipsum
                                dolor, consectetur adipiscing elit Lorem ipsum dolor,
                                consectetur Ut volutpat eros.
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
                            <h5>Qualified Doctors</h5>
                            <p>
                                If you need a doctor for to consectetuer Lorem ipsum
                                dolor, consectetur adipiscing elit Lorem ipsum dolor,
                                consectetur Ut volutpat eros.
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
                        <h2><span>Welcome to</span> Medical Guide</h2>
                        <p>
                            If you need a doctor for to consectetuer Lorem ipsum dolor,
                            consectetur adipiscing elit. Ut volutpat eros adipiscing
                            nonummy.
                        </p>
                    </div>
                </div>
            </div>

            <div id="tabbed-nav">
                <ul>
                    <li><a>Medical Surgery</a></li>
                    <li><a>Departments</a></li>
                    <li><a>Patient life</a></li>
                    <li><a>Baby Birth</a></li>
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
                                    <h4>Washington Medical Science Institute</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat Duis.<br /><br />

                                        Voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam
                                        quis nostrud exercitation.
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
                                    <h4>Medical Guide Departments</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat Duis.<br /><br />

                                        Voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam
                                        quis nostrud exercitation.
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
                                    <h4>Patient Life in Hospital</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat Duis.<br /><br />

                                        Voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam
                                        quis nostrud exercitation.
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
                                    <h4>Latest Technology</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat Duis.<br /><br />

                                        Voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam
                                        quis nostrud exercitation.
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
    <div class="meet-specialists">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <h2><span>Meet Our</span> Specialists</h2>
                        <p>
                            If you need a doctor for to consectetuer Lorem ipsum dolor,
                            consectetur adipiscing elit. Ut volutpat eros adipiscing
                            nonummy.
                        </p>
                    </div>
                </div>
            </div>

            <div id="demo">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div id="owl-demo4" class="owl-carousel">
                                <div class="post item">
                                    <div class="gallery-sec">
                                        <div class="image-hover img-layer-slide-left-right">
                                            <img src="{{ asset('img/clinica/team-member1.jpg') }}" alt="jtyer">
                                            <div class="layer">
                                                <a href="#."><i class="fa fa-facebook"></i></a>
                                                <a href="#."><i class="fa fa-twitter"></i></a>
                                                <a href="#."><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detail">
                                        <h6>Dr. Andrew Bert</h6>
                                        <span>Outpatient Surgery</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Donec nec eros eget nisl fringilla commodo.
                                        </p>
                                        <a href="team-member-detail.html">- View Profile</a>
                                    </div>
                                </div>
                                <div class="post item">
                                    <div class="gallery-sec">
                                        <div class="image-hover img-layer-slide-left-right">
                                            <img src="{{ asset('img/clinica/team-member2.jpg') }}" alt="hthtfh">
                                            <div class="layer">
                                                <a href="#."><i class="fa fa-facebook"></i></a>
                                                <a href="#."><i class="fa fa-twitter"></i></a>
                                                <a href="#."><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detail">
                                        <h6>Dr. Sara Stefon</h6>
                                        <span>Cardiologist</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Donec nec eros eget nisl fringilla commodo.
                                        </p>
                                        <a href="team-member-detail.html">- View Profile</a>
                                    </div>
                                </div>
                                <div class="post item">
                                    <div class="gallery-sec">
                                        <div class="image-hover img-layer-slide-left-right">
                                            <img src="{{ asset('img/clinica/team-member3.jpg') }}" alt="fsr">
                                            <div class="layer">
                                                <a href="#."><i class="fa fa-facebook"></i></a>
                                                <a href="#."><i class="fa fa-twitter"></i></a>
                                                <a href="#."><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detail">
                                        <h6>Dr. Wahab Apple</h6>
                                        <span>Heart Specialist</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Donec nec eros eget nisl fringilla commodo.
                                        </p>
                                        <a href="team-member-detail.html">- View Profile</a>
                                    </div>
                                </div>

                                <div class="post item">
                                    <div class="gallery-sec">
                                        <div class="image-hover img-layer-slide-left-right">
                                            <img src="{{ asset('img/clinica/team-member4.jpg') }}" alt="bfbff">
                                            <div class="layer">
                                                <a href="#."><i class="fa fa-facebook"></i></a>
                                                <a href="#."><i class="fa fa-twitter"></i></a>
                                                <a href="#."><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detail">
                                        <h6>Dr. Mecan smith</h6>
                                        <span>Heart Specialist</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Donec nec eros eget nisl fringilla commodo.
                                        </p>
                                        <a href="team-member-detail.html">- View Profile</a>
                                    </div>
                                </div>

                                <div class="post item">
                                    <div class="gallery-sec">
                                        <div class="image-hover img-layer-slide-left-right">
                                            <img src="{{ asset('img/clinica/team-member5.jpg') }}" alt="ddfd">
                                            <div class="layer">
                                                <a href="#."><i class="fa fa-facebook"></i></a>
                                                <a href="#."><i class="fa fa-twitter"></i></a>
                                                <a href="#."><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="detail">
                                        <h6>Dr. Jack Bravo</h6>
                                        <span>Heart Specialist</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Donec nec eros eget nisl fringilla commodo.
                                        </p>
                                        <a href="team-member-detail.html">- View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Specialists-->

    <!--Start Doctor Quote-->
    <div class="dr-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="quote">"Meeting the challenges of an ever-changing healthcare
                        environment."</span>
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
                        <h2><span>Latest News from</span> Medical guide</h2>
                        <p>
                            If you need a doctor for to consectetuer Lorem ipsum dolor,
                            consectetur adipiscing elit. Ut volutpat eros adipiscing
                            nonummy.
                        </p>
                    </div>
                </div>
            </div>

            <div id="latest-news">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="post item">
                                    <img class="lazyOwl" src="{{ asset('img/clinica/news-img1.jpg') }}" alt="grhg">
                                    <div class="detail">
                                        <img src="{{ asset('img/clinica/news-dr1.jpg') }}" alt="gggg">
                                        <h4>
                                            <a href="news-detail.html">Center for Medical</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit eros...
                                        </p>
                                        <span><i class="fa fa-clock-o"></i> Apr 22, 2016</span>
                                        <span class="comment"><a href="news-detail.html"><i class="fa fa-comment"></i> 5 Comments</a></span>
                                    </div>
                                </div>
                                <div class="post item">
                                    <img class="lazyOwl" src="{{ asset('img/clinica/news-img2.jpg') }}" alt="rerer">
                                    <div class="detail">
                                        <img src="{{ asset('img/clinica/news-dr2.jpg') }}" alt="yuyu">
                                        <h4>
                                            <a href="news-detail.html">Laboratory Tests</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit eros...
                                        </p>
                                        <span><i class="icon-clock3"></i> Apr 09, 2016</span>
                                        <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 3 Comments</a></span>
                                    </div>
                                </div>

                                <div class="post item">
                                    <img class="lazyOwl" src="{{ asset('img/clinica/news-img3.jpg') }}" alt="oio">
                                    <div class="detail">
                                        <img src="{{ asset('img/clinica/news-dr1.jpg') }}" alt="oit">
                                        <h4>
                                            <a href="news-detail.html">Research Center</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit eros...
                                        </p>
                                        <span><i class="icon-clock3"></i> Mar 28, 2016</span>
                                        <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                                    </div>
                                </div>

                                <div class="post item">
                                    <img class="lazyOwl" src="{{ asset('img/clinica/news-img4.jpg') }}" alt="grgr">
                                    <div class="detail">
                                        <img src="{{ asset('img/clinica/news-dr2.jpg') }}" alt="grgggg">
                                        <h4><a href="news-detail.html">Child Birth</a></h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit eros...
                                        </p>
                                        <span><i class="icon-clock3"></i> Mar 15, 2016</span>
                                        <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                                    </div>
                                </div>

                                <div class="post item">
                                    <img class="lazyOwl" src="{{ asset('img/clinica/news-img5.jpg') }}" alt="eeew">
                                    <div class="detail">
                                        <img src="{{ asset('img/clinica/news-dr2.jpg') }}" alt="grgrgee">
                                        <h4>
                                            <a href="news-detail.html">Special Treatment</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit eros...
                                        </p>
                                        <span><i class="icon-clock3"></i> Mar 04, 2016</span>
                                        <span class="comment"><a href="news-detail.html"><i class="icon-icons206"></i> 11 Comments</a></span>
                                    </div>
                                </div>
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
                        <h2><span>What Our Patients Say</span> About Us</h2>
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
                                        <span class="name">Elebana Front</span>
                                        <span class="patient">Heart Patient</span>
                                        <div class="height30"></div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut
                                            laoreet dolore magna aliquam erat volutpat. vitae
                                            felis pretium, euismod ipsum nec, placerat turpis.
                                            Aenean eu gravida arcu, et consectetur orci Quisque
                                            posuere dolor in malesuada fermentum.
                                        </p>
                                        <div class="height35"></div>
                                    </div>
                                    <div class="testi-sec">
                                        <img src="{{ asset('img/clinica/testimonial-img2.jpg') }}" alt="rety">
                                        <div class="height10"></div>
                                        <span class="name">Johny Bravo</span>
                                        <span class="patient">Hair Patient</span>
                                        <div class="height30"></div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut
                                            laoreet dolore magna aliquam erat volutpat. vitae
                                            felis pretium, euismod ipsum nec, placerat turpis.
                                            Aenean eu gravida arcu, et consectetur Quisque
                                            posuere dolor in malesuada fermentum sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore
                                            magna aliquam erat volutpat.
                                        </p>
                                    </div>
                                    <div class="testi-sec">
                                        <img src="{{ asset('img/clinica/testimonial-img3.jpg') }}" alt="oipp">
                                        <div class="height10"></div>
                                        <span class="name">Rubica Noi</span>
                                        <span class="patient">Skin Patient</span>
                                        <div class="height30"></div>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh euismod tincidunt ut
                                            laoreet dolore magna aliquam erat volutpat. vitae
                                            felis pretium, euismod ipsum nec, placerat turpis.
                                            Aenean eu gravida arcu, et consectetur orci Quisque
                                            posuere dolor in malesuada fermentum.
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