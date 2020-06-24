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
                            <button type="button"
                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                    data-toggle="modal" data-target=".approveModal">
                                <span><i class="bx bx-check"></i></span>
                                Approve
                            </button>
                            <button type="button"
                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                    data-toggle="modal" data-target=".rateMessageModal">
                                Rate/Message
                            </button>
                            <button type="button"
                                    class="btn btn-danger btn-sm btn-rounded waves-effect waves-light font-size-13"
                                    data-toggle="modal" data-target=".cancelModal">
                                <span><i class="fa fa-times"></i></span>
                                Cancel
                            </button>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Gift Card</h4>
                                    <div class="">
                                        <img src="{{asset('giftcard1.png')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Gift Card</h4>
                                    <div class="">
                                        <img src="{{asset('giftcard2.png')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Gift Card</h4>
                                    <div class="">
                                        <img src="{{asset('giftcard3.png')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Receipt</h4>
                                    <div class="">
                                        <img src="{{asset('giftcard3.png')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Receipt</h4>
                                    <div class="">
                                        <img src="{{asset('giftcard5.jpg')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Receipt</h4>
                                    <div class="">
                                        <img src="{{asset('giftcard2.png')}}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div>
@endsection
