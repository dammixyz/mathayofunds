@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Coin Trade Transactions</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Coin Trade</h4>
                            <div class="table-responsive mt-1">
                                <table id="datatable-buttons3" class="table table-hover datatable dt-responsive nowrap"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Platform</th>
                                        <th scope="col">Amount ($)</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Value</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Buy/Sell</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action(s)</th>

                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($coin_buyings_transactions as $buying_transaction)
                                        <tr>
                                            <td>{{$buying_transaction->created_at}}</td>
                                            <td>{{$buying_transaction->user->username}}</td>
                                            <td>{{$buying_transaction->coin->name}}</td>
                                            <td>{{$buying_transaction->platform->name}}</td>
                                            <td>{{$buying_transaction->amount}}</td>
                                            <td>{{$buying_transaction->buying_rate}}</td>
                                            <td>{{$buying_transaction->coin_value}}</td>
                                            <td>Address</td>
                                            <td>{{$buying_transaction->coin_wallet}}</td>
                                            <td>Buy</td>
                                            <td>
                                                @if($buying_transaction->status == 0)
                                                    <span class="badge badge-warning font-size-11">Pending</span>
                                                @elseif($buying_transaction->status == 1 )
                                                    <span class="badge badge-success font-size-11">Completed</span>
                                                @else
                                                    <span class="badge badge-danger font-size-11">Cancelled</span>
                                                @endif

                                            </td>
                                            <td>
                                                <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                        data-toggle="modal" data-target=".coinUpload-{{$buying_transaction->token}}">
                                                    <span><i class="fa fa-eye"></i></span>
                                                </button>
                                                @if($buying_transaction->status == 0)
                                                    <button type="button"
                                                            class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                            data-toggle="modal" data-target=".coinProofUpload-{{$buying_transaction->token}}">
                                                        <span><i class="fa fa-check"></i></span>
                                                    </button>
                                                    <a href="{{route('admin.cancel-coinbuyings-payment', ['token' => $buying_transaction->token])}}" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light font-size-13">
                                                        <span><i class="fa fa-times"></i></span>
                                                    </a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach($coin_selling_transactions as $selling_transaction)
                                        <tr>
                                            <td>{{$selling_transaction->created_at}}</td>
                                            <td>{{$selling_transaction->user->username}}</td>
                                            <td>{{$selling_transaction->coin->name}}</td>
                                            <td>{{$selling_transaction->platform->name}}</td>
                                            <td>{{$selling_transaction->coin_amount}}</td>
                                            <td>{{$selling_transaction->rate_amount}}</td>
                                            <td>{{$selling_transaction->amount_payable}}</td>
                                            <td>{{$selling_transaction->payment_type}}</td>
                                            <td>Nil</td>
                                            <td>Sell</td>
                                            <td>
                                                @if($selling_transaction->status == 0)
                                                    <span class="badge badge-warning font-size-11">Pending</span>
                                                @elseif($selling_transaction->status == 1 )
                                                    <span class="badge badge-success font-size-11">Completed</span>
                                                @else
                                                    <span class="badge badge-danger font-size-11">Cancelled</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                        data-toggle="modal" data-target=".coinUpload-{{$selling_transaction->token}}">
                                                    <span><i class="fa fa-eye"></i></span>
                                                </button>
                                                @if($selling_transaction->payment_type == 'bank')
                                                    @if($selling_transaction->status == 0)
                                                        <button type="button"
                                                                class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                                data-toggle="modal" data-target=".coinProofUpload-{{$selling_transaction->token}}">
                                                            <span><i class="fa fa-check"></i></span>
                                                        </button>
                                                        <a href="{{route('admin.cancel-coinsellings-payment', ['token' => $selling_transaction->token])}}" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light font-size-13">
                                                            <span><i class="fa fa-times"></i></span>
                                                        </a>
                                                    @endif
                                                @else
                                                    @if($selling_transaction->status == 0)
                                                        <a href="{{route('admin.activate_coin_wallet_transaction', ['token' => $selling_transaction->token])}}">
                                                            <span><i class="fa fa-check"></i></span>
                                                        </a>
                                                        <a href="{{route('admin.cancel-coinsellings-payment', ['token' => $selling_transaction->token])}}" class="btn btn-danger btn-sm btn-rounded waves-effect waves-light font-size-13">
                                                            <span><i class="fa fa-times"></i></span>
                                                        </a>
                                                    @endif
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
    @foreach($coin_buyings_transactions as $buying_transaction)
        <div class="modal fade coinUpload-{{$buying_transaction->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Customer's Payment Proof</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <img src="{{asset('uploads/'.$buying_transaction->payment_proof)}}" class="img-fluid" alt="Responsive image">
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
    @foreach($coin_selling_transactions as $selling_transaction)
        <div class="modal fade coinUpload-{{$selling_transaction->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Customer's Payment Proof</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <img src="{{asset('uploads/'.$selling_transaction->payment_proof)}}" class="img-fluid" alt="Responsive image">
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
    @foreach($coin_buyings_transactions as $buying_transaction)
        <div class="modal fade coinProofUpload-{{$buying_transaction->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{route('admin.activate_coin_buying_transaction', ['token' => $buying_transaction->token])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Upload Payment Proof</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Payment Proof</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Coin Transactions</b> table
                            </p>
                            <div class="mt-3">
                                <label>Payment Proof</label>
                                <input type="file" class="form-control" placeholder="Upload your payment proof" name="coin_payment_proof" id="defaultconfig" required />
                            </div>
                            <br><br>
                            <h5 class="text-center">Message (Optional)</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea name="body" id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
    @foreach($coin_selling_transactions as $coin_selling_transaction)
        <div class="modal fade coinProofUpload-{{$coin_selling_transaction->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form action="{{route('admin.activate_coin_selling_transaction', ['token' => $coin_selling_transaction->token])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Upload Payment Proof</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Payment Proof</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Coin Transactions</b> table
                            </p>
                            <div class="mt-3">
                                <label>Payment Proof</label>
                                <input type="file" class="form-control" placeholder="Upload your payment proof" name="coin_payment_proof" id="defaultconfig" required />
                            </div>
                            <br><br>
                            <h5 class="text-center">Message (Optional)</h5>
                            <p class="text-muted mb-2 text-center">
                                This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Message Title" id="defaultconfig" />
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea name="body" id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
