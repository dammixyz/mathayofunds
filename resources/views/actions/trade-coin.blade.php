@extends('layouts.app')
@section('contents')
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
                                                           @foreach($bitcoin_platforms as $bitcoin_platform)
                                                                <h6 class="ucap">{{$bitcoin_platform->name}}</h6>
                                                                <img src="{{asset($bitcoin_platform->qr_code)}}" alt="box-image"
                                                                     class="box-image">
                                                                <h5 class="small-wallet wallet-address-text" id="bitcoin{{$bitcoin_platform->name}}">
                                                                    {{$bitcoin_platform->wallet_address}}
                                                                </h5>
                                                                <span>
                                                                    <button onclick='copyBitcoin{{$bitcoin_platform->name}}("bitcoin{{$bitcoin_platform->name}}")' class="copy-button">
                                                                        <i class="fa fa-copy"></i>&nbsp; Copy Address
                                                                    </button>
                                                                </span>
                                                                <br>
                                                           @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="ethereum-wallet-tab">
                                                    <div class="row">
                                                        <div
                                                            class="box round shadow-alt pricing-box highlited light ucap shadow">
                                                            <h4 class="ucap">Ethereum wallet details</h4>
                                                            @foreach($ethereum_platforms as $ethereum_platform)
                                                                <hr>
                                                                <h6 class="ucap">{{$ethereum_platform->name}}</h6>
                                                                <img src="{{asset($ethereum_platform->qr_code)}}" alt="box-image"
                                                                     class="box-image">
                                                                <h5 class="small-wallet" id="ethereum{{$ethereum_platform->name}}"
                                                                    style="word-wrap: break-word; font-family: OpenSans; margin-left: 17px; margin-right: 17px;">
                                                                    {{$ethereum_platform->wallet_address}}
                                                                </h5>
                                                                <span>
                                                                    <button onclick="copyEthereumBlockchain('ethereum{{$ethereum_platform->name}}')" class="copy-button">
                                                                        <i class="fa fa-copy"></i>&nbsp; Copy Address
                                                                    </button>
                                                                </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                        <div class="box round " style="background: #fff1e0;">
                                            <form action="{{route('submit-sell-coin-form')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <h5 style="font-family: OpenSans; font-weight: bold">Please Fill All
                                                            Fields Correctly</h5>
                                                        <div class="clearfix">
                                                            <div class="form-field form-m-bttm">
                                                                <select name="coin_type" class="form-control" id="coin_type_sell"
                                                                        aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Coin</option>
                                                                    @foreach($coins as $coin)
                                                                         <option value="{{$coin->id}}" id="{{$coin->name}}-sell">{{$coin->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-field form-m-bttm" >
                                                                <input id="sell-coin-amount" name="sell_coin_amount"
                                                                       placeholder="Enter USD equivalent of the coin amount"
                                                                       class="form-control required" aria-required="true"
                                                                       type="number" required>
                                                            </div>
                                                            <div class="form-field form-m-bttm " >
                                                                <select name="platform" class="form-control" id="bitcoin-platform"
                                                                        aria-invalid="false" >
                                                                    <option value="" selected disabled>Select Which Platform You Used</option>
                                                                    @foreach($bitcoin_platforms as $platform)
                                                                        <option value="{{$platform->id}}">{{$platform->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-field form-m-bttm" >
                                                                <select name="platform" class="form-control" id="ethereum-platform"
                                                                        aria-invalid="false" >
                                                                    <option value="" selected disabled>Select Which Platform You Used</option>
                                                                    @foreach($ethereum_platforms as $eplatform)
                                                                        <option value="{{$eplatform->id}}">{{$eplatform->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-field form-m-bttm">
                                                                <select name="payment_method" class="form-control" id="walletBank"
                                                                        aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Payment Option</option>
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
                                                                    <input name="bank" value="{{$account_details->bank}}"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" disabled required>
                                                                </div>
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="account_no" class="text-sm">Bank Account
                                                                        Number</label>
                                                                    <input name="account_no" value="{{$account_details->account_number}}"
                                                                           class="form-control required" aria-required="true"
                                                                           type="text" disabled required>
                                                                </div>
                                                                <div class="form-field form-m-bttm">
                                                                    <label for="full_name" class="text-sm">Full Name (As per
                                                                        bank)</label>
                                                                    <input name="full_name" value="{{$account_details->name}}"
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
                                                                    <input type="file" name="payment-proof" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-bitcoin-sell" accept="image/*" required>
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
                                                            <h4>$1 = &#8358; {{$bitcoin_rate->usd_rate}}</h4>
                                                            <hr>
                                                            <h4>Ethereum</h4>
                                                            <h4>$1 = &#8358; {{$ethereum_rate->usd_rate}}</h4>
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
                                                    First Bank
                                                </h6>
                                                <h5 class="ucap">Account Number</h5>
                                                <h6 class="small-wallet wallet-address-text" id="bitcoinBlockchain">
                                                    0283929445
                                                </h6>
                                                <h5 class="ucap">Company Name</h5>
                                                <h6 class="small-wallet wallet-address-text" id="bitcoinBlockchain">
                                                    Mathayo Funds
                                                </h6>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                                        <div class="box round " style="background: #fff1e0;">
                                            <form action="{{route('submit-buy-coin-form')}}" method="post" enctype="multipart/form-data" >
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <h5 style="font-family: OpenSans; font-weight: bold">
                                                            Please Fill All Fields Correctly
                                                        </h5>
                                                        <div class="clearfix">
                                                            <div class="form-field form-m-bttm">
                                                                <select name="coin_type" class="form-control" id="coins_type_buy"
                                                                        aria-invalid="false" required>
                                                                    <option value="" selected disabled>Select Coin</option>
                                                                    @foreach($coins as $coin)
                                                                        <option value="{{$coin->id}}" id="{{$coin->name}}-buy">{{$coin->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-field form-m-bttm">
                                                                <input id="buy-coin-amount" name="coin_amount" placeholder="Enter USD Equivalent of Coin Amount"
                                                                       class="form-control required amount" aria-required="true"
                                                                       type="number" min="0" required>
                                                            </div>
                                                            <div class="form-field form-m-bttm">
                                                                <input name="wallet_address"
                                                                       placeholder="Enter Your Wallet Address"
                                                                       class="form-control required" aria-required="true"
                                                                       type="text" required>
                                                            </div>
                                                            <div class="form-field form-m-bttm " >
                                                                <select name="platform" class="form-control" id="buy-bitcoin-platform"
                                                                        aria-invalid="false" >
                                                                    <option value="" selected disabled>Select Platform</option>
                                                                    @foreach($bitcoin_platforms as $platform)
                                                                        <option value="{{$platform->id}}">{{$platform->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-field form-m-bttm" >
                                                                <select name="platform" class="form-control" id="buy-ethereum-platform"
                                                                        aria-invalid="false">
                                                                    <option value="" selected disabled>Select Platform</option>
                                                                    @foreach($ethereum_platforms as $eplatform)
                                                                        <option value="{{$eplatform->id}}">{{$eplatform->name}}</option>
                                                                    @endforeach
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
                                                                    <input type="file" name="payment_proof" class="custom-file-container__custom-file__custom-file-input" id="payment_proof-bitcoin-buy" accept="image/*" required>
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
                                                            <h4>$1 = &#8358; {{$bitcoin_rate->usd_rate}}</h4>
                                                            <hr>
                                                            <h4>Ethereum</h4>
                                                            <h4>$1 = &#8358; {{$ethereum_rate->usd_rate}}</h4>
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
@endsection
@section('script_contents')
    <script type="text/javascript">
        $(window).on('load', function () {
            $('input#sell-coin-amount').on('keyup', function () {
                console.log('its here');
                let coin_type = $('select#coin_type_sell').val();
                let coin_amount = $('input#sell-coin-amount').val();
                let btc_rate = '{{$bitcoin_rate->usd_rate}}';
                let eth_rate = '{{$ethereum_rate->usd_rate}}';
                if(coin_type === '1') {
                    let result = btc_rate * coin_amount;
                    $('#bitcoin-trade-sell').html('We will pay &#8358 ' + result + ' for ' + coin_amount + ' (Bitcoin trade)');
                }
                if (coin_type === '2'){
                    let result = eth_rate * coin_amount;
                    $('#ethereum-trade-sell').html('We will pay &#8358 ' + result + ' for ' + coin_amount + ' (Ethereum trade)');
                }

            });

            $('input#buy-coin-amount').on('keyup', function () {
                let coin_type = $('select#coins_type_buy').val();
                let coin_amount = $('input#buy-coin-amount').val();
                let btc_rate = '{{$bitcoin_rate->usd_rate}}';
                let eth_rate = '{{$ethereum_rate->usd_rate}}';
                if(coin_type === '1') {
                    let result = btc_rate * coin_amount;
                    $('#bitcoin-trade-buy').html('You will pay &#8358 ' + result + ' for ' + coin_amount + ' (Bitcoin trade)');
                }
                if (coin_type === '2'){
                    let result = eth_rate * coin_amount;
                    $('#ethereum-trade-buy').html('You will pay &#8358 ' + result + ' for ' + coin_amount + ' (Ethereum trade)');
                }

            });
        })
    </script>
@endsection
