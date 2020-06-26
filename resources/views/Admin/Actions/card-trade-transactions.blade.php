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
                                        <th scope="col">Type</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Payable</th>
                                        <th scope="col">Option</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Jun, 2020</td>
                                        <td>PlayStore</td>
                                        <td>UK</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>Card/Receipt</td>
                                        <td>
                                            <span class="badge badge-warning font-size-11">Pending</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-danger font-size-11">Cancelled</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Jun, 2020</td>
                                        <td>PlayStore</td>
                                        <td>UK</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>Card/Receipt</td>
                                        <td>
                                            <span class="badge badge-warning font-size-11">Pending</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                    >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-danger font-size-11">Cancelled</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                    >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Jun, 2020</td>
                                        <td>PlayStore</td>
                                        <td>UK</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>Card/Receipt</td>
                                        <td>
                                            <span class="badge badge-warning font-size-11">Pending</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                            >
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Amazon</td>
                                        <td>USA</td>
                                        <td>$ 250</td>
                                        <td>$ 9067.62</td>
                                        <td>E-code</td>
                                        <td>
                                            <span class="badge badge-danger font-size-11">Cancelled</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.card-receipt-upload')}}"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                    >
                                                View Details
                                            </a>
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
