@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Card Trade Transactions</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Card Trades</h4>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover
                                dt-responsive nowrap" id="datatable-buttons"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Payable</th>
                                        <th scope="col">Method</th>
                                        <th scope="col">Option</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($card_transactions as $card_transaction)
                                        <tr>
                                            <td>{{$card_transaction->created_at}}</td>
                                            <td>{{$card_transaction->user->username}}</td>
                                            <td>{{$card_transaction->card->name}}</td>
                                            <td>{{$card_transaction->country_id != null ?  $card_transaction->country->name : $card_transaction->other_country}}</td>
                                            <td>{{$card_transaction->rate != null ? $card_transaction->rate : "No rate" }}</td>
                                            <td>{{$card_transaction->denomination->value}}</td>
                                            <td>{{$card_transaction->amount_payable != null ? $card_transaction->amount_payable : "Not cal. yet"}}</td>
                                            <td>{{$card_transaction->payment_type}}</td>
                                            <td>{{$card_transaction->sell_option_id == 1 ? "Ecode" : "Card Upload"}}</td>
                                            <td>
                                                @if($card_transaction->status == 0)
                                                    <span class="badge badge-warning font-size-11">Pending</span>
                                                @elseif($card_transaction->status == 1)
                                                    <span class="badge badge-success font-size-11">Completed</span>
                                                @else
                                                    <span class="badge badge-danger font-size-11">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($card_transaction->sell_option_id == 1)
                                                    <button type="button"
                                                            class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                            data-toggle="modal" data-target=".ecodeUpload-{{$card_transaction->token}}">
                                                        <span><i class="fa fa-eye"></i></span>
                                                    </button>
                                                    @if($card_transaction->status==0)
                                                        <a href="{{route('admin.approve-walletcard-payment', ['token' => $card_transaction->token])}}" class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13">
                                                            <span><i class="fa fa-check"></i></span>
                                                        </a>
                                                    @endif
                                                @else
                                                    <a href="{{route('admin.card-images-upload', ['token' => $card_transaction->token])}}"
                                                       class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        View Details
                                                    </a>
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

        </div>
    </div>
    @foreach($card_transactions as $card_transaction)
        <div class="modal fade ecodeUpload-{{$card_transaction->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Customer's Ecode Upload</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <p>{{$card_transaction->sell_option_id == 1 ? $card_transaction->ecodeTransaction->code : "Nill"}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
