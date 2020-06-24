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
                                            <h4 class="mb-0">5</h4>
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
                                            <h4 class="mb-0">42</h4>
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
                                            <h4 class="mb-0">4</h4>
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
                                            <h4 class="mb-0">45</h4>
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
                                        <th>Bank</th>
                                        <th>Account No</th>
                                        <th>Account Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>sonia@gmail.com</td>
                                        <td>sonny</td>
                                        <td>GTBank</td>
                                        <td>910204948</td>
                                        <td>Sonia Ameh</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="{{route('admin.user-details')}}">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                    <i class="mdi mdi-eye mdi-24px"></i>
                                                </span>
                                            </a>
                                            &nbsp;
                                            <a href="#" data-toggle="modal" data-target=".makeAdmin">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                    <i class="mdi mdi-account-cog-outline mdi-24px"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>sonia@gmail.com</td>
                                        <td>sonny</td>
                                        <td>GTBank</td>
                                        <td>910204948</td>
                                        <td>Sonia Ameh</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="{{route('admin.user-details')}}" >
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                    <i class="mdi mdi-eye mdi-24px"></i>
                                                </span>
                                            </a>
                                            &nbsp;
                                            <a href="#" data-toggle="modal" data-target=".makeAdmin">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                    <i class="mdi mdi-account-cog-outline mdi-24px"></i>
                                                </span>
                                            </a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>stunner@gmail.com</td>
                                        <td>sonny</td>
                                        <td>UBA</td>
                                        <td>910204948</td>
                                        <td>Sonia Ameh</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="{{route('admin.user-details')}}" >
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                    <i class="mdi mdi-eye mdi-24px"></i>
                                                </span>
                                            </a>
                                            &nbsp;
                                            <a href="#" data-toggle="modal" data-target=".makeAdmin">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                    <i class="mdi mdi-account-cog-outline mdi-24px"></i>
                                                </span>
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
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Platform</th>
                                        <th scope="col">Amount ($)</th>
                                        <th scope="col">Buy/Sell</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action(s)</th>

                                    </tr>

                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Sonia</td>
                                        <td>sonia@gmail.com</td>
                                        <td>BTC</td>
                                        <td>Paxful</td>
                                        <td>$ 9067.62</td>
                                        <td>Buy</td>
                                        <td>
                                            <span class="badge badge-warning font-size-11">Pending</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinUpload">
                                                <span><i class="fa fa-eye"></i></span>
                                            </button>
                                            <button type="button"
                                                    class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinProofUpload">
                                                <span><i class="fa fa-check"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Sonia</td>
                                        <td>sonia@gmail.com</td>
                                        <td>BTC</td>
                                        <td>Paxful</td>
                                        <td>$ 9067.62</td>
                                        <td>Buy</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinUpload">
                                                <span><i class="fa fa-eye"></i></span>
                                            </button>
                                            <button type="button"
                                                    class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinProofUpload">
                                                <span><i class="fa fa-check"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Sonia</td>
                                        <td>sonia@gmail.com</td>
                                        <td>BTC</td>
                                        <td>Paxful</td>
                                        <td>$ 9067.62</td>
                                        <td>Buy</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinUpload">
                                                <span><i class="fa fa-eye"></i></span>
                                            </button>
                                            <button type="button"
                                                    class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinProofUpload">
                                                <span><i class="fa fa-check"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Sonia</td>
                                        <td>sonia@gmail.com</td>
                                        <td>BTC</td>
                                        <td>Paxful</td>
                                        <td>$ 9067.62</td>
                                        <td>Buy</td>
                                        <td>
                                            <span class="badge badge-success font-size-11">Completed</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinUpload">
                                                <span><i class="fa fa-eye"></i></span>
                                            </button>
                                            <button type="button"
                                                    class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinProofUpload">
                                                <span><i class="fa fa-check"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Damilare</td>
                                        <td>dremoney@gmail.com</td>
                                        <td>BTC</td>
                                        <td>Blokchain</td>
                                        <td>$ 67.62</td>
                                        <td>Buy</td>
                                        <td>
                                            <span class="badge badge-danger font-size-11">canceled</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinUpload">
                                                <span><i class="fa fa-eye"></i></span>
                                            </button>
                                            <button type="button"
                                                    class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinProofUpload">
                                                <span><i class="fa fa-check"></i></span>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>03 Mar, 2020</td>
                                        <td>Sonia</td>
                                        <td>stunner@gmail.com</td>
                                        <td>EHT</td>
                                        <td>Blockchain</td>
                                        <td>$ 967.62</td>
                                        <td>Sell</td>
                                        <td>
                                            <span class="badge badge-warning font-size-11">Pending</span>
                                        </td>
                                        <td>
                                            <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinUpload">
                                                <span><i class="fa fa-eye"></i></span>
                                            </button>
                                            <button type="button"
                                                    class="btn btn-success btn-sm btn-rounded waves-effect waves-light font-size-13"
                                                    data-toggle="modal" data-target=".coinProofUpload">
                                                <span><i class="fa fa-check"></i></span>
                                            </button>
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
