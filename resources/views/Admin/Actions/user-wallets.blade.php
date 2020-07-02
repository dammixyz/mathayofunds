@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">User Wallet Payment Request</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Payment Requests</h4>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover
                                dt-responsive nowrap" id="datatable-buttons"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Amount (&#8358;)</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($withdrawals as $withdrawal)
                                    <tr>
                                        <td>{{$withdrawal->id}}</td>
                                        <td>{{$withdrawal->user->username}}</td>
                                        <td>
                                            {{$withdrawal->amount}}
                                            @if($withdrawal->status == 1)
                                                <span class="badge badge-success font-size-11">Paid</span>
                                            @elseif($withdrawal->status == 2)
                                                <span class="badge badge-danger font-size-11">Refunded</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($withdrawal->status == 0)
                                                <span class="badge badge-warning font-size-11">Pending</span>
                                            @elseif($withdrawal->status == 1)
                                                <span class="badge badge-success font-size-11">Completed</span>
                                            @else
                                                <span class="badge badge-danger font-size-11">Cancelled</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($withdrawal->status == 0)
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".viewUserDetails-{{$withdrawal->user->token}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Account Details">
                                                            <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;&nbsp;

                                                        <span data-toggle="modal" data-target=".approvePaymentRequest-{{$withdrawal->user->token}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Approve Payment Request">
                                                                <h4 class="text-primary"><i class="mdi mdi-check-circle mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;&nbsp;
                                                        <span data-toggle="modal" data-target=".cancelPaymentRequest-{{$withdrawal->user->token}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Cancel Payment Request">
                                                                <h4 class="text-danger"><i class="mdi mdi-cancel mdi-24px"></i></h4>
                                                        </a>
                                                    </span>
                                                </div>
                                            @elseif($withdrawal->status == 1)
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".viewUserDetails-{{$withdrawal->user->token}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Account Details">
                                                            <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;&nbsp;
                                                </div>
                                            @else
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".viewUserDetails-{{$withdrawal->user->token}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Account Details">
                                                            <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;&nbsp;
                                                </div>
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



    @foreach($withdrawals as $withdrawal)
        <div class="modal fade viewUserDetails-{{$withdrawal->user->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Account Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-3">
                            <label>Bank Name</label>
                            <input type="text" class="form-control" name="name" value="{{$withdrawal->user->accountDetail->bank}}" disabled/>
                        </div>
                        <div class="mt-3">
                            <label>Bank Account Number</label>
                            <input type="number" class="form-control" name="country" value="{{$withdrawal->user->accountDetail->account_number}}" disabled />
                        </div>
                        <div class="mt-3">
                            <label>Full Name (As per bank)</label>
                            <input type="text" class="form-control" name="rate" value="{{$withdrawal->user->accountDetail->name}}" disabled />
                        </div>
                        <div class="mt-3">
                            <label>Amount Requested To Be Paid</label>
                            <input type="text" class="form-control" name="rate" value="&#8358;{{$withdrawal->amount}}" disabled />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($withdrawals as $withdrawal)
        <div class="modal fade cancelPaymentRequest-{{$withdrawal->user->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{route('admin.cancellation-message', [$withdrawal->id, $withdrawal->user_id])}}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">You Are About to Cancel This Payment Request</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Send a Message</h5>
                            <p class="text-muted mb-2 text-center">
                                Let your customer know the reason you cancelled the payment request. This will appear on the customer's <b>Messages</b>
                            </p>
                            <div class="mt-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="Your Withdrawal Request Has Been Cancelled"/>
                            </div>
                            <div class="mt-3">
                                <label>Message Body</label>
                                <textarea id="textarea" class="form-control" name="body" rows="3" placeholder="Your Message..." required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Cancel Payment Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    @foreach($withdrawals as $withdrawal)
        <div class="modal fade approvePaymentRequest-{{$withdrawal->user->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Approve Wallet Payment Request</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-3">
                            <p>
                                Ensure that you have paid the customer the requested amount before you approve the payment
                                <br><br>
                                Are you sure?
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('admin.approve-wallet-payment-request', $withdrawal->id)}}" class="btn btn-primary">Yes</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
