@extends('layouts.master')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h6 class="box-title">Trade with us >> Sell gift card</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills margin-bottom margin-top-10">
                        <li class="nav-item"> <a href="{{route('coin.buy-form')}}" class="nav-link" >Buy Coin</a> </li>
                        <li class="nav-item"> <a href="{{route('coin.sell-form')}}" class="nav-link" >Sell Coin</a> </li>
                        <li class=" nav-item" > <a href="{{route('giftcard.sell-form')}}" class="nav-link active" >Sell Gift Card</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="row">
                                <div class="col-12">
                                    <!-- SELECT2 EXAMPLE -->
                                    <div class="box">
                                        <div class="box-body">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label>Please select the gift card you want to sell to us</label>
                                                    <select class="form-control select2 w-p100">
                                                        <option selected="selected" disabled>--Choose gift card--</option>
                                                        <option>Gift Card 1</option>
                                                        <option>Gift Card 1</option>
                                                        <option>Gift Card 1</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Select the card's currency</label>
                                                    <select class="form-control select2 w-p100">
                                                        <option selected="selected" disabled>--Choose Card's Currency--</option>
                                                        <option>Country 1</option>
                                                        <option>Country 2</option>
                                                        <option>Country 3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Denomination</label>
                                                    <select class="form-control select2 w-p100">
                                                        <option selected="selected" disabled>--Select Denomination--</option>
                                                        <option>25</option>
                                                        <option>50</option>
                                                        <option>100</option>
                                                        <option>and so on</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Upload Card:</label>
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
