
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/style5152.css?ver=1.0">
    <link rel="stylesheet" id="layoutstyle" href="assets/css/theme5152.css?ver=1.0">
    {{--File upload--}}
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
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
                            <li><a href="index-wallet.html"> <span class="fa fa-credit-card"></span> Trade Gift Card</a></li>
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
<div class="features-box section section-pad no-pt pb-10" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 res-m-bttm">
                <div class="pricing-box ucap shadow">
                    <div class="box round no-pt">
                        <img src="{{asset('mathayo-profile.png')}}" alt="box-icon" class="box-icon">
                        <h6 class="">Stunner</h6>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-dashboard"></i>&nbsp; Dashboard</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-credit-card"></i>&nbsp; Card Trades</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fas fa-coins"></i>&nbsp; Coin Trades</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-user"></i>&nbsp; Profile</span></a><br>
                        <a href="#" class="btn btn-md btn-alt"><span><i class="fa fa-envelope"></i>&nbsp; Messages</span></a><br>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-0 col-sm-8 ">
                <div class="pricing-tab  section-pad section no-pt no-mt">
                    <div class="container">
                        <div class="tab-custom">
                            <div class="row no-pt no-mt">
                                <div class="col-md-6 col-md-offset-3">
                                    <ul class="nav nav-tabs ucap">
                                        <li class="active"><a href="#sell-giftcard-tab" data-toggle="tab">Profile</a></li>
                                        <li><a href="#buy-giftcard-tab" data-toggle="tab">Account Details</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content no-pt no-mt">
                                <div class="tab-pane fade in active no-pt no-mt" id="sell-giftcard-tab">
                                    <!-- Features Box -->
                                    <div class="features-box section section-pad pt-15">
                                        <div class="box round shadow-alt text-center">
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <h5 style="font-family: OpenSans; font-weight: bold">My Profile</h5>
                                                        <div class="clearfix">
                                                            <div id="user_details">
                                                                <div class="custom-file-container" data-upload-id="profilePicture">
                                                                    <label for="profile_pic" class="text-sm"
                                                                           style="font-family: OpenSans, sans-serif; color: #373e45; margin-top: 20px"
                                                                    >
                                                                        Upload Your Image(Optional)
                                                                        <a
                                                                            href="javascript:void(0)"
                                                                            class="custom-file-container__image-clear"
                                                                            id="close_image_preview-profile-pic"
                                                                            title="Clear Image"
                                                                            style="color: red"
                                                                        >
                                                                            x
                                                                        </a>
                                                                    </label>
                                                                    <label
                                                                        class="custom-file-container__custom-file"
                                                                        style="margin-bottom: 15px;"
                                                                    >
                                                                        <input type="file" name="profile_pic" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-profile-pic" accept="image/*">
                                                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                        <span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;"></span>
                                                                    </label>
                                                                    <div class="custom-file-container__image-preview" id="profile-pic"></div>
                                                                </div>
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="username" class="text-sm">Username</label>
                                                                    <input name="username" value="StuNNer"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" disabled required>
                                                                </div>
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="email" class="text-sm">E-Mail</label>
                                                                    <input name="email" value="stunner@gmail.com"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" disabled required>
                                                                </div>
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="phone_number" class="text-sm">Phone Number</label>
                                                                    <input name="phone_number" value="0813929958"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-field form-button form-m-bttm">
                                                            <button type="submit" class="btn btn-xs btn-color"
                                                                    style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End Features Box -->
                                </div>
                                <div class="tab-pane fade no-pt no-mt" id="buy-giftcard-tab">
                                    <!-- Features Box -->
                                    <div class="features-box section section-pad pt-15">
                                        <div class="box round shadow-alt text-center">
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <h5 style="font-family: OpenSans; font-weight: bold">My Bank Details</h5>
                                                        <div class="clearfix">
                                                            <div id="bank_details">
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="bank" class="text-sm">Bank Name</label>
                                                                    <input name="bank" value="Guarantee Trust Bank"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" required>
                                                                </div>
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="account_no" class="text-sm">Bank Account
                                                                        Number</label>
                                                                    <input name="account_no" value="0283929193"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" required>
                                                                </div>
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="full_name" class="text-sm">Full Name (As per
                                                                        bank)</label>
                                                                    <input name="full_name" value="Stunner Stunner"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-field form-button form-m-bttm">
                                                            <button type="submit" class="btn btn-xs btn-color"
                                                                    style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End Features Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

<!-- Slimscroll -->
<script src="{{asset('assets_dashboard/jquery.slimscroll.min.js')}}"></script>


<script src="assets/js/scrollspyNav.js"></script>
<script src="file-upload/file-upload-with-preview.min.js"></script>
<script>
    var firstUpload = new FileUploadWithPreview('profilePicture')
    $(function(){
        $('#latest-transaction-table').slimScroll({
            height: '250px',
            allowPageScroll: false,
            size: '1px',
            color: '#f7921a',
            opacity: 0.5,
        });
        $('#coins-rates-table').slimScroll({
            height: '250px',
            allowPageScroll: false,
            size: '1px',
            color: '#f7921a',
            opacity: 0.5
        });
        $('#giftcards-rates-table').slimScroll({
            height: '250px',
            allowPageScroll: false,
            size: '1px',
            color: '#f7921a',
            opacity: 0.5
        });
    });
</script>

</body>

</html>

