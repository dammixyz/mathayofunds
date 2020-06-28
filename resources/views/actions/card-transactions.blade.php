@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-sm-6 res-m-bttm">
                    <div class="box round shadow-alt mb-15">
                        <div class="d-flex justify-content-between">
                            <h6 class="ucap">Latest Card Trades</h6>
                            <a href="#" data-toggle="modal" data-target="#leaveReview"><span><i class="fa fa-commenting"></i> &nbsp;</span><b>Leave a Review</b></a>
                        </div>
                        <p class="small">History of all the cards trades you made with us</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sidebar-right wgs-box">
                                    <div class="wgs-search">
                                        <div class="wgs-content">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="search-coin-trade"  placeholder="Search Coin Trade...">
                                                <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                        <div class="gaps size-1x"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" >
                            <table class="table table-hover" id="coinTable">
                                <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Payable</th>
                                    <th scope="col">Option</th>
                                    <th scope="col">user Approval</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
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
                                        <td>{{$card_selling->created_at}}</td>
                                        <td>
                                            @if($card_selling->user_transaction_approval == 0)
                                                @if($card_selling->amount_payable != null)
                                                    <a href="{{route('user.approve-transaction', ['token' => $card_selling->token])}}" id="upload-1" data-toggle="tooltip"
                                                       data-placement="bottom"
                                                       title="Accept Transaction"><i
                                                            class="fa fa-check fa-lg"
                                                            style="color: green"></i>
                                                    </a>
                                                    <a href="{{route('user.cancel-transaction', ['token' => $card_selling->token])}}" id="upload-1" data-toggle="tooltip"
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
                                                    <a href="{{route('view-uploaded-resources', ['token' => $card_selling->token])}}" id="upload-1" data-toggle="tooltip"
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
                </div>
            </div>
        </div>
    </div><!--End Features Box -->
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
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
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
                        <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
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

            /*Data Table*/
            const coinTable = $('#coinTable').DataTable({
                responsive: true,
                bPaginate: true,
                bLengthChange: false,
                bFilter: true,
                bInfo: true,
                bAutoWidth: true,
                pageLength : 15,
                order:[[6,'desc']]
            });
            /*Remove the default search box*/
            $('#coinTable_filter').remove()
            /*Add datatable search functionality to custom search box*/
            $('#search-coin-trade').keyup(function(){
                coinTable.search($(this).val()).draw() ;
            })
        })
    </script>
@endsection
