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
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>StuNNer</td>
                                        <td>25,000</td>
                                        <td>
                                            <div class="d-flex justify-content-start">

                                                <span data-toggle="modal" data-target=".viewUserDetails">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Account Details">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                    </a>
                                                </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".approvePaymentRequest">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Approve Payment Request">
                                                            <h4 class="text-primary"><i class="mdi mdi-check-circle mdi-24px"></i></h4>
                                                    </a>
                                                </span>&nbsp;&nbsp;


                                                <span data-toggle="modal" data-target=".cancelPaymentRequest">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Cancel Payment Request">
                                                            <h4 class="text-danger"><i class="mdi mdi-cancel mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DreMoney</td>
                                        <td>3,500</td>
                                        <td>
                                            <div class="d-flex justify-content-start">

                                                <span data-toggle="modal" data-target=".viewUserDetails">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="View Account Details">
                                                        <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                    </a>
                                                </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".approvePaymentRequest">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Approve Payment Request">
                                                            <h4 class="text-primary"><i class="mdi mdi-check-circle mdi-24px"></i></h4>
                                                    </a>
                                                </span>&nbsp;&nbsp;


                                                <span data-toggle="modal" data-target=".cancelPaymentRequest">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Cancel Payment Request">
                                                            <h4 class="text-danger"><i class="mdi mdi-cancel mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                            </div>
                                        </td>
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
@endsection
