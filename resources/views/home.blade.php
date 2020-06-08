@extends('layouts.master')

@section('content')
    <div class="row mr-3 ml-3">
        <div class="col col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Our Rates</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Asset</th>
                                <th scope="col">Range</th>
                                <th scope="col">Buying</th>
                                <th scope="col">Selling</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Itunes USA</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">Itunes USA</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@fat</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col col-lg-6">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Your Latest Transactions</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Asset</th>
                                <th scope="col">Value</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
