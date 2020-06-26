@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Users Management</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Registered Users</h4>
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
                                            <div class="d-flex justify-content-start">
                                                <a href="#">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                    <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </span>
                                                </a>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".makeAdmin">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                            <h4 class="text-primary"><i class="mdi mdi-account-cog-outline mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".replyMessageAdmin">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Send Message">
                                                            <h4 class="text-primary"><i class="mdi mdi-message mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".editWalletAmount">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Sonia Wallet">
                                                            <h4 class="text-warning"><i class="mdi mdi-wallet mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".deleteUser">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete User">
                                                            <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                    </a>
                                                </span>

                                            </div>

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
                                            <div class="d-flex justify-content-start">
                                                <a href="#">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                    <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </span>
                                                </a>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".makeAdmin">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                            <h4 class="text-primary"><i class="mdi mdi-account-cog-outline mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".replyMessageAdmin">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Send Message">
                                                            <h4 class="text-primary"><i class="mdi mdi-message mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".editWalletAmount">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Sonia Wallet">
                                                            <h4 class="text-warning"><i class="mdi mdi-wallet mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".deleteUser">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete User">
                                                            <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                    </a>
                                                </span>

                                            </div>
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
                                            <div class="d-flex justify-content-start">
                                                <a href="#">
                                                <span data-toggle="tooltip" data-placement="top" title data-original-title="View User Details">
                                                    <h4 class="text-primary"><i class="mdi mdi-eye mdi-24px"></i></h4>
                                                </span>
                                                </a>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".makeAdmin">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Make Admin">
                                                            <h4 class="text-primary"><i class="mdi mdi-account-cog-outline mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".replyMessageAdmin">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Send Message">
                                                            <h4 class="text-primary"><i class="mdi mdi-message mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".editWalletAmount">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Sonia Wallet">
                                                            <h4 class="text-warning"><i class="mdi mdi-wallet mdi-24px"></i></h4>
                                                    </a>
                                                </span>
                                                &nbsp;
                                                <span data-toggle="modal" data-target=".deleteUser">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete User">
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
            <!-- end row -->

        </div>
    </div>
@endsection
