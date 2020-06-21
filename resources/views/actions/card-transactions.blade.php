@extends('layouts.app')
@section('contents')
    <!-- Transactions Count -->
    <div class="features-box section section-pad no-pt no-pb" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
               @include('includes.sidebar')
                <div class="col-md-9 col-sm-6 res-m-bttm">
                    <div class="row">
                        <div class="col-md-12 col-sm-6 res-m-bttm">
                            <!-- Transactions -->
                            <div class="features-box section section-pad no-pb no-pt">
                                <div class="container">
                                    <div class="row">
                                        <div class="box round shadow-alt mb-15">
                                            <h6 class="ucap">All Coin Trades</h6>
                                            <p class="small">History of all the coin trades you made with us</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="sidebar-right wgs-box">
                                                        <div class="wgs-search">
                                                            <div class="wgs-content">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="search-coin-trade"  placeholder="Search Coin Trade...">
                                                                    <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="gaps size-1x"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive" >
                                                <table class="table table-hover" id="coinTable">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">S/N</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Type</th>
                                                        <th scope="col">Asset</th>
                                                        <th scope="col">You Bought/Sold</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action(s)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Ethereum</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: orange">Pending</div></td>
                                                        <td>
                                                            <a href="#" id="upload-6" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-6" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Gift Card</td>
                                                        <td>Amazon</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-7" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-7" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Bought</td>
                                                        <td><div class="badge" style="background-color: orangered">Canceled</div></td>
                                                        <td>
                                                            <a href="#" id="upload-8" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-8" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Coin</td>
                                                        <td>Bitcoin</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: green">Completed</div></td>
                                                        <td>
                                                            <a href="#" id="upload-9" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-9" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>May 21 2020, 15:30</td>
                                                        <td>Gift Card</td>
                                                        <td>iTunes</td>
                                                        <td>Sold</td>
                                                        <td><div class="badge" style="background-color: orange">Pending</div></td>
                                                        <td>
                                                            <a href="#" id="upload-10" data-toggle="tooltip"  data-placement="bottom" title="View Your Uploaded Gift Card(s) and Receipt(s)"><i class="fa fa-picture-o fa-lg" style="color: mediumblue"></i></a> <b>/</b>
                                                            <a href="#" id="proof-10" data-toggle="tooltip"  data-placement="bottom" title="View Admin Payment Proof"><i class="fa fa-picture-o fa-lg " style="color: mediumblue"></i>*</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Features Box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Features Box -->
    <div class="modal" tabindex="-1" id="adminPaymentProofCoin" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Our Payment Proof</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-field form-m-bttm">
                        <img src="{{asset('mathayo-profile.png')}}" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{--User Payment/Transfer Proof For Coin Modal--}}
    <div class="modal" tabindex="-1" id="paymentTransferProof" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="modal-title">Your Uploaded Payment/Transfer Snapshot</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-field form-m-bttm">
                        <img src="{{asset('mathayo.jpg')}}" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-alt" data-dismiss="modal"><span><i class="fa fa-close"></i> &nbsp;</span><b>Close</b>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script_contents')
    <script type="text/javascript">
        $(window).on('load', function () {
            $('div#themes_panel').hide();
            //ToolTip
            $('#upload-1').tooltip()
            $('#proof-1').tooltip()
            $('#upload-2').tooltip()
            $('#proof-2').tooltip()
            $('#upload-3').tooltip()
            $('#proof-3').tooltip()
            $('#upload-4').tooltip()
            $('#proof-4').tooltip()
            $('#upload-5').tooltip()
            $('#proof-5').tooltip()
            $('#upload-6').tooltip()
            $('#proof-6').tooltip()
            $('#upload-7').tooltip()
            $('#proof-7').tooltip()
            $('#upload-8').tooltip()
            $('#proof-8').tooltip()
            $('#upload-9').tooltip()
            $('#proof-9').tooltip()
            $('#upload-10').tooltip()
            $('#proof-10').tooltip()

            /*Data Table*/
            const coinTable = $('#coinTable').DataTable({
                responsive: true,
                bPaginate: true,
                bLengthChange: false,
                bFilter: true,
                bInfo: true,
                bAutoWidth: true,
                pageLength : 15,
            });
            /*Remove the default search box*/
            $('#coinTable_filter').remove()
            /*Add datatable search functionality to custom search box*/
            $('#search-coin-trade').keyup(function(){
                coinTable.search($(this).val()).draw() ;
            })
        })
    </script>
@endsection
