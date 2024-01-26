<!--Start Footer-->
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="emergency">
                    <i class="fa fa-tty"></i>
                    <span class="text">Emergencias</span>
                    <span class="number">1-300-400-8211</span>
                    <img src="{{ asset('img/clinica/emergency-divider.png') }}" alt="iii">
                </div>
            </div>
        </div>

        <div class="main-footer">
            <div class="row">
                <div class="col-md-3">
                    <div class="useful-links">
                        <div class="title">
                            <h5>Medical guide</h5>
                        </div>

                        <div class="detail">
                            <ul>
                                <li><a href="#.">Home</a></li>
                                <li><a href="#.">About Us</a></li>
                                <li><a href="#.">Services</a></li>
                                <li><a href="#.">Departments</a></li>
                                <li><a href="#.">Timetable</a></li>
                                <li><a href="#.">Why Us</a></li>
                                <li><a href="#.">Specilaties</a></li>
                                <li><a href="#.">Contact Us</a></li>
                                <li><a href="#.">Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="title">
                        <h5>LATEST TWEETS</h5>
                    </div>

                    <div class="detail">
                        <div class="tweets">
                            <div class="icon">
                                <i class="icon-yen"></i>
                            </div>

                            <div class="text">
                                <p>
                                    <a href="#.">@Rotography</a> Please kindly use Support
                                    Forum: <a href="#.">Medical.co.uk</a>
                                </p>
                                <span>3 days ago</span>
                            </div>
                        </div>

                        <div class="tweets">
                            <div class="icon">
                                <i class="icon-yen"></i>
                            </div>

                            <div class="text">
                                <p>
                                    A quick launcher for WordPress dashboard
                                    <a href="#.">@Medical</a>
                                </p>
                                <span>about a week ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="newsletter">
                        <div class="title">
                            <h5>NEWSLETTER</h5>
                        </div>

                        <div class="detail">
                            <div class="signup-text">
                                <i class="icon-dollar"></i>
                                <span>Sign up with your name and email to get updates fresh
                                    updates.</span>
                            </div>

                            <div class="form">
                                <p class="subscribe_success" id="subscribe_success" style="display: none"></p>
                                <p class="subscribe_error" id="subscribe_error" style="display: none"></p>

                                <form name="subscribe_form" id="subscribe_form" method="post" action="#" onSubmit="return false">
                                    <input type="text" data-delay="300" placeholder="Your Name" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" />
                                    <input type="text" data-delay="300" placeholder="Email Address" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" />
                                    <input name="Subscribe" type="submit" value="Subscribe" onClick="validateSubscription();" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="get-touch">
                        <div class="title">
                            <h5>GET IN TOUCH</h5>
                        </div>

                        <div class="detail">
                            <div class="get-touch">
                                <span class="text">Medical Bibendum auctor, to consequat ipsum, nec
                                    sagittis sem</span>

                                <ul>
                                    <li>
                                        <i class="icon-location"></i>
                                        <span>Medical Ltd, Manhattan 1258, New York, USA
                                            Lahore</span>
                                    </li>
                                    <li>
                                        <i class="icon-phone4"></i>
                                        <span>(+1) 234 567 8901</span>
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
                    Copyright &copy; Metropolitano - Abancay 2023  {{config('app.name')}} <a href="#">Doc</a>
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