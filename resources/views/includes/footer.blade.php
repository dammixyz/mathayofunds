<!-- Section Footer -->
<div class="footer-section section section-pad-md light bg-footer">
    <div class="imagebg footerbg">
        <img src="images/footer-bg.png" alt="footer-bg">
    </div>
    <div class="container">
        <div class="row">
            {{--<div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm-lg" id="services-section">
                --}}{{--<!-- Each Widget -->
                <div class="wgs-footer wgs-menu">
                    <h5 class="wgs-title ucap">Services</h5>
                    <div class="wgs-content">
                        <ul class="menu">
                            <li><a href="#">Bitcoin Trading</a></li>
                            <li><a href="#">Security Protected</a></li>
                            <li><a href="#">Support 24/7</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Registered Company</a></li>
                            <li><a href="#">Bitcoin Wallet Options</a></li>
                            <li><a href="#">Live Exchange Rates</a></li>
                            <li><a href="#">Affiliate Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->--}}{{--
            </div>--}}
            <div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm-lg" id="company-section">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-menu">
                    <h5 class="wgs-title ucap">Our Company</h5>
                    <div class="wgs-content">
                        <ul class="menu">
                            <li><a href="{{route('about-us')}}">About</a></li>
                            <li><a href="{{route('faqs')}}">F.A.Q</a></li>
                            <li><a href="{{route('faqs')}}">Service</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-contact">
                    <h5 class="wgs-title ucap">get in touch</h5>
                    <div class="wgs-content">
                        <ul class="wgs-contact-list">
                            <li id="address"><span class="pe pe-7s-map-marker"></span>4 Salako street. Magodo-Isheri, Isheri Magodo, Kosofe, Lagos</li>
                            <li><span class="pe pe-7s-call"></span>Telephone : +2348038103697</li>
                            <li><span class="pe pe-7s-global"></span>Email : <a href="#">mathayofund@gmail.com</a> <br/>Web : <a href="{{route('homepage')}}">mathayofunds.com</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
        </div>
        <br>
        <h5>E-mail Newsletter</h5>
        <p>Stay updated, Subscribe to our newsletter</p>
        <form class="form-signup" action="{{route('newsletter')}}" method="post">
            @csrf
            <div class="form-results"></div>
            <div class="form-group">
                <div class="form-field form-m-bttm">
                    <input name="email" type="email" placeholder="Enter your email" class="form-control required email" aria-required="true" required>
                </div>
            </div>
            <button type="submit" class="btn btn-alt">Subscribe</button>
        </form>
    </div>
</div>
<!-- End Section -->

<!-- Copyright -->
<div class="copyright light">
    <div class="container">
        <div class="row">
            <div class="site-copy col-sm-7">
                <p>Copyright &copy;  2020 <a href="{{route('homepage')}}">Mathayo Funds </a>Cryptocurrency Trading Company</p>
            </div>
            <div class="col-sm-5 text-right mobile-left">
                <ul class="social">
                    <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                    <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                    <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                    <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright -->

<!-- Preloader !remove please if you do not want -->
{{--
<div id="preloader"><div id="status">&nbsp;</div></div>
--}}
