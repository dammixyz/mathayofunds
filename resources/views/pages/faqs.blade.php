<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="CryptoCoin is a powerful Bitcoin Crypto Currency Wallet and Mining Template with full of customization options and features">
    <!-- Bootstrap-extend -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-extend.css')}}">
    {{--Font-AWESOME--}}
    <script src="{{asset('assets/js/fa.js')}}"></script>
    {{--Main Style--}}
<!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Mathayo Funds - Home</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundle.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style5152.css?ver=1.0">
    <link rel="stylesheet" id="layoutstyle" href="assets/css/theme5152.css?ver=1.0">
    {{--File upload--}}
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css"/>
    <link href="file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css"/>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-91615293-2', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body>

<!-- Header -->
<header class="site-header header-s1 is-sticky">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="social">
                        <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                        <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                        <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                        <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 al-right">
                    <ul class="top-nav">
                        <li><a href="faqs.html">Help</a></li>
                        <li><a href="faqs.html">Support</a></li>
                        <li><a href="signup.html">Login</a></li>
                        <li><a href="signup.html">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Navbar -->
    <div class="navbar navbar-primary">
        <div class="container relative">
            <!-- Logo -->
            <a class="navbar-brand" href="index-2.html">
                <img class="logo logo-dark" alt="logo" src="{{asset('mat_logo.png')}}">
                <img class="logo logo-light" alt="logo" src="{{asset('mat_logo.png')}}">
            </a>
            <!-- #end Logo -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
                        aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="quote-btn"><a class="btn" href="contact.html"><span>get started</span></a></div>
            </div>
            <!-- MainNav -->
            <nav class="navbar-collapse collapse" id="mainnav">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#" class="dropdown-toggle">Tade With Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index-2.html"><span class="fas fa-coins"></span> Trade Coin</a></li>
                            <li><a href="index-wallet.html"> <span class="fa fa-credit-card"></span> Trade Gift Card</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="market-data.html">About Us</a></li>
                    <li><a href="contact.html">Rates</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle">Welcome, StuNNer <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index-2.html"><span class="fa fa-user"></span> Account</a></li>
                            <li><a href="index-wallet.html"> <span class="fa fa-clock-o"></span> Transactions</a></li>
                            <li><a href="index-wallet.html"> <span class="fa fa-power-off"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    <!-- End Navbar -->
</header>
<!-- End Header -->


<!-- Transactions Count -->
<div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-20 res-m-bttm">
                <h4>Our Frequently Asked <span>Questions</span></h4>
                <p>Here are answers to the questions asked frequently by our customers</p>
                <hr>
                <!-- Accordion -->
                <div class="panel-group accordion pb-20" id="another" role="tablist" aria-multiselectable="true">
                    <!-- each panel for accordion -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-i1">
                            <h6 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">
                                    Is this app free to use for business or commercial use ?
                                    <span class="plus-minus"><span></span></span>
                                </a>
                            </h6>
                        </div>
                        <div id="accordion-pane-i1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-i1">
                            <div class="panel-body">
                                <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                            </div>
                        </div>
                    </div>
                    <!-- each panel for accordion -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-i2">
                            <h6 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">
                                    How do i make a support request with this app?
                                    <span class="plus-minus"><span></span></span>
                                </a>
                            </h6>
                        </div>
                        <div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2">
                            <div class="panel-body">
                                <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                            </div>
                        </div>
                    </div>
                    <!-- each panel for accordion -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-i3">
                            <h6 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
                                    How and where can we download latest update ?
                                    <span class="plus-minus"><span></span></span>
                                </a>
                            </h6>
                        </div>
                        <div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
                            <div class="panel-body">
                                <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                            </div>
                        </div>
                    </div>
                    <!-- each panel for accordion -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-i4">
                            <h6 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i4" aria-expanded="false">
                                    Is there any premium version with extended features ?
                                    <span class="plus-minus"><span></span></span>
                                </a>
                            </h6>
                        </div>
                        <div id="accordion-pane-i4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i4">
                            <div class="panel-body">
                                <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                            </div>
                        </div>
                    </div><!-- end each panel -->
                    <!-- each panel for accordion -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-i5">
                            <h6 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i5" aria-expanded="false">
                                    Where do i find any details documentation ?
                                    <span class="plus-minus"><span></span></span>
                                </a>
                            </h6>
                        </div>
                        <div id="accordion-pane-i5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i5">
                            <div class="panel-body">
                                <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organization an independent, objective assurance and consulting activity.</p>
                            </div>
                        </div>
                    </div><!-- end each panel -->
                </div><!-- Accordion #end -->
            </div>
        </div>
    </div>
</div><!--End Features Box -->


<!-- Section Footer -->
<div class="footer-section section section-pad-md light bg-footer">
    <div class="imagebg footerbg">
        <img src="images/footer-bg.png" alt="footer-bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
                <!-- Each Widget -->
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
                <!-- End Widget -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wgs-box res-m-bttm-lg">
                <!-- Each Widget -->
                <div class="wgs-footer wgs-menu">
                    <h5 class="wgs-title ucap">Our Company</h5>
                    <div class="wgs-content">
                        <ul class="menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact</a></li>
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
                            <li><span class="pe pe-7s-map-marker"></span>4 Salako street. Magodo-Isheri, Isheri Magodo,
                                Kosofe, Lagos
                            </li>
                            <li><span class="pe pe-7s-call"></span>Telephone : +2348038103697 <br/>Telephone :
                                +2348086818135
                            </li>
                            <li><span class="pe pe-7s-global"></span>Email : <a href="#">mathayofund@gmail.com</a> <br/>Web
                                : <a href="#">mathayofunds</a></li>
                            <li><span class="pe pe-7s-clock"></span>Opening : Monday - Friday: 08:00 - 22:00 <br/>Closing
                                : Saturday, Sunday: Closed
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
        </div>
        <br>
        <h5>E-mail Newsletter</h5>
        <p>Stay updated, Subscribe to our newsletter</p>
        <form class="form-signup" action="http://demo.themenio.com/cryptocoin/action.php" method="post">
            <div class="form-results"></div>
            <div class="form-group">
                <div class="form-field form-m-bttm">
                    <input name="signup-email" type="email" placeholder="Enter your email"
                           class="form-control required email" aria-required="true">
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
                <p>Copyright &copy; 2020 <a href="{{route('welcome')}}">Mathayo Funds </a>Cryptocurrency Trading Company
                </p>
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
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

{{--Leave A Review Modal--}}
<div class="modal" tabindex="-1" id="leaveReview" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Your Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <b class="text-info"><span class="fa fa-info"></span> &nbsp; Notice:: Your review may be used for promotional purposes</b>
                </div>
                <div class="modal-body">
                    <div class="form-field form-m-bttm">
                    <textarea name="message" cols="10" rows="8" style="resize: none" placeholder="Share your experience with us so far."
                              class="form-control required" aria-required="true"
                              type="text" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-alt"><span><i class="fa fa-send"></i> &nbsp;</span><b>Send</b></button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--Admin Payment Proof For Card Modal--}}
<div class="modal" tabindex="-1" id="adminPaymentProofCard" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title">Our Payment Proof</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-field form-m-bttm">
                    <img src="{{asset('qrcode.png')}}" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                </button>
            </div>
        </div>
    </div>
</div>


{{--Admin Payment Proof For Coin Modal--}}
<div class="modal" tabindex="-1" id="adminPaymentProofCoin" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title">Our Payment Proof</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-field form-m-bttm">
                    <img src="{{asset('mathayo-profile.png')}}" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                </button>
            </div>
        </div>
    </div>
</div>


{{--User Payment/Transfer Proof For Coin Modal--}}
<div class="modal" tabindex="-1" id="paymentTransferProof" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex justify-content-between">
                    <h5 class="modal-title">Your Uploaded Payment/Transfer Snapshot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-field form-m-bttm">
                    <img src="{{asset('mathayo.jpg')}}" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                </button>
            </div>
        </div>
    </div>
</div>

{{--Main Scripts--}}
<script src="{{asset('assets/js/jquery.bundle.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="assets/js/scrollspyNav.js"></script>
<script src="file-upload/file-upload-with-preview.min.js"></script>

<script>
    $(window).on('load', function () {
        $('div#themes_panel').hide();

        //ToolTip
        $('#upload-1').tooltip()
        $('#proof-1').tooltip()
        $('#upload-2').tooltip()
        $('#proof-2').tooltip()
        $('#upload-3').tooltip()
        $('#proof-3').tooltip()
        $('#upload-4').tooltip()
        $('#proof-4').tooltip()
        $('#upload-5').tooltip()
        $('#proof-5').tooltip()
        $('#upload-6').tooltip()
        $('#proof-6').tooltip()
        $('#upload-7').tooltip()
        $('#proof-7').tooltip()
        $('#upload-8').tooltip()
        $('#proof-8').tooltip()
        $('#upload-9').tooltip()
        $('#proof-9').tooltip()
        $('#upload-10').tooltip()
        $('#proof-10').tooltip()
    })
</script>

</body>

</html>

