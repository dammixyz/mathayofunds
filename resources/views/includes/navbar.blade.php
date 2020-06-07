<nav class="menu-classic menu-fixed" data-menu-anima="fade-in">
    <div class="menu-mini scroll-hide">
        <div class="container">
            <ul>
                <li><i class="im-phone"></i> +2348186818135 </li>
                <li><i class="im-envelope"></i> contact@mathayofunds.com</li>
            </ul>
            <div class="menu-right">
                {{--<form role="search" method="get" id="searchform" class="search-bar">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <input type="submit" value="Go">
                </form>--}}
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
            <a href="{{route('welcome')}}">
                {{--<h4 class="logo-default" style="text-decoration: none; text-underline: none;">Mathayo Funds</h4>
                <h4 class="logo-retina" style="text-decoration: none; text-underline: none;">Mathayo Funds</h4>--}}

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
                @auth()
                <li class="dropdown">
                    <a href="#">Transactions</a>
                    <ul>
                        <li><a href="#">Sell</a></li>
                        <li><a href="#">Buy</a></li>
                    </ul>
                </li>
                @endauth

            </ul>
            <div class="menu-right">
                <!--SEARCH B-->
            {{--<form role="search" method="get" id="searchform" class="search-btn">
                <div class="search-box-menu">
                    <input type="text" placeholder="Search ...">
                    <i></i>
                </div>
            </form>--}}
            <!--SOCIAL ICONS-->
            {{--<div class="icon-links icon-social social-colors-hover">
                <a target="_blank" class="facebook" href="#"><i class="icon-facebook"></i></a>
                <a target="_blank" class="twitter" href="#"><i class="icon-twitter"></i></a>
                <a target="_blank" class="linkedin" href="#"><i class="icon-linkedin"></i></a>
            </div>--}}

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
