@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                @include('includes.sidebar')
                <div class="col col-lg-9 col-md-12 col-sm-12 res-m-bttm">
                    <div class="row">
                        <div class="col col-lg-4 col-md-12 col-sm-12">
                            <div class="pricing-box highlited light ucap shadow mb-15">
                                <span class="pricing-title">Total Messages</span>
                                <span class="pricing-sap mt-10"></span>
                                <span class="pricing-price"> {{count($chats)}}</span>
                                <a href="{{route('user.message')}}" class="btn btn-xs btn-outline btn-alt">View
                                    Details</a>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-12 col-sm-12">
                            <div class="pricing-box ucap shadow mb-15">
                                <span class="pricing-title">Coin Trades</span>
                                <span class="pricing-sap mt-10"></span>
                                <span class="pricing-price">{{count($coin_sellings) + count($coin_buyings)}}</span>
                                <a href="{{route('user.coin-transactions')}}" class="btn btn-xs btn-outline btn-color">View
                                    Details</a>
                            </div>

                        </div>
                        <div class="col col-lg-4 col-md-12 col-sm-12">
                            <div class="pricing-box ucap shadow mb-15">
                                <span class="pricing-title">Gift Card Trades</span>
                                <span class="pricing-sap mt-10"></span>
                                <span class="pricing-price">{{count($cards)}}</span>
                                <a href="{{route('user.card-transactions')}}" class="btn btn-xs btn-outline btn-color">View
                                    Details</a>
                            </div>

                        </div>

                    </div>

                    <div class="box round shadow-alt mb-15">
                        <div class="d-flex justify-content-between">
                            <h6 class="ucap">Latest Card Trades</h6>
                            <a href="#" data-toggle="modal" data-target="#leaveReview"><span><i
                                        class="fa fa-commenting"></i> &nbsp;</span><b>Leave a Review</b></a>
                        </div>
                        <p class="small">Here are the list of your five(5) latest card transactions with
                            us.
                            Check Card Trade to view all your card trades</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Payable</th>
                                    <th scope="col">Option</th>
                                    <th scope="col">user Approval</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($card_selling_transactions as $key =>  $card_selling)
                                    <tr>
                                        <th>{{$card_selling->card->name}}</th>
                                        <td>
                                            @if($card_selling->country_id != null)
                                                {{$card_selling->country->name}}
                                            @else
                                                {{$card_selling->other_county}}
                                            @endif
                                        </td>
                                        <td>
                                            @if($card_selling->rate != null)
                                                {{$card_selling->rate}}
                                            @else
                                                pending
                                            @endif
                                        </td>
                                        <td>
                                            @if($card_selling->amount_payable != null)
                                                {{$card_selling->amount_payable}}
                                            @else
                                                pending
                                            @endif
                                        </td>
                                        <td>
                                            @if($card_selling->sell_option_id == 1)
                                                E-code
                                            @else
                                                Card Upload
                                            @endif
                                        </td>
                                        <td>
                                            @if($card_selling->user_transaction_approval == 1)
                                                Approved
                                            @else
                                                Pending
                                            @endif
                                        </td>
                                        <td>
                                            @if($card_selling->status == 0)
                                                <div class="badge" style="background-color: orange">Pending
                                                </div>
                                            @elseif($card_selling->status == 1)
                                                <div class="badge" style="background-color: green">Completed
                                                </div>
                                            @else
                                                <div class="badge" style="background-color: red">Canceled
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($card_selling->user_transaction_approval == 0)
                                                @if($card_selling->amount_payable != null)
                                                    <a href="{{route('user.approve-transaction', ['token' => $card_selling->token])}}"
                                                       id="upload-1" data-toggle="tooltip"
                                                       data-placement="bottom"
                                                       title="Accept Transaction"><i
                                                            class="fa fa-check fa-lg"
                                                            style="color: green"></i>
                                                    </a>
                                                    <a href="{{route('user.cancel-transaction', ['token' => $card_selling->token])}}"
                                                       id="upload-1" data-toggle="tooltip"
                                                       data-placement="bottom"
                                                       title="Accept Transaction"><i
                                                            class="fa fa-times fa-lg"
                                                            style="color: red"></i>
                                                    </a>
                                                @else
                                                    No Action
                                                @endif
                                            @else
                                                @if($card_selling->sell_option_id == 1)
                                                    <a href="#" id="upload-1" data-toggle="modal"
                                                       data-placement="bottom"
                                                       data-target="#view-ecode-{{$key}}"
                                                       title="View Your E-code"><i
                                                            class="fa fa-eye fa-lg"
                                                            style="color: mediumblue "></i>
                                                    </a> <b>/</b>
                                                @else
                                                    <a href="{{route('view-uploaded-resources', ['token' => $card_selling->token])}}"
                                                       id="upload-1" data-toggle="tooltip"
                                                       data-placement="bottom"
                                                       title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                            class="fa fa-picture-o fa-lg"
                                                            style="color: mediumblue"></i>
                                                    </a> <b>/</b>
                                                @endif
                                                <a href="#" id="proof-1" data-toggle="tooltip"
                                                   data-placement="bottom" title="View Our Payment Proof"><i
                                                        class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                        data-toggle="modal"
                                                        data-target="#admin-card-payment-proof-{{$key}}"></i>*</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="box round shadow-alt mb-15">
                        <div class="d-flex justify-content-between">
                            <h6 class="ucap">Latest Coin Trades</h6>
                            <a href="#" data-toggle="modal" data-target="#leaveReview"><span><i
                                        class="fa fa-commenting"></i> &nbsp;</span><b>Leave a Review</b></a>
                        </div>
                        <p class="small">Here are the list of your five(5) latest coin transactions with
                            us.
                            Check coin trade to view all your coin trades</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Bought/Sold</th>
                                    <th scope="col">Amount($)</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Payable</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($coin_selling_transactions as $key => $sellings)
                                    <tr>
                                        <td>{{$sellings->coin->name}}</td>
                                        <td>Sold</td>
                                        <td>{{$sellings->coin_amount}}</td>
                                        <td>{{$sellings->rate_amount}}</td>
                                        <td>{{$sellings->amount_payable}}</td>
                                        <td>
                                            @if($sellings->status == 0)
                                                <div class="badge" style="background-color: orange">Pending
                                                </div>
                                            @elseif($sellings->status == 1)
                                                <div class="badge" style="background-color: green">Completed
                                                </div>
                                            @else
                                                <div class="badge" style="background-color: red">Canceled
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{$sellings->created_at}}</td>
                                        <td>
                                            <a href="#" id="upload-6" data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="View Your Uploaded Payment Proof/Transfer Snapshot"><i
                                                    class="fa fa-picture-o fa-lg" style="color: mediumblue"
                                                    data-toggle="modal"
                                                    data-target="#payment-coin-selling-proof-{{$key}}"></i></a> <b>/</b>
                                            <a href="#" id="proof-6" data-toggle="tooltip"
                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                    data-toggle="modal"
                                                    data-target="#admin-coin-selling-proof-{{$key}}"></i>*</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($coin_buyings_transactions as $key =>  $buyings)
                                    <tr>
                                        <td>{{$buyings->coin->name}}</td>
                                        <td>Bought</td>
                                        <td>{{$buyings->amount}}</td>
                                        <td>{{$buyings->buying_rate}}</td>
                                        <td>{{$buyings->coin_value}}</td>
                                        <td>
                                            @if($buyings->status == 0)
                                                <div class="badge" style="background-color: orange">Pending
                                                </div>
                                            @elseif($buyings->status == 1)
                                                <div class="badge" style="background-color: green">Completed
                                                </div>
                                            @else
                                                <div class="badge" style="background-color: red">Canceled
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{$buyings->created_at}}</td>
                                        <td>
                                            <a href="#" id="upload-6" data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="View Your Uploaded Payment Proof/Transfer Snapshot"><i
                                                    class="fa fa-picture-o fa-lg" style="color: mediumblue"
                                                    data-toggle="modal"
                                                    data-target="#payment-coin-buying-proof-{{$key}}"></i></a> <b>/</b>
                                            <a href="#" id="proof-6" data-toggle="tooltip"
                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                    data-toggle="modal"
                                                    data-target="#admin-coin-buying-proof-{{$key}}"></i>*</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="box round shadow-alt mb-15">
                        <h6 class="ucap">Our Coin Rates</h6>
                        <p class="small">This table shows our top five(5) coin rates. Check the rates page to view
                            all coin rates</p>
                        <div class="table-responsive" id="coins-rates-table">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($coin_rates as $rate)
                                    <tr>
                                        <th scope="row">{{$rate->id}}</th>
                                        <th scope="row">{{$rate->coin->name}}</th>
                                        <td>{{$rate->usd_rate}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="box round shadow-alt mb-15">
                        <h6 class="ucap">Our Gift Card Rates</h6>
                        <p class="small">This table shows our top five(5) gift card rates. Check the rates page to
                            view all gift card rates</p>
                        <div class="table-responsive" id="giftcards-rates-table">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($some_card_rates as $card_rate)
                                    <tr>
                                        <th scope="row">{{$card_rate->card->name}}</th>
                                        <td>{{$card_rate->country->name}}</td>
                                        <td>{{$card_rate->rate}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!--End Features Box -->
    @foreach($coin_selling_transactions as $key => $sellings)
        <div class="modal" tabindex="-1" id="payment-coin-selling-proof-{{$key}}" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Your Proof of Payment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        @if($sellings->payment_proof != null)
                            <div class="form-field form-m-bttm">
                                <img src="{{asset('uploads/'.$sellings->payment_proof)}}" alt="">
                            </div>
                        @else
                            <p>You havent uploaded any payment proof</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i
                                    class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($coin_selling_transactions as $key => $sellings)
        <div class="modal" tabindex="-1" id="admin-coin-selling-proof-{{$key}}" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Admin Proof of Payment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        @if($sellings->platform_payment_proof != null)
                            <div class="form-field form-m-bttm">
                                <img src="{{asset('uploads/'.$sellings->platform_payment_proof)}}" alt="">
                            </div>
                        @else
                            <p>No Payment Proof Has Been Uploaded Yet</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i
                                    class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($coin_buyings_transactions as $key => $buyings)
        <div class="modal" tabindex="-1" id="payment-coin-buying-proof-{{$key}}" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Your Proof of Payment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        @if($buyings->payment_proof != null)
                            <div class="form-field form-m-bttm">
                                <img src="{{asset('uploads/'.$buyings->payment_proof)}}" alt="">
                            </div>
                        @else
                            <p>You havent uploaded any payment proof</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i
                                    class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($coin_buyings_transactions as $key => $buyings)
        <div class="modal" tabindex="-1" id="admin-coin-buying-proof-{{$key}}" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Admin Proof of Payment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        @if($buyings->platform_payment_proof != null)
                            <div class="form-field form-m-bttm">
                                <img src="{{asset('uploads/'.$buyings->platform_payment_proof)}}" alt="">
                            </div>
                        @else
                            <p>No Payment Proof Has Been Uploaded Yet</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i
                                    class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    {{--User Payment/Transfer Proof For Coin Modal--}}
    @foreach($card_selling_transactions as $key => $card_selling)
        <div class="modal" tabindex="-1" id="view-ecode-{{$key}}" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Your Uploaded Ecode</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-field form-m-bttm">
                            @if($card_selling->sell_option_id == 1)
                                <p>{{$card_selling->ecodeTransactions->code}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i
                                    class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{--User Payment/Transfer Proof For Coin Modal--}}
    @foreach($card_selling_transactions as $key => $card_selling)
        <div class="modal" tabindex="-1" id="admin-card-payment-proof-{{$key}}" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="modal-title">Admin Payment Proof</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-field form-m-bttm">
                            @if($card_selling->platform_payment_proof != null)
                                <img src="{{asset('uploads/'.$card_selling->platform_payment_proof)}}" alt="">
                            @else
                                <p>No Payment Proof Uploaded Yet</p>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i
                                    class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('script_contents')
    <script type="text/javascript">
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
@endsection
