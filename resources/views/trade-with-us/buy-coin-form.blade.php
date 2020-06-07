@extends('layouts.master')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h6 class="box-title">Trade with us >> Buy coin</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills margin-bottom margin-top-10">
                        <li class=" nav-item" > <a href="{{route('coin.buy-form')}}" class="nav-link active" >Buy Coin</a> </li>
                        <li class="nav-item"> <a href="{{route('coin.sell-form')}}" class="nav-link" >Sell Coin</a> </li>
                        <li class="nav-item"> <a href="{{route('giftcard.sell-form')}}" class="nav-link" >Sell Gift card</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="navpills-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="box box-default pull-up">
                                        <div class="fx-card-item">
                                            <img src="{{asset('qrcode.png')}}" alt="user">
                                            <div class="fx-card-content text-left px-15">
                                                <h3 class="box-title">Paxful Platform</h3>
                                                <h5>ifsneunf94r8h34hr489hr398</h5>
                                                <p class="text-info">Notice:: Send bitcoin to above address and then upload the screenshot to the below form. Ensure you fill the form below</p>
                                                <br> </div>
                                        </div>
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-12 col-lg-6">
                                    <div class="box box-default pull-up">
                                        <div class="fx-card-item">
                                            <img src="{{asset('qrcode.png')}}" alt="user">
                                            <div class="fx-card-content text-left px-15">
                                                <h3 class="box-title">Blockchain platform</h3>
                                                <h4>848fjew8f4w8f4w8fn8fjj4e39j3ri3i</h4>
                                                <p class="text-info">Notice:: Send bitcoin to above address and then upload the screenshot to the below form. Ensure you fill the form below</p>
                                                <br> </div>
                                        </div>
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Please select the platform to sent coin to</label>
                                    <select class="form-control select2 w-p100">
                                        <option selected="selected" disabled>--Choose Platform--</option>
                                        <option>Blockchain</option>
                                        <option>Paxful</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Amount of coin you transfer</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Picture proof of your transfer (e.g: Screenshot)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <button class="btn btn-warning">Proceed</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </div>
@endsection
