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
                        <li class="active"><a href="#sell-giftcard-tab" data-toggle="tab">Sell Gift Card</a></li>
                        <li><a href="#buy-giftcard-tab" data-toggle="tab">Buy Gift Card</a></li>
                    </ul>
                </div>
            </div>
            <div class="gaps size-2x"></div>
            <!-- Tab panes -->
            <div class="tab-content no-pd">
                <div class="tab-pane fade in active" id="sell-giftcard-tab">
                    <!-- Features Box -->
                    <div class="features-box section section-pad no-pb">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-md-9 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                    <div class="box round " style="background: #fff1e0;">
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <h5 style="font-family: OpenSans; font-weight: bold">Please Fill All
                                                        Fields Correctly</h5>
                                                    <div class="clearfix">
                                                        <div class="form-field form-m-bttm">
                                                            <select name="giftcard-type" class="form-control" id="giftcard-type"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select Gift Card</option>
                                                                <option value="amazon" id="amazon-gc">Amazon Gift Card</option>
                                                                <option value="playstation" id="playstation-gc">PlayStation Gift Card</option>
                                                                <option value="itunes" id="itunes-gc">iTunes Gift Card</option>
                                                                <option value="playstore" id="playstore-gc">Playstore Gift Card</option>
                                                            </select>
                                                        </div>
                                                        <div class="box round" id="gitfcard1">
                                                            <img src="{{asset('giftcard1.png')}}" alt="box-image" class="box-image">
                                                        </div>
                                                        <div class="box round" id="gitfcard2">
                                                            <img src="{{asset('giftcard2.png')}}" alt="box-image" class="box-image">
                                                        </div>
                                                        <div class="box round" id="gitfcard3">
                                                            <img src="{{asset('giftcard3.png')}}" alt="box-image" class="box-image">
                                                        </div>
                                                        <div class="box round" id="gitfcard5">
                                                            <img src="{{asset('giftcard5.jpg')}}" alt="box-image" class="box-image">
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <select name="country" class="form-control" id="giftcard-country"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select Card's Country</option>
                                                                <option value="usa" id="usa">USA</option>
                                                                <option value="germany" id="germany">Germany</option>
                                                                <option value="china" id="china">China</option>
                                                                <option value="uk" id="uk">UK</option>
                                                                <option value="others" id="others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-field form-m-bttm" id="specify-country-others">
                                                            <label for="country_others" class="text-sm">Other Country</label>
                                                            <input name="country_others"
                                                                   placeholder="Please specify card's country"
                                                                   class="form-control required" aria-required="true"
                                                                   type="text" required>
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <select name="denomination" class="form-control" id="giftcard-denomination"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select Card's Denomination</option>
                                                                <option value="25" id="d-25">25</option>
                                                                <option value="50" id="d-50">50</option>
                                                                <option value="100" id="d-100">100</option>
                                                                <option value="200" id="d-200">200</option>
                                                                <option value="500" id="d-500">500</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-field form-m-bttm">
                                                            <select name="sell_option" class="form-control" id="giftcard-sell-option"
                                                                    aria-invalid="false">
                                                                <option selected disabled>Select Card's Sell Option</option>
                                                                <option value="ecode_option" id="ecode">Ecode</option>
                                                                <option value="card_upload_option" id="card-upload">Card Upload</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-field form-m-bttm" id="ecode-option">
                                                            <label for="ecode_option" class="text-sm" style="font-size: 16px;">Ecode</label>
                                                            <input name="wallet_balance" placeholder="Enter ecode"
                                                                   class="form-control required" aria-required="true"
                                                                   type="text" required>
                                                        </div>
                                                        <div class="custom-file-container" id="card_upload_container" data-upload-id="cardUpload">
                                                            <label for="card_upload" class="text-sm"
                                                                   style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px"
                                                            >
                                                                Upload Card
                                                                <a
                                                                    href="javascript:void(0)"
                                                                    class="custom-file-container__image-clear"
                                                                    id="close_image_preview-card-upload"
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
                                                                <input type="file" name="card_upload" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-card-upload" accept="image/*" multiple>
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                <span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;"></span>
                                                            </label>
                                                            <div
                                                                class="custom-file-container__image-preview" id="image-preview-placeholder-card-upload"></div>
                                                        </div>
                                                        <div class="custom-file-container" id="receipt_upload_container" data-upload-id="receiptUpload">
                                                            <label for="receipt_upload" class="text-sm"
                                                                   style="font-family: OpenSans, sans-serif; color: #373e45; font-size: 16px; margin-top: 20px"
                                                            >
                                                                Upload Card's Receipt
                                                                <a
                                                                    href="javascript:void(0)"
                                                                    class="custom-file-container__image-clear"
                                                                    id="close_image_preview-receipt-upload"
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
                                                                <input type="file" name="receipt_upload" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-receipt-upload" accept="image/*" multiple>
                                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                <span class="custom-file-container__custom-file__custom-file-control" style="font-family: Quicksand, sans-serif;"></span>
                                                            </label>
                                                            <div
                                                                class="custom-file-container__image-preview" id="image-preview-placeholder-receipt-upload"></div>
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
                                    {{--Gift Card Rates--}}
                                    <div
                                        class="box round shadow-alt pricing-box highlited light ucap shadow">
                                        <h4 class="ucap">Our Rates</h4>
                                        <hr>
                                        <h5 class="ucap">Amazon</h5>
                                        <h5>$1 = &#8358;460 <div style="color: darkgreen">($25 - $100)</div> </h5>
                                        <h5>$1 = &#8358;450 <div style="color: darkgreen">($150 - $250)</div></h5>
                                        <h5>$1 = &#8358;420 <div style="color: darkgreen">($500)</div></h5>
                                        <hr>
                                        <h5 class="ucap">PlayStore</h5>
                                        <h5>$1 = &#8358;460</h5>
                                        <hr>
                                        <h5 class="ucap">iTunes</h5>
                                        <h5>$1 = &#8358;460 <div style="color: darkgreen">($25-$200)</div></h5>
                                        <h5>$1 = &#8358;455 <div style="color: darkgreen">($250 - $500)</div></h5>
                                        <hr>
                                        <h5 class="ucap">PlayStation</h5>
                                        <h5>$1 = &#8358;460</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Features Box -->
                </div>
                <div class="tab-pane fade" id="buy-giftcard-tab">
                    <!-- Features Box -->
                    <div class="features-box section section-pad no-pb">
                        <div class="container">
                            <div class="row " style="display: flex !important; justify-content: center !important;">
                                <div
                                    class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm"
                                >
                                    <div class="box round " style="background: #fff1e0; background: transparent">
                                        <h3>Coming Soon ... <span style="color: red">*</span></h3>
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
    var secondUpload = new FileUploadWithPreview('cardUpload')
    var secondUpload = new FileUploadWithPreview('receiptUpload')
    $(document).ready(function () {
        $('#gitfcard1').hide()
        $('#gitfcard2').hide()
        $('#gitfcard3').hide()
        $('#gitfcard5').hide()
        $('#specify-country-others').hide()
        $('#ecode-option').hide()
        $('#card_upload_container').hide()
        $('#receipt_upload_container').hide()
    })
    /*Select giftcard*/
    $("#giftcard-type").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'amazon-gc'){
            $('#gitfcard1').show()
            $('#gitfcard2').hide()
            $('#gitfcard3').hide()
            $('#gitfcard5').hide()
        }
        else if (id === 'playstation-gc'){
            $('#gitfcard1').hide()
            $('#gitfcard2').show()
            $('#gitfcard3').hide()
            $('#gitfcard5').hide()
        }
        else if (id === 'itunes-gc'){
            $('#gitfcard1').hide()
            $('#gitfcard2').hide()
            $('#gitfcard3').show()
            $('#gitfcard5').hide()
        }
        else if (id === 'playstore-gc'){
            $('#gitfcard1').hide()
            $('#gitfcard2').hide()
            $('#gitfcard3').hide()
            $('#gitfcard5').show()
        }
    });
    /*Select Card's Country*/
    $("#giftcard-country").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'others'){
            $('#specify-country-others').show()
        }
        else if (id === 'usa'){
            $('#specify-country-others').hide()
        }
        else if (id === 'germany'){
            $('#specify-country-others').hide()
        }
        else if (id === 'china'){
            $('#specify-country-others').hide()
        }
    });

    /*Card sell option*/
    $("#giftcard-sell-option").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'ecode'){
            /*This will clear upload input*/
            $('#close_image_preview-card-upload').get(0).click()
            $('#close_image_preview-receipt-upload').get(0).click()


            $('#ecode-option').show()
            $('#card_upload_container').hide()
            $('#receipt_upload_container').hide()
        }
        else if (id === 'card-upload'){
            $('#ecode-option').hide()
            $('#card_upload_container').show()
            $('#receipt_upload_container').show()
            $('#image-preview-placeholder-card-upload').hide()
            $('#close_image_preview-card-upload').hide()
            $('#image-preview-placeholder-receipt-upload').hide()
            $('#close_image_preview-receipt-upload').hide()

        }
    });

    /*On Upload Card*/
    $('#payment_proof-card-upload').change(function () {
        $('#image-preview-placeholder-card-upload').show()
        $('#close_image_preview-card-upload').show()
    })
    /*On Upload Receipt */
    $('#payment_proof-receipt-upload').change(function () {
        $('#image-preview-placeholder-receipt-upload').show()
        $('#close_image_preview-receipt-upload').show()
    })
    /*On Close Card Upload*/
    $('#close_image_preview-card-upload').click(function () {
        $('#image-preview-placeholder-card-upload').hide()
        $('#close_image_preview-card-upload').hide()
    })
    /*On Close Receipt Upload*/
    $('#close_image_preview-receipt-upload').click(function () {
        $('#image-preview-placeholder-receipt-upload').hide()
        $('#close_image_preview-receipt-upload').hide()
    })

</script>

</body>

</html>
