@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-sm-6 res-m-bttm">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 res-m-bttm">
                            <div class="pricing-box highlited light ucap shadow">
                                <span class="pricing-title">Total Transactions</span>
                                <span class="pricing-sap mt-10"></span>
                                <span class="pricing-price">200</span>
                                <a href="#" class="btn btn-xs btn-outline btn-alt">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 res-m-bttm">
                            <div class="pricing-box ucap shadow">
                                <span class="pricing-title">Coin Trades</span>
                                <span class="pricing-sap mt-10"></span>
                                <span class="pricing-price">120</span>
                                <a href="#" class="btn btn-xs btn-outline btn-color">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 res-m-bttm">
                            <div class="pricing-box ucap shadow">
                                <span class="pricing-title">Gift Card Trades</span>
                                <span class="pricing-sap mt-10"></span>
                                <span class="pricing-price">60</span>
                                <a href="#" class="btn btn-xs btn-outline btn-color">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-15">
                        <div class="col-md-12 col-sm-6 res-m-bttm">
                            <!-- Transactions -->
                            <div class="features-box section section-pad no-pb no-pt">
                                <div class="container">
                                    <div class="row">
                                        <div class="box round shadow-alt mb-15">
                                            <h6 class="ucap">Latest Card Trades</h6>
                                            <p class="small">Here are the list of your five(5) latest card transactions with
                                                us.
                                                Check Card Trade to view all your card trades</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S/N</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Asset</th>
                                                        <th scope="col">You Bought/Sold</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action(s)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Ethereum</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: orange">Pending
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-1" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                    class="fa fa-picture-o fa-lg"
                                                                    style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-1" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCard"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Gift Card</td>
                                                        <td>Amazon</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: green">Completed
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-2" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                    class="fa fa-picture-o fa-lg"
                                                                    style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-2" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCard"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Bought</td>
                                                        <td>
                                                            <div class="badge" style="background-color: orangered">
                                                                Canceled
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-3" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                    class="fa fa-picture-o fa-lg"
                                                                    style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-3" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCard"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: green">Completed
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-4" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                    class="fa fa-picture-o fa-lg"
                                                                    style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-4" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCard"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: green">Completed
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-5" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Gift Card(s) and Receipt(s)"><i
                                                                    class="fa fa-picture-o fa-lg"
                                                                    style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-5" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCard"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Features Box -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-6 res-m-bttm">
                            <!-- Transactions -->
                            <div class="features-box section section-pad no-pb no-pt">
                                <div class="container">
                                    <div class="row">
                                        <div class="box round shadow-alt mb-15">
                                            <h6 class="ucap">Latest Coin Trades</h6>
                                            <p class="small">Here are the list of your five(5) latest coin transactions with
                                                us.
                                                Check coin trade to view all your coin trades</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S/N</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Asset</th>
                                                        <th scope="col">You Bought/Sold</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action(s)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Ethereum</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: orange">Pending
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-6" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Payment Proof/Transfer Snapshot"><i
                                                                    class="fa fa-picture-o fa-lg" style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#paymentTransferProof"></i></a> <b>/</b>
                                                            <a href="#" id="proof-6" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCoin"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Gift Card</td>
                                                        <td>Amazon</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: green">Completed
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-7" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Payment Proof/Transfer Snapshot"><i
                                                                    class="fa fa-picture-o fa-lg" style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#paymentTransferProof"></i></a> <b>/</b>
                                                            <a href="#" id="proof-7" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCoin"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Bought</td>
                                                        <td>
                                                            <div class="badge" style="background-color: orangered">
                                                                Canceled
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-8" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Payment Proof/Transfer Snapshot"><i
                                                                    class="fa fa-picture-o fa-lg" style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#paymentTransferProof"></i></a> <b>/</b>
                                                            <a href="#" id="proof-8" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCoin"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: green">Completed
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Payment Proof/Transfer Snapshot"><i
                                                                    class="fa fa-picture-o fa-lg" style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#paymentTransferProof"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCoin"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Gift Card</td>
                                                        <td>iTunes</td>
                                                        <td>Sold</td>
                                                        <td>
                                                            <div class="badge" style="background-color: orange">Pending
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" id="upload-10" data-toggle="tooltip"
                                                               data-placement="bottom"
                                                               title="View Your Uploaded Payment Proof/Transfer Snapshot"><i
                                                                    class="fa fa-picture-o fa-lg" style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#paymentTransferProof"></i></a> <b>/</b>
                                                            <a href="#" id="proof-10" data-toggle="tooltip"
                                                               data-placement="bottom" title="View Our Payment Proof"><i
                                                                    class="fa fa-picture-o fa-lg " style="color: mediumblue"
                                                                    data-toggle="modal"
                                                                    data-target="#adminPaymentProofCoin"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Features Box -->
                        </div>
                    </div>
                    <div class="row mb-15">
                        <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                            <div class="box round shadow-alt">
                                <h6 class="ucap">Our Coin Rates</h6>
                                <p class="small">This table shows our top five(5) coin rates. Check the rates page to view
                                    all coin rates</p>
                                <div class="table-responsive" id="coins-rates-table">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Type</th>
                                            <th scope="col">Range</th>
                                            <th scope="col">Buy</th>
                                            <th scope="col">Sell</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">BTC</th>
                                            <td><b>$</b>0 - <b>$</b>100</td>
                                            <td><b>$</b>1 - &#8358;460</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ETH</th>
                                            <td><b>$</b>0 - <b>$</b>100</td>
                                            <td><b>$</b>1 - &#8358;460</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">BTC</th>
                                            <td><b>$</b>0 - <b>$</b>100</td>
                                            <td><b>$</b>1 - &#8358;460</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ETH</th>
                                            <td><b>$</b>0 - <b>$</b>100</td>
                                            <td><b>$</b>1 - &#8358;460</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ETH</th>
                                            <td><b>$</b>0 - <b>$</b>100</td>
                                            <td><b>$</b>1 - &#8358;460</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                            <div class="box round shadow-alt">
                                <h6 class="ucap">Our Gift Card Rates</h6>
                                <p class="small">This table shows our top five(5) gift card rates. Check the rates page to
                                    view all gift card rates</p>
                                <div class="table-responsive" id="giftcards-rates-table">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Type</th>
                                            <th scope="col">Range</th>
                                            <th scope="col">Buy</th>
                                            <th scope="col">Sell</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Amazon</th>
                                            <td><b>$</b>25 - <b>$</b>100</td>
                                            <td>N/A</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">iTunes</th>
                                            <td><b>$</b>25 - <b>$</b>100</td>
                                            <td>N/A</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">PS</th>
                                            <td><b>$</b>25 - <b>$</b>100</td>
                                            <td>N/A</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">PS</th>
                                            <td><b>$</b>25 - <b>$</b>100</td>
                                            <td>N/A</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Saphora</th>
                                            <td><b>$</b>25 - <b>$</b>100</td>
                                            <td>N/A</td>
                                            <td><b>$</b>1 - &#8358;459</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!--End Features Box -->
    <div class="modal" tabindex="-1" id="adminPaymentProofCoin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Our Payment Proof</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-field form-m-bttm">
                        <img src="{{asset('mathayo-profile.png')}}" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{--User Payment/Transfer Proof For Coin Modal--}}
    <div class="modal" tabindex="-1" id="paymentTransferProof" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Your Uploaded Payment/Transfer Snapshot</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-field form-m-bttm">
                        <img src="{{asset('mathayo.jpg')}}" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                    </button>
                </div>
            </div>
        </div>
    </div>

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
