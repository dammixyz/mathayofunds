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
