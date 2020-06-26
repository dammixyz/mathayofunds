@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Registered Users</p>
                                            <h4 class="mb-0">{{count($users)}}</h4>
                                        </div>

                                        <div
                                            class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bx-user font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Messages</p>
                                            <h4 class="mb-0">{{count($messages)}}</h4>
                                        </div>

                                        <div
                                            class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="mdi mdi-message h2 text-white mb-0"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Card Trades</p>
                                            <h4 class="mb-0">{{count($cards)}}</h4>
                                        </div>

                                        <div
                                            class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-wallet-giftcard h2 text-white mb-0"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Coin Trades</p>
                                            <h4 class="mb-0">{{count($coin_sellings) + count($coin_buyings)}}</h4>
                                        </div>

                                        <div
                                            class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-bitcoin h2 text-white mb-0"></i>
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-4">Latest Registered Users</h4>
                                <h4 class="card-title mb-4">
                                    <button type="button"
                                            class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                            data-toggle="modal" data-target=".exampleModal">
                                        All Users
                                    </button>
                                </h4>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable-buttons2" class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Bank</th>
                                        <th>Account No</th>
                                        <th>Account Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($limit_users as $key => $limit_user)
                                        <tr>
                                            <td>{{$limit_user->email}}</td>
                                            <td>{{$limit_user->username}}</td>
                                            <td>{{$limit_user->role_id == 1 ? "Customer" : "Admin"}}</td>
                                            <td>{{$limit_user->accountDetail == null ? "Nill" : $limit_user->accountDetail->bank}}</td>
                                            <td>{{$limit_user->accountDetail == null ? "Nill" : $limit_user->accountDetail->account_number}}</td>
                                            <td>{{$limit_user->accountDetail == null ? "Nill" : $limit_user->accountDetail->name}}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="{{route('admin.user-details', ['token' => $limit_user->token])}}">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                    <i class="mdi mdi-eye mdi-24px"></i>
                                                </span>
                                                </a>
                                                &nbsp;@if($limit_user->role_id == 1)
                                                    <a href="#" data-toggle="modal" data-target=".makeAdmin-{{$key}}">
                                                    <span data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                        <i class="mdi mdi-account-cog-outline mdi-24px"></i>
                                                    </span>
                                                    </a>
                                                @else
                                                    <a href="{{route('admin.remove-admin', ['token' => $limit_user->token])}}">
                                                        <span data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                            <i class="mdi mdi-account-convert mdi-24px"></i>
                                                        </span>
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
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-3">Card Trades</h4>
                                <h4 class="card-title mb-3">
                                    <button type="button"
                                            class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                            data-toggle="modal" data-target=".exampleModal">
                                        All Card Trades
                                    </button>
                                </h4>
                            </div>

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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-3">Coin Trade</h4>
                                <h4 class="card-title mb-3">
                                    <button type="button"
                                            class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                            data-toggle="modal" data-target=".exampleModal">
                                        All Coin Trade
                                    </button>
                                </h4>
                            </div>

                            <div class="table-responsive mt-1">
                                <table id="datatable-buttons1" class="table table-hover datatable dt-responsive nowrap"
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
                                                        <span class="badge badge-danger font-size-11">Cancel</span>
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
                                                        <span class="badge badge-danger font-size-11">Cancel</span>
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
                                                        @endif
                                                    @else
                                                        @if($selling_transaction->status == 0)
                                                            <a href="{{route('admin.activate_coin_wallet_transaction', ['token' => $selling_transaction->token])}}">
                                                                <span><i class="fa fa-check"></i></span>
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
    <div class="modal fade cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">You Are About to Cancel This Transaction</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Message</h5>
                    <p class="text-muted mb-2 text-center">
                        Let your customer know the reason you cancelled this transaction. This will appear on the customer's <b>Messages</b>
                    </p>
                    <div class="mt-3">
                        <label>Title</label>
                        <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                    </div>
                    <div class="mt-3">
                        <label>Message Body</label>
                        <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
                        This will appear on the customer's <b>Card Transactions</b> table
                    </p>
                    <div class="mt-3">
                        <label>Payment Proof</label>
                        <input type="file" class="form-control" placeholder="Upload your payment proof" name="Rate" id="defaultconfig" />
                    </div>

                    <br><br>

                    <h5 class="text-center">Message (Optional)</h5>
                    <p class="text-muted mb-2 text-center">
                        This will appear on the customer's <b>Messages</b>
                    </p>
                    <div class="mt-3">
                        <label>Title</label>
                        <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                    </div>
                    <div class="mt-3">
                        <label>Message Body</label>
                        <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade rateMessageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Negotiate with the Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Rate</h5>
                    <p class="text-muted mb-2 text-center">
                        This will appear on the customer's <b>Payable</b> field
                    </p>
                    <div class="mt-3">
                        <label>Your Rate</label>
                        <input type="number" class="form-control" placeholder="Enter your rate" name="Rate" id="defaultconfig" />
                    </div>

                    <br><br>

                    <h5 class="text-center">Message</h5>
                    <p class="text-muted mb-2 text-center">
                        This will appear on the customer's <b>Messages</b>
                    </p>
                    <div class="mt-3">
                        <label>Title</label>
                        <input type="text" class="form-control" name="Title" placeholder="Message Title" id="defaultconfig" />
                    </div>
                    <div class="mt-3">
                        <label>Message Body</label>
                        <textarea id="textarea" class="form-control" rows="3" placeholder="Your Message..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
                </div>
            </div>
        </div>
    </div>
    @foreach($limit_users as $key => $limit_user)
        <div class="modal fade makeAdmin-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Are You Sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('admin.make-admin', ['token' => $limit_user->token])}}" class="btn btn-primary" >Yes</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection


