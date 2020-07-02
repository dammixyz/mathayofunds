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
                        <li><a href="{{route('faqs')}}">Help</a></li>
                        <li><a href="{{route('faqs')}}">Support</a></li>
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
            <a class="navbar-brand" href="{{route('homepage')}}">
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
            </div>
            <!-- MainNav -->
            <nav class="navbar-collapse collapse" id="mainnav">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    {{--<li><a href="{{route('user.trade-coin')}}">Trade Coins</a></li>
                    <li><a href="{{route('user.trade-card')}}">Trade Cards</a></li>--}}
                    <li class="dropdown"><a href="#" class="dropdown-toggle">Trade<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('user.trade-coin')}}">Trade Coins</a></li>
                            <li><a href="{{route('user.trade-card')}}">Trade Cards</a></li>
                        </ul>
                    </li>
                    @if(Auth::check())
                        <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle">My Transactions<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('user.coin-transactions')}}"> <span class="fas fa-coins"></span> Coins Transactions</a></li>
                                <li><a href="{{route('user.card-transactions')}}"><span class="fa fa-credit-card"></span> Cards Transactions</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                    <li><a href="{{route('about-us')}}">About Us</a></li>
                    <li><a href="{{route('faqs')}}">FAQs</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle">Rates<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('view-card-rates')}}"><span class="fa fa-credit-card"></span> Card Rates</a></li>
                            <li><a href="{{route('view-coin-rates')}}"> <span class="fas fa-coins"></span> Coin Rates</a></li>
                        </ul>
                    </li>
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
                                        <li><a href="{{route('user.trade-coin')}}" class="btn">Trade Coin With Us</a></li>
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
                                        <li><a href="{{route('user.trade-card')}}" class="btn">Trade Card With Us</a></li>
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
