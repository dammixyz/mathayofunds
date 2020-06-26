@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Coin Rates Management</h4>
                        <span data-toggle="modal" data-target=".addCoinRate">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Add Coin Rate">
                                    <h4 class="text-primary"><i class="mdi mdi-plus-circle mdi-36px"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Coin Rates</h4>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover
                                dt-responsive nowrap" id="datatable-buttons"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Coin</th>
                                        <th scope="col">Rate($)</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ethereum</td>
                                        <td>250</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editCoinRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Coin Rate">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".deleteCoinRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Coin Rate">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                </a>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bitcoin</td>
                                        <td>350</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                            <span data-toggle="modal" data-target=".editCoinRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Coin Rate">
                                                        <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                </a>
                                            </span>&nbsp;&nbsp;

                                                <span data-toggle="modal" data-target=".deleteCoinRate">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Coin Rate">
                                                        <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
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
