@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <form class="app-search">
                        <div class="position-relative">
                            <input type="text" class="form-control" style="background-color: #e6e6e6;" placeholder="Search Message...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Messages</h4>
                        <span data-toggle="modal" data-target=".sendMessageAdmin">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Send Message">
                                    <h4 class="text-primary"><i class="mdi mdi-email-send-outline mdi-36px"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body">
                        {{--Admin Message--}}
                        <div class="card border border-success">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-2"><div class="text-success">You (Sent to DreMoney)</div>3 days ago</h5>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" class="text-success" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>

                        {{--User Message--}}
                        <div class="card border border-primary">
                            <div class="card-body">
                                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom: 0px">
                                    <h5 class="card-title mt-0 mb-2"><div class="text-primary">Message From DreMoney</div>3 days ago</h5>
                                    <span data-toggle="modal" data-target=".replyMessageAdmin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Reply DreMoney">
                                                <h4 class="text-primary"><i class="mdi mdi-reply mdi-24px"></i></h4>
                                        </a>
                                    </span>
                                </div>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>

                        {{--User Message--}}
                        <div class="card border border-primary">
                            <div class="card-body">
                                <div class="page-title-box d-flex align-items-center justify-content-between" style="padding-bottom: 0px">
                                    <h5 class="card-title mt-0 mb-2"><div class="text-primary">Message From StuNNer</div>4 days ago</h5>
                                    <span data-toggle="modal" data-target=".replyMessageAdmin">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Reply StuNNer">
                                                <h4 class="text-primary"><i class="mdi mdi-reply mdi-24px"></i></h4>
                                        </a>
                                    </span>
                                </div>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>

                        {{--Admin Message--}}
                        <div class="card border border-success">
                            <div class="card-body">
                                <h5 class="card-title mt-0 mb-2"><div class="text-success">You (Sent to StuNNer)</div>5 days ago</h5>
                                <p class="card-text font-size-15">
                                    Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to...
                                    <a href="#" class="text-success" data-toggle="modal" data-target=".readMessageAdmin">Read Message</a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <ul class="pagination pagination-rounded justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
