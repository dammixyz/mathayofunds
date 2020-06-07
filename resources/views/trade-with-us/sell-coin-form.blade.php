@extends('layouts.master')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h6 class="box-title">Trade with us >> Sell coin</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills margin-bottom margin-top-10">
                        <li class="nav-item"> <a href="{{route('coin.buy-form')}}" class="nav-link" >Buy Coin</a> </li>
                        <li class=" nav-item" > <a href="{{route('coin.sell-form')}}" class="nav-link active" >Sell Coin</a> </li>
                        <li class="nav-item"> <a href="{{route('giftcard.sell-form')}}" class="nav-link" >Sell Gift card</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="navpills-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label>Please select the type of coin you want sell</label>
                                                    <select class="form-control select2 w-p100">
                                                        <option selected="selected" disabled>--Choose gift card--</option>
                                                        <option>Bitcoin</option>
                                                        <option>Ethereum</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Amount of coin you sent</label>
                                                    <select class="form-control select2 w-p100">
                                                        <option selected="selected" disabled>--Choose Card's Currency--</option>
                                                        <option>USD</option>
                                                        <option>GBP</option>
                                                        <option>CAD</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Picture proof of your payment (e.g: Screenshot)</label>
                                                    <div class="input-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <button class="btn btn-warning">Proceed</button>
                                            </form>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </div>
@endsection
