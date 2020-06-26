@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">User Details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                                <li class="breadcrumb-item active">View User Details</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input id="username"  type="text" class="form-control" value="Sonia" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input id="email"  type="text" class="form-control" value="sonia@gmail.com" disabled>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="wallet">Wallet (&#8358;)</label>
                                            <input id="wallet" type="number" class="form-control" value="39000">
                                        </div>
                                        <div class="form-group">
                                            <label for="wallet">Phone Number</label>
                                            <input id="wallet" type="text" class="form-control" value="08238384834" disabled>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="btn btn-primary mr-1 waves-effect waves-light">Update Wallet</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Account Details</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="bank">Bank Name</label>
                                            <input id="bank"  type="text" class="form-control" value="GTBank" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="acc_number">Account Number</label>
                                            <input id="acc_number"  type="text" class="form-control" value="0283483844" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="acc_name">Account Name</label>
                                            <input id="acc_name"  type="text" class="form-control" value="Sonia Ameh" disabled>
                                        </div>
                                    </div>

                                </div>
                                <a href="#" class="btn btn-primary mr-1 waves-effect waves-light"> << Go Back</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
