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
                        @if(!Auth::check())
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                        @else
                            <li><a href="{{--{{route('login')}}--}}">Dashboard</a></li>
                            <li><a href="{{route('logout')}}">Logout</a></li>
                        @endif
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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
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
                    <li><a href="buy-sell.html">Trade Coins</a></li>
                    <li><a href="wallet-features.html">Trade Cards</a></li>
                    @if(Auth::check())
                        <li><a href="#{{--{{route('login')}}--}}">Dashboard</a></li>
                    @endif
                    <li><a href="market-data.html">About Us</a></li>
                    <li><a href="market-data.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- #end MainNav -->
        </div>
    </div>
    @if(in_array(\Illuminate\Support\Facades\Route::currentRouteName(), ['homepage']))
            <div id="header" class="banner header-slider">
                <div class="single-slide light row-vm" style="background-image:url(images/header-bg-a.jpg)">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="animate-bottom delayms5">Bitcoin Trader <br /><span class="ucap">YOU CAN TRUST</span></h1>
                                    <p class="lead animate-bottom delayms7">Mathayo Funds, we are No. 1 Trader of Bitcoin in Nigeria</p>
                                    <ul class="btns animate-bottom delayms9">
                                        <li><a href="#" class="btn">Get Started</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide light row-vm" style="background-image:url(images/header-bg-b.jpg)">
                    <div class="container">
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="animate-bottom delayms5">We buy all kinds of Giftcards At Unrivalled  <br /><span class="ucap">Amazing Rates</span></h1>
                                    <p class="lead animate-bottom delayms7">We buy all kinds of Giftcards, ranging from Amazon, iTunes, Steam,Sephora,Nordstrom,Googleplay etc.</p>

                                    <ul class="btns animate-bottom delayms9">
                                        <li><a href="#" class="btn">Get Started</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner/Slider -->
    @endif
</header>
