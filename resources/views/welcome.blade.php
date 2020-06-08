@extends('layouts.master2')
{{--
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.themekit.dev/codrop/elements/navs/classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 21:34:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MathayoFunds</title>
    <meta name="description" content="">
    <script src="{{asset('themekit/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/main.js')}}"></script>
    <link rel="stylesheet" href="{{asset('themekit/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/glide.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/media-box.css')}}">
    <link rel="stylesheet" href="{{asset('themekit/css/social.css')}}">
    <link rel="stylesheet" href="{{asset('skin.css')}}">
    <link rel="icon" href="{{asset('media/favicon.png')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>
<div id="preloader"></div>
<nav class="menu-classic menu-fixed" data-menu-anima="fade-in">
    <div class="menu-mini scroll-hide">
        <div class="container">
            <ul>
                <li><i class="im-phone"></i> +2348186818135 </li>
                <li><i class="im-envelope"></i> contact@mathayofunds.com</li>
            </ul>
            <div class="menu-right">
                --}}
{{--<form role="search" method="get" id="searchform" class="search-bar">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <input type="submit" value="Go">
                </form>--}}{{--

                <div class="icon-links icon-social social-colors-hover">
                    <a target="_blank" class="facebook" href="#"><i class="icon-facebook"></i></a>
                    <a target="_blank" class="twitter" href="#"><i class="icon-twitter"></i></a>
                    <a target="_blank" class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="menu-brand">
            <a href="#">
                --}}
{{--<h4 class="logo-default" style="text-decoration: none; text-underline: none;">Mathayo Funds</h4>
                <h4 class="logo-retina" style="text-decoration: none; text-underline: none;">Mathayo Funds</h4>--}}{{--


                <img class="logo-default" src="{{asset('mathayofunds.png')}}" alt="logo" />
                <img class="logo-retina" src="{{asset('mathayofunds.png')}}" alt="logo" />
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">
            <ul>
                <li>
                    <a href="#">Rates</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li>
                    <a href="#">FAQs</a>
                </li>
                <li class="dropdown">
                    <a href="#">Transactions</a>
                    <ul>
                        <li><a href="#">Sell</a></li>
                        <li><a href="#">Buy</a></li>
                    </ul>
                </li>

            </ul>
            <div class="menu-right">
                <!--SEARCH B-->
                --}}
{{--<form role="search" method="get" id="searchform" class="search-btn">
                    <div class="search-box-menu">
                        <input type="text" placeholder="Search ...">
                        <i></i>
                    </div>
                </form>--}}{{--

                <!--SOCIAL ICONS-->
                --}}
{{--<div class="icon-links icon-social social-colors-hover">
                    <a target="_blank" class="facebook" href="#"><i class="icon-facebook"></i></a>
                    <a target="_blank" class="twitter" href="#"><i class="icon-twitter"></i></a>
                    <a target="_blank" class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>--}}{{--


                <!--LAN MEMU-->
                @guest()
                    <div class="menu-custom-area">
                        <a class="btn btn-xs btn-circle" href="{{route('register')}}">Sign up</a>
                        <a href="{{route('login')}}" class="btn btn-xs btn-circle btn-border text-bold">Login</a>
                    </div>
                @else
                    <ul class="lan-menu">
                        <li>
                            <a href="{{route('home')}}" style="font-size: 16px;">Dashboard</a>
                        </li>
                    </ul>
                    <div class="menu-cnt">
                        <ul>
                            <li class="dropdown">
                                <a href="#" style="font-size: 16px;">{{ Auth::user()->username }}</a>
                                <ul>
                                    <li><a href="#">Profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
            <div class="clear"></div>
        </div>
    </div>
</nav>
<main>
    <section class="section-base section-full-width-right">
        <div class="container">
            <hr class="space" />
            <div class="row">
                <div class="col-lg-6" data-anima="fade-left" data-time="1000">
                    <hr class="space-lg hidden-md" />
                    <ul class="slider controls-top-left" data-options="arrows:false,nav:true,controls:out">
                        <li>
                            <h1>
                                Bitcoin trader you can trust
                            </h1>
                            <p>
                                Mathayo Funds, we are No. 1 Bitcoin trader and Giftcards in Nigeria.
                            </p>
                        </li>
                        <li>
                            <h1>
                                World's best cryptocurrency exchange platform
                            </h1>
                            <p>
                                You can trade your Bitcoin and Ethereum for quick cash or RMB... our platform is secure and fast
                            </p>
                        </li>
                        <li>
                            <h1>
                                We buy all kinds of Giftcards at Unrivalled Amazing Rates
                            </h1>
                            <p>
                                We buy all kinds of Giftcards, ranging from Amazon, iTunes, Steam,Sephora,Nordstrom,Googleplay etc.
                            </p>
                        </li>
                    </ul>
                    <hr class="space-xs" />
                </div>
                <div class="col-lg-6">
                    <hr class="space visible-md" />
                    <img height="400px" width="400px" src="media/bitcoin_person.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section id="overview" class="section-base">
        <div class="container">
            <ul class="slider" data-options="type:carousel,arrows:false,nav:false,perView:5,perViewMd:3,perViewXs:2,gap:80">
                <li>
                    <img src="media/logos/logo-7.png" alt="" />
                </li>
                <li>
                    <img src="media/logos/logo-6.png" alt="" />
                </li>
                <li>
                    <img src="media/logos/logo-4.png" alt="" />
                </li>
                <li>
                    <img src="media/logos/logo-1.png" alt="" />
                </li>
                <li>
                    <img src="media/logos/logo-5.png" alt="" />
                </li>
                <li>
                    <img src="media/logos/logo-3.png" alt="" />
                </li>
            </ul>
            <hr class="space-lg" />
            <h2 class="align-center width-650">Sell your Giftcards and Bitcoin to Mathayo Funds, We are 100% genuine, we pay instantly, our rates are amazing and we have some discounts and bonuses for our affiliate marketers</h2>
            <hr class="space-lg" />
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
                    <img class="margin-23" src="media/phone-10.png" alt="" />
                </div>
                <div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
                    <h2>Explore great hidden <br />locations with a click of your app.</h2>
                    <p>
                        Lorem ipsum dolor sit ametno sea takimata sanctus est Lorem ipsum dolor sit amete.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco sea takimata sanctus eslaboriso.
                    </p>
                    <a href="#" class="btn-text">Explore services</a>
                </div>
            </div>

        </div>
    </section>
    <section class="section-base">
        <div class="container">
            <h3>Customers Reviews</h3>
            <ul class="slider" data-options="type:carousel,arrows:true,nav:false,perView:3,perViewSm:2,perViewXs:1,controls:out,gap:30">
                <li>
                    <div class="cnt-box cnt-box-testimonials rating-5">
                        <img src="media/users/user-1.jpg" alt="" />
                        <p>
                            Lorem ipsum dolor sitamet consectetur adipisicing elito sed do eiusmod tempore.
                        </p>
                        <p class="testimonial-info">
                            <span>Robert Junior</span>
                            <span>Slack</span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="cnt-box cnt-box-testimonials rating-5">
                        <img src="media/users/user-3.jpg" alt="" />
                        <p>
                            Lorem ipsum dolor sitamet consectetur adipisicing elito sed do eiusmod tempore.
                        </p>
                        <p class="testimonial-info">
                            <span>Jessica Poster</span>
                            <span>Facebook</span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="cnt-box cnt-box-testimonials rating-4">
                        <img src="media/users/user-4.jpg" alt="" />
                        <p>
                            Lorem ipsum dolor sitamet consectetur adipisicing elito sed do eiusmod tempore.
                        </p>
                        <p class="testimonial-info">
                            <span>Brad Manson</span>
                            <span>Google</span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="cnt-box cnt-box-testimonials rating-5">
                        <img src="media/users/user-5.jpg" alt="" />
                        <p>
                            Lorem ipsum dolor sitamet consectetur adipisicing elito sed do eiusmod tempore.
                        </p>
                        <p class="testimonial-info">
                            <span>Richard Pall</span>
                            <span>Microsoft</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>
<i class="scroll-top-btn scroll-top show"></i>
<footer class="light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h4>Company and team</h4>
                <div class="menu-inner menu-inner-vertical">
                    <ul>
                        <li>
                            <p>4 Salako street. Magodo-Isheri, Isheri Magodo, Kosofe, Lagos</p>
                        </li>
                        <li>
                            <p>News and blog</p>
                        </li>
                        <li>
                            <p>+2348038103697</p>
                        </li>
                        <li>
                            <p>mathayofund@gmail.com</p>
                        </li>
                        <li>
                            <p>Monday - Friday: 08:00 - 22:00
                                Saturday, Sunday: Closed</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Quick Links</h4>
                <div class="menu-inner menu-inner-vertical">
                    <ul>
                        <li>
                            <a href="#">FAQs</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Terms and conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Service</h4>
                <div class="menu-inner menu-inner-vertical">
                    <ul>
                        <li>
                            <a href="#">Bitcoin Trading</a>
                        </li>
                        <li>
                            <a href="#">Security Protected</a>
                        </li>
                        <li>
                            <a href="#">Support 24/7</a>
                        </li>
                        <li>
                            <a href="#">Payment Methods</a>
                        </li>
                        <li>
                            <a href="#">Registered Company</a>
                        </li>
                        <li>
                            <a href="#">Bitcoin Wallet Options</a>
                        </li>
                        <li>
                            <a href="#">Live Exchange Rates</a>
                        </li>
                        <li>
                            <a href="#">Affiliate Marketing</a>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Email Newsletter</h4>
                <p style="font-size: 13px">Subscribe to our new letter</p>
                <div class="input-text-btn">
                    <input class="input-text" type="text" placeholder="Enter your E-mail" /><input type="submit" value="Subscribe" class="btn"/>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <span>All right reserved. Mathayofunds © 2020</span>
            <span><img src="{{asset('mathayofunds.png')}}" /></span>
        </div>
    </div>

    <link rel="stylesheet" href="{{asset('themekit/media/icons/iconsmind/line-icons.min.css')}}">
    <script src="{{asset('themekit/scripts/parallax.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/glide.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/magnific-popup.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/tab-accordion.js')}}"></script>
    <script src="{{asset('themekit/scripts/imagesloaded.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/contact-form/contact-form.js')}}"></script>
    <script src="{{asset('themekit/scripts/progress.js')}}"></script>
    <script src="{{asset('themekit/scripts/pagination.min.js')}}"></script>
    <script src="{{asset('themekit/scripts/social.min.js')}}"></script>
    <script src="{{asset('media/custom.js')}}"></script>
    <script data-setting="codrop" src="{{asset('../../themekit.dev/tools/sidebar/sidebar.js')}}"></script>

    <script src="{{asset('../../themekit/scripts/tab-accordion.js')}}"></script>
</footer>
</body>

<!-- Mirrored from templates.themekit.dev/codrop/elements/navs/classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 21:34:49 GMT -->
</html>
--}}
