@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">
                            Gift Card(s) Upload
                        </h4>

                        <div class="page-title-right">
                            @if($card->user_transaction_approval == 1)
                                 @if($card->payment_type == "wallet")
                                    @if($card->status == 0)
                                        <a href="{{route('admin.approve-walletcard-payment', ['token' => $card->token])}}"
                                           class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                        >
                                            <span><i class="bx bx-check"></i></span>
                                            Approve
                                        </a>
                                    @endif
                                 @else
                                    @if($card->status == 0)
                                        <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                data-toggle="modal" data-target=".approveModal-{{$card->token}}">
                                            <span><i class="bx bx-check"></i></span>
                                            Approve
                                        </button>
                                    @endif
                                 @endif

                            @else
                                @if($card->rate == null)
                                    <button type="button"
                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                            data-toggle="modal" data-target=".rateMessageModal-{{$card->token}}">
                                        Rate/Message
                                    </button>
                                @endif
                                @if($card->status != 1)
                                    <button type="button"
                                            class="btn btn-danger btn-sm btn-rounded waves-effect waves-light font-size-13"
                                            data-toggle="modal" data-target=".cancelModal-{{$card->token}}">
                                        <span><i class="fa fa-times"></i></span>
                                        Cancel
                                    </button>
                                @endif
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        @foreach($images as $key => $image)
                            @if($image->image_type == 1)
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Gift Card</h4>
                                            <div class="">
                                                <img src="{{asset('uploads/'.$image->image)}}" class="img-fluid" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- end row -->

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">
                            Receipt(s) Upload
                        </h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        @foreach($images as $key => $image)
                            @if($image->image_type == 2)
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Receipt</h4>
                                            <div class="">
                                                <img src="{{asset('uploads/'.$image->image)}}" class="img-fluid" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div>

    <div class="modal fade approveModal-{{$card->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{route('admin.activate_card_selling_transaction', ['token' => $card->token])}}" method="post" enctype="multipart/form-data">
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
                            <input type="file" class="form-control" placeholder="Upload your payment proof" name="card_payment_proof" id="defaultconfig" required />
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
    <div class="modal fade rateMessageModal-{{$card->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form method="post" action="{{route('admin.negotiate-card-rate', ['token' => $card->token])}}">
                @csrf
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
                            <input type="number" class="form-control" placeholder="Enter your rate" name="rate" id="defaultconfig" required />
                        </div>

                        <br><br>

                        <h5 class="text-center">Message</h5>
                        <p class="text-muted mb-2 text-center">
                            This will appear on the customer's <b>Messages</b>
                        </p>
                        <div class="mt-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Message Title" id="defaultconfig" />
                        </div>
                        <div class="mt-3">
                            <label>Message Body</label>
                            <textarea id="textarea" class="form-control" name="body" rows="3" placeholder="Your Message..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade cancelModal-{{$card->token}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">You Are About to Cancel This Transaction</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('admin.cancel-card-transaction', ['token' => $card->token])}}">
                    @csrf
                    <div class="modal-body">
                        <h5 class="text-center">Message</h5>
                        <p class="text-muted mb-2 text-center">
                            Let your customer know the reason you cancelled this transaction. This will appear on the customer's <b>Messages</b>
                        </p>
                        <div class="mt-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Message Title" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label>Message Body</label>
                            <textarea name="body" id="textarea" class="form-control" rows="3" placeholder="Your Message..." required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
