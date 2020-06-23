<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="CryptoCoin is a powerful Bitcoin Crypto Currency Wallet and Mining Template with full of customization options and features">
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
                    <li><a href="buy-sell.html">Home</a></li>
                    <li><a href="buy-sell.html">Buy</a></li>
                    <li><a href="wallet-features.html">Sell</a></li>
                    <li><a href="market-data.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    <!-- End Navbar -->
</header>
<!-- End Header -->


<!-- Pricing Tab -->
<div class="pricing-tab  section-pad section">
    <div class="container">
        <div class="tab-custom">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="nav nav-tabs ucap">
                        <li class="active"><a href="#sell-coin-tab" data-toggle="tab">Sell Coin</a></li>
                        <li><a href="#buy-coin-tab" data-toggle="tab">Buy Coin</a></li>
                    </ul>
                </div>
            </div>
            <div class="gaps size-2x"></div>
            <!-- Tab panes -->
            <div class="tab-content no-pd">
                <div class="tab-pane fade in active" id="sell-coin-tab">
                    <!-- Features Box -->
                    <div class="features-box section section-pad no-pb">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    {{--Coins QRCodes--}}
                                    <div class="tab-custom">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <ul class="nav nav-tabs ucap">
                                                    <li class="active"><a href="#bitcoin-wallet-tab" data-toggle="tab">Bitcoin</a>
                                                    </li>
                                                    <li><a href="#ethereum-wallet-tab" data-toggle="tab">Ethereum</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="gaps size-2x"></div>
                                        <!-- Tab panes -->
                                        <div class="tab-content no-pd">
                                            <div class="tab-pane fade in active" id="bitcoin-wallet-tab">
                                                <div class="row">
                                                    <div class="box round shadow-alt pricing-box highlited light ucap shadow">
                                                        <h4 class="ucap">Bitcoin wallet details</h4>
                                                        <hr>
                                                        <h6 class="ucap">Blockchain</h6>
                                                        <img src="{{asset('qrcode.png')}}" alt="box-image"
                                                             class="box-image">
                                                        <h5 class="small-wallet wallet-address-text" id="bitcoinBlockchain">
                                                            ghkjkhjkhkhkj
                                                        </h5>
                                                        <span>
                                                            <button onclick='copyBitcoinBlockchain("bitcoinBlockchain")' class="copy-button">
                                                                <i class="fa fa-copy"></i>&nbsp; Copy Address
                                                            </button>
                                                        </span>
                                                        <br>
                                                        <h6 class="ucap">Paxful</h6>
                                                        <img src="{{asset('qrcode.png')}}" alt="box-image"
                                                             class="box-image">
                                                        <h5 class="small-wallet wallet-address-text" id="bitcoinPaxful">
                                                            sueiuweauiuiueiweuwiu76734738393o49r92r93jrj932r3iewuewuiewewew2
                                                        </h5>
                                                        <span>
                                                            <button onclick="copyBitcoinPaxful('bitcoinPaxful')" class="copy-button">
                                                                <i class="fa fa-copy"></i>&nbsp; Copy Address
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="ethereum-wallet-tab">
                                                <div class="row">
                                                    <div
                                                        class="box round shadow-alt pricing-box highlited light ucap shadow">
                                                        <h4 class="ucap">Ethereum wallet details</h4>
                                                        <hr>
                                                        <h6 class="ucap">Blockchain</h6>
                                                        <img src="{{asset('qrcode.png')}}" alt="box-image"
                                                             class="box-image">
                                                        <h5 class="small-wallet" id="ethereumBlockchain"
                                                            style="word-wrap: break-word; font-family: OpenSans; margin-left: 17px; margin-right: 17px;"
                                                        >
                                                            sueiuweauiuiueiweuwiu76734738393o49r92r93jrj932r3iewuewuiewewew3
                                                        </h5>
                                                        <span>
                                                            <button onclick="copyEthereumBlockchain('ethereumBlockchain')" class="copy-button">
                                                                <i class="fa fa-copy"></i>&nbsp; Copy Address
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="box round " style="background: #fff1e0;">
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <h5 style="font-family: OpenSans; font-weight: bold">Please Fill All
                                                        Fields Correctly</h5>
                                                    <div class="clearfix">
                                                        <div class="form-field form-m-bttm">
                                                            <select name="quote-request-hear" class="form-control" id="coin_type_sell"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select Coin</option>
                                                                <option value="blockchain" id="bitcoin-sell">Bitcoin</option>
                                                                <option value="paxfull" id="ethereum-sell">Ethereum</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <input name="amount"
                                                                   placeholder="Enter USD equivalent of the coin amount"
                                                                   class="form-control required" aria-required="true"
                                                                   type="number" required>
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <select name="quote-request-hear" class="form-control" id="walletBank"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select Payment Option</option>
                                                                <option value="wallet">Wallet</option>
                                                                <option value="bank">Bank</option>
                                                            </select>
                                                        </div>
                                                        <div id="walletPayment">
                                                            <div class="form-field form-m-bttm">
                                                                <label for="wallet_balance" class="text-sm">Wallet Balance</label>
                                                                <input name="wallet_balance" value="&#8358;30,000"
                                                                       class="form-control required" aria-required="true"
                                                                       type="text" disabled required>
                                                            </div>
                                                        </div>
                                                        <div id="bankPayment">
                                                            <div class="form-field form-m-bttm">
                                                                <label for="bank" class="text-sm">Bank Name</label>
                                                                <input name="bank" value="Guarantee Trust Bank"
                                                                       class="form-control required" aria-required="true"
                                                                       type="text" disabled required>
                                                            </div>
                                                            <div class="form-field form-m-bttm">
                                                                <label for="account_no" class="text-sm">Bank Account
                                                                    Number</label>
                                                                <input name="account_no" value="0283929193"
                                                                       class="form-control required" aria-required="true"
                                                                       type="text" disabled required>
                                                            </div>
                                                            <div class="form-field form-m-bttm">
                                                                <label for="full_name" class="text-sm">Full Name (As per
                                                                    bank)</label>
                                                                <input name="full_name" value="Stunner Stunner"
                                                                       class="form-control required" aria-required="true"
                                                                       type="text" disabled required>
                                                            </div>
                                                        </div>
                                                        <div class="alert alert-info" id="bitcoin-trade-sell">
                                                            We will pay &#8358;0 for $0 (Bitcoin trade)
                                                        </div>
                                                        <div class="alert alert-info" id="ethereum-trade-sell">
                                                            We will pay &#8358;0 for $0 (Ethereum trade)
                                                        </div>
                                                        <div class="custom-file-container" data-upload-id="bitcoinProofSell">
                                                            <label for="payment_proof_sell" class="text-sm"
                                                                   style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 18px; margin-top: 20px"
                                                            >
                                                                Upload payment proof
                                                                <a
                                                                    href="javascript:void(0)"
                                                                    class="custom-file-container__image-clear"
                                                                    id="close_image_preview-bitcoin-sell"
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
                                                                <input type="file" name="payment_proof_sell" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-bitcoin-sell" accept="image/*">
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                <span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;"></span>
                                                            </label>
                                                            <div
                                                                class="custom-file-container__image-preview" id="image-preview-placeholder-bitcoin-sell"></div>
                                                        </div>
                                                        <div class="form-field form-button form-m-bttm">
                                                            <button type="submit" class="btn btn-xs btn-color"
                                                                    style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                                                Proceed
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="pricing-box highlited light ucap shadow">
                                        <span class="pricing-title">Our Rates</span>
                                        <div class="inline-form text-center">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="clearfix">
                                                        <h4>Bitcoin</h4>
                                                        <h4>$1 = &#8358;450</h4>
                                                        <hr>
                                                        <h4>Ethereum</h4>
                                                        <h4>$1 = &#8358;500</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Features Box -->
                </div>
                <div class="tab-pane fade" id="buy-coin-tab">
                    <!-- Features Box -->
                    <div class="features-box section section-pad no-pb">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="row">
                                        <div class="box round shadow-alt pricing-box highlited light ucap shadow">
                                            <h4 class="ucap" style="margin-right: 5px; margin-left: 5px;">Bank Account details</h4>
                                            <hr>
                                            <h5 class="ucap">Bank Name</h5>
                                            <h6 class="small-wallet wallet-address-text" id="bitcoinBlockchain">
                                                FCMB
                                            </h6>
                                            <h5 class="ucap">Account Number</h5>
                                            <h6 class="small-wallet wallet-address-text" id="bitcoinBlockchain">
                                                6857840014
                                            </h6>
                                            <h5 class="ucap">Company Name</h5>
                                            <h6 class="small-wallet wallet-address-text" id="bitcoinBlockchain">
                                                Mathayo business Enterprise
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="box round " style="background: #fff1e0;">
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <h5 style="font-family: OpenSans; font-weight: bold">
                                                        Please Fill All Fields Correctly
                                                    </h5>
                                                    <div class="clearfix">
                                                        <div class="form-field form-m-bttm">
                                                            <select name="quote-request-hear" class="form-control" id="coin_type_buy"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select Coin</option>
                                                                <option value="bitcoin" id="bitcoin-buy">Bitcoin</option>
                                                                <option value="ethereum" id="ethereum-buy">Ethereum</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <input name="amount" placeholder="Enter USD Equivalent of Coin Amount"
                                                                   class="form-control required" aria-required="true"
                                                                   type="number" required>
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <input name="wallet_address"
                                                                   placeholder="Enter Your Wallet Address"
                                                                   class="form-control required" aria-required="true"
                                                                   type="text" required>
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <select name="quote-request-hear" class="form-control"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select platform</option>
                                                                <option value="blockchain">Blockchain</option>
                                                                <option value="paxfull">Paxful</option>
                                                            </select>
                                                        </div>
                                                        <div class="alert alert-info" id="bitcoin-trade-buy">
                                                            You will pay &#8358;0 for $0 (Bitcoin trade)
                                                        </div>
                                                        <div class="alert alert-info" id="ethereum-trade-buy">
                                                            You will pay &#8358;0 for $0 (Ethereum trade)
                                                        </div>
                                                        <br>
                                                        <div class="custom-file-container" data-upload-id="bitcoinProofBuy">
                                                            <label for="payment_proof_buy" class="text-sm"
                                                                   style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 18px; margin-top: 20px"
                                                            >
                                                                Upload payment proof
                                                                <a
                                                                    href="javascript:void(0)"
                                                                    class="custom-file-container__image-clear"
                                                                    id="close_image_preview-bitcoin-buy"
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
                                                                <input type="file" name="payment_proof_buy" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-bitcoin-buy" accept="image/*">
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                <span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;"></span>
                                                            </label>
                                                            <div
                                                                class="custom-file-container__image-preview" id="image-preview-placeholder-bitcoin-buy"></div>
                                                        </div>
                                                        <div class="form-field form-button form-m-bttm">
                                                            <button type="submit" class="btn btn-xs btn-color"
                                                                    style="margin-top: 20px; padding-top: 10px; padding-bottom: 10px">
                                                                Proceed
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="pricing-box highlited light ucap shadow">
                                        <span class="pricing-title">Our Rates</span>
                                        <div class="inline-form text-center">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <div class="clearfix">
                                                        <h4>Bitcoin</h4>
                                                        <h4>$1 = &#8358;450</h4>
                                                        <hr>
                                                        <h4>Ethereum</h4>
                                                        <h4>$1 = &#8358;500</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--End Pricing Tab -->

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


<script src="{{asset('assets/js/jquery.bundle.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>











<script src="assets/js/scrollspyNav.js"></script>
<script src="file-upload/file-upload-with-preview.min.js"></script>
<script>
    $(window).on('load', function () {
        $('div#themes_panel').hide();
    })
</script>
{{--Image Preview--}}
<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('bitcoinProofSell')
    var firstUpload = new FileUploadWithPreview('bitcoinProofBuy')
    $(document).ready(function () {
        $('#image-preview-placeholder-bitcoin-sell').hide()
        $('#close_image_preview-bitcoin-sell').hide()
        $('#image-preview-placeholder-bitcoin-buy').hide()
        $('#close_image_preview-bitcoin-buy').hide()
        $('#bitcoin-trade-sell').hide()
        $('#ethereum-trade-sell').hide()
        $('#bitcoin-trade-buy').hide()
        $('#ethereum-trade-buy').hide()
    })
    /*Sell Bitcoin*/
    $('#payment_proof-bitcoin-sell').change(function () {
        $('#image-preview-placeholder-bitcoin-sell').show()
        $('#close_image_preview-bitcoin-sell').show()
    })
    $('#close_image_preview-bitcoin-sell').click(function () {
        $('#image-preview-placeholder-bitcoin-sell').hide()
        $('#close_image_preview-bitcoin-sell').hide()
    })
    $("#coin_type_sell").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'bitcoin-sell'){
            $('#bitcoin-trade-sell').show()
            $('#ethereum-trade-sell').hide()
        }
        else if (id === 'ethereum-sell'){
            $('#ethereum-trade-sell').show()
            $('#bitcoin-trade-sell').hide()
        }
    });
    /*Buy Bitcoin*/
    $('#payment_proof-bitcoin-buy').change(function () {
        $('#image-preview-placeholder-bitcoin-buy').show()
        $('#close_image_preview-bitcoin-buy').show()
    })
    $('#close_image_preview-bitcoin-buy').click(function () {
        $('#image-preview-placeholder-bitcoin-buy').hide()
        $('#close_image_preview-bitcoin-buy').hide()
    })
    $("#coin_type_buy").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'bitcoin-buy'){
            $('#bitcoin-trade-buy').show()
            $('#ethereum-trade-buy').hide()
        }
        else if (id === 'ethereum-buy'){
            $('#ethereum-trade-buy').show()
            $('#bitcoin-trade-buy').hide()
        }
    });
</script>

<script>
    //If you want to copyText from Element
    function copyBitcoinBlockchain(elementID) {
        let element = document.getElementById(elementID); //select the element
        let elementText = element.textContent; //get the text content from the element
        copyText(elementText); //use the copyText function below
        toastr.success('wallet address copied successfully');
        //toastr.options.preventDuplicates = true;
        toastr.options.progressBar = true;
    }
    //If you want to copyText from Element
    function copyBitcoinPaxful(elementID) {
        let element = document.getElementById(elementID); //select the element
        let elementText = element.textContent; //get the text content from the element
        copyText(elementText); //use the copyText function below
        toastr.success('wallet address copied successfully');
        //toastr.options.preventDuplicates = true;
        toastr.options.progressBar = true;
    }
    //If you want to copyText from Element
    function copyEthereumBlockchain(elementID) {
        let element = document.getElementById(elementID); //select the element
        let elementText = element.textContent; //get the text content from the element
        copyText(elementText); //use the copyText function below
        toastr.success('wallet address copied successfully');
        //toastr.options.preventDuplicates = true;
        toastr.options.progressBar = true;
    }
    //If you only want to put some Text in the Clipboard just use this function
    // and pass the string to copied as the argument.
    function copyText(text) {
        navigator.clipboard.writeText(text);
    }
    $(document).ready(function () {
        $('#bankPayment').hide();
        $('#walletPayment').hide();
    })

    $('#walletBank').change(function(){
        //alert();
        if ($(this).val() === "wallet"){
            $('#bankPayment').hide();
            $('#walletPayment').show();
        }
        else if ($(this).val() === "bank"){
            $('#walletPayment').hide();
            $('#bankPayment').show();
        }
    })
</script>

</body>

</html>
