@extends('layouts.app')
@section('contents')
    <!--Section -->
    <div class="section section-pad bg-grey">
        <div class="container">
            <div class="row row-vm">
                <div class="col-md-5">
                    <div class="round mgr--30 res-m-bttm"><img src="{{asset('mathayo.jpg')}}" alt="photo-md" class="img-shadow"></div>
                </div>
                <div class="col-md-6 col-md-offset-1 ">
                    <div class="text-block">
                        <h2>About Mathayo Funds</h2>
                        <h4>We are the Number 1 Giftcard and Cryptocurrency (Bitcoin, Ethereum etc.) Trader in Nigeria</h4>
                        <p>We Buy All kinds of giftcards and Bitcoin ranging from:

                            Amazon Gift card, iTunes Giftcard, Steam wallet, Sephora Giftcard, Vanilla, Nordstrom, Googleplay Giftcard etc...

                            Sell to us now and benefit from our amazing rates, and you can also earn more through our affiliate marketing program, as you refer to us, you earn some discounts..</p>

                        <blockquote>"Sell your Giftcards and Bitcoin to Mathayo Funds, We are 100% genuine, we pay instantly, our rates are amazing and we have some discounts and bonuses for our affiliate marketers."
                            <br>
                            Yemi Elesho (officialyemielesho) - Comedian, Mathayo Funds Ambassador</blockquote>
                        <a href="#" class="btn btn-alt">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!--Section -->
    <div class="section section-pad has-bg light dark-filter">
        <div class="imagebg has-parallax">
            <img src="{{asset('images/calc-bg.jpg')}}" alt="calc-bg">
        </div>
        <div class="container">
            <div class="row row-vm">
                <div class="col-md-5">
                    <div class="bitcoin-calculator">
                        <div class="clearfix">
                            <div class="form-field form-m-bttm">
                                <input id="coin-amount" name="btc-amount" value="0" placeholder="Worth of Coin in ($)" class="form-control required" aria-required="true" type="number" min="0">
                            </div>
                            <div class="form-field form-m-bttm">
                                <select id="coin-type" name="quote-request-hear" class="form-control" aria-invalid="false">
                                    @foreach($coins as $key => $coin)
                                        <option value="{{$coin->id}}">{{$coin->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-field form-button form-m-bttm">
                                <button id="calculate-button" class="btn btn-alt">Calculate</button>
                            </div>
                        </div>
                    </div>
                    {{--<a href="#" class="btn">Buy now</a>--}}
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="text-block text-center">
                        <h2><span class="price-for">Currency Calculator</span></h2>
                        <h1 id="calculate-result">&#8358; 0</h1>
                        <h4> <span class="price-for"> Happy Trading </span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!--Section -->
    <div class="section section-pad">
        <div class="container">
            <div class="section-head">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <h2 class="heading-section">Service we Provide</h2>
                        <p>The Easiest and Most Secure Platform to Trade Bitcoins and Giftcards for instant Cash at Amazing Rates.</p>
                    </div>
                </div>
            </div>
            <div class="gaps size-3x"></div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="box box-small-dot box-alt-bg round">
                        <span class="font-icon"><span class="pe pe-7s-lock"></span></span>
                        <h4>Bitcoin Trading</h4>
                        <p>Trade your Bitcoin, Ethereum or any other cryptocurrency for cash or RMB, our rates are amazing and we pay instantly.</p>
                    </div>
                    <div class="gaps size-1-5x"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box box-small-dot box-alt-bg round">
                        <span class="font-icon"><span class="pe pe-7s-lock"></span></span>
                        <h4>Security Protected</h4>
                        <p>Create a membership account with us, Our server is secured, your wallet and your earnings are safe and you can withdraw anytime you want.</p>
                    </div>
                    <div class="gaps size-1-5x"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box box-small-dot box-alt-bg round">
                        <span class="font-icon"><span class="pe pe-7s-repeat"></span></span>
                        <h4>24/7 Support</h4>
                        <p>Our customer service support center is always ready and available to attend to every needs and complaints of our customers 24/7.</p>
                    </div>
                    <div class="gaps size-1-5x"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box box-small-dot box-alt-bg round">
                        <span class="font-icon"><span class="pe pe-7s-wallet"></span></span>
                        <h4>Payment Methods</h4>
                        <p>Our payment methods are flexible and easy, you receive your payment instantly. Ranging from Bank Transfer to any other Cryptocurrency</p>
                    </div>
                    <div class="gaps size-1-5x"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box box-small-dot box-alt-bg round">
                        <span class="font-icon"><span class="pe pe-7s-wallet"></span></span>
                        <h4>Registered Company</h4>
                        <p>The Mathayo Funds Company is a registered business under the CAC, you have nothing to worry about regarding the safety of your money</p>
                    </div>
                    <div class="gaps size-1-5x"></div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box box-small-dot box-alt-bg round">
                        <span class="font-icon"><span class="pe pe-7s-wallet"></span></span>
                        <h4>Bitcoin Wallet Options</h4>
                        <p>We buy Bitcoins from any kind of wallet, you have nothing to worry about if your wallet is Paxful, Blockchain, Coinbase or even cash app</p>
                    </div>
                    <div class="gaps size-1-5x"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!-- Features Box -->
    <div class="section section-pad">
        <div class="container">
            <div class="row text-center">
                <h1>How to Get Started</h1>
                <p>You can sell bitcoin & giftcards to us without signing up. However, you need to sign up for faster transactions.</p>

                <br>
                <div class="col-md-4 res-m-bttm-lg">
                    <div class="box-alt box-dot box-direction box-direction-one">
                        <div class="image-icon">
                            <img src="images/box-icon-i.png" alt="box-icon">
                        </div>
                        <h5>Sign up with US</h5>
                        <p>The registration process is quick and easy, and your login details will be made active the moment you click on the confirm button.</p>
                    </div>
                </div>
                <div class="col-md-4 res-m-bttm-lg">
                    <div class="box-alt box-dot box-direction box-direction-two">
                        <div class="image-icon">
                            <img src="images/box-icon-j.png" alt="box-icon">
                        </div>
                        <h5>Giftcards Trading</h5>
                        <p>We buy all kinds of Giftcards, ranging from Amazon, iTunes, Steam,Sephora,Nordstrom,Googleplay etc.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-alt box-dot">
                        <div class="image-icon">
                            <img src="images/box-icon-k.png" alt="box-icon">
                        </div>
                        <h5>Bitcoins</h5>
                        <p>Trading Bitcoin is easy on our Platforms, we also have amazing rates for bulk and large bitcoins. Start trading with us now. </p>
                    </div>
                </div>
                {{--<a href="#" class="btn btn-alt d-flex justify-content-center">get started</a>--}}
            </div>
        </div>
    </div><!--End Features Box -->

    <!--Section.. Customer Review -->
    <div class="section section-pad">
        <div class="container">
            <div class="section-head">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <h2 class="heading-section">Customer Review</h2>
                    </div>
                </div>
            </div>
            <div class="gaps size-3x"></div>
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <div class="testimonial-carousel has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true">
                        @foreach($reviews as $review)
                            <div class="testimonial-item">
                                <div class="client-photo circle">
                                    <img src="{{asset('uploads/'.$review->user->icon)}}" alt="client">
                                    <em class="fa fa-quote-right"></em>
                                </div>
                                <blockquote>
                                    {{$review->message}}
                                </blockquote>
                                <div class="client-info">
                                    <h6>{{$review->user->username}}</h6>
                                    <span>Customer</span>
                                </div>
                            </div>
                        @endforeach
                        @foreach($reviews as $review)
                            <div class="testimonial-item">
                                <div class="client-photo circle">
                                    <img src="{{asset('uploads/'.$review->user->icon)}}" alt="client">
                                    <em class="fa fa-quote-right"></em>
                                </div>
                                <blockquote>
                                    {{$review->message}}
                                </blockquote>
                                <div class="client-info">
                                    <h6>{{$review->user->username}}</h6>
                                    <span>Customer</span>
                                </div>
                            </div>
                        @endforeach

                        {{--<div class="testimonial-item">
                            <div class="client-photo circle">
                                <img src="{{asset('mathayo-profile.png')}}" alt="client">
                                <em class="fa fa-quote-right"></em>
                            </div>
                            <blockquote>Sell your Giftcards and Bitcoin to Mathayo Funds, We are 100% genuine, we pay instantly, our rates are amazing and we have some discounts and bonuses for our affiliate marketers.</blockquote>
                            <div class="client-info">
                                <h6>Yemi Elesho (officialyemielesho)</h6>
                                <span>Comedian</span>
                            </div>
                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Section -->

    <!-- Section -->
    <div class="section section-pad-sm cta-small light">
        <div class="cta-block">
            <div class="container">
                <div class="row mobile-center">
                    <div class="col-md-12">
                        <div class="cta-sameline">
                            <h3>Open account for free and start trading Bitcoins and Gift Cards now!</h3>
                            <a class="btn btn-outline btn-alt btn-md" href="#">get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!--Section Blog Posts -->
    <div class="section section-pad">
        <div class="container">
            <div class="section-head">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <h2 class="heading-section">Our latest blog posts</h2>
                        <p>Stay connected, get all latest updates about Mathayo Funds</p>
                    </div>
                </div>
            </div>
            <div class="gaps size-3x"></div>
            <div class="row text-center">
                @foreach($blogs as $blog)
                    <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm-lg">
                        <div class="blog-post shadow round">
                            <div class="post-thumb"><a href="{{route('blogs.show', $blog->id)}}"><img src="{{asset($blog->image)}}" alt="post"></a></div>
                            <div class="post-entry">
                                <div class="post-meta"><span>Posted {{$blog->created_at->format('j F, Y')}}</span></div>
                                <h5><a href="{{route('blogs.show', $blog->id)}}">{{$blog->title}}</a></h5>
                                <a href="{{route('blogs.show', $blog->id)}}" class="btn-icon"><span class="pe pe-7s-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="gaps size-2x"></div>
            <div class="section-head">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <a href="{{route('blogs.index')}}" class="btn btn-alt mt-25">Goto Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_contents')
    <script type="text/javascript">
        $(window).on('load', function () {
            $('button#calculate-button').on('click', function () {
                let coin_type = $('#coin-type').val();
                let coin_amount = $('#coin-amount').val();
                let eth_rate = '{{$eth_rate->usd_rate}}';
                let btc_rate = '{{$btc_rate->usd_rate}}';
                if(coin_type === '1'){
                    let result = btc_rate * coin_amount;
                    $('#calculate-result').html('&#8358; ' + result);
                }
                if (coin_type === '2'){
                    let result = eth_rate * coin_amount ;
                    $('#calculate-result').html('&#8358; ' + result);
                }
            });
            $('input#coin-amount').on('keyup', function () {
                let coin_type = $('#coin-type').val();
                let coin_amount = $('#coin-amount').val();
                let eth_rate = '{{$eth_rate->usd_rate}}';
                let btc_rate = '{{$btc_rate->usd_rate}}';
                if(coin_type === '1'){
                    let result = btc_rate * coin_amount;
                    $('#calculate-result').html('&#8358; ' + result);
                }
                if (coin_type === '2'){
                    let result = eth_rate * coin_amount;
                    $('#calculate-result').html('&#8358; ' + result);
                }
            });
        })
    </script>
@endsection
