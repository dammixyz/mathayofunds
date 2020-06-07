@extends('layouts.master')

@section('content')
        <div class="row ">
            <div class="col-lg-4 col-12">
                <!-- Default box -->
                <div class="box box-outline-warning">
                    <div class="box-header with-border">
                        <img class="box-img-top" src="{{asset('bitcoin-ethe.jpg')}}" alt="box image cap">
                        <h4 class="box-title">BUY BITCOIN/ETHEREUM</h4>
                    </div>
                    <div class="box-body">
                        <a class="popup-youtube btn btn-warning" href="{{route('coin.buy-form')}}">Buy Coin</a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Default box -->
                <div class="box box-outline-info">
                    <div class="box-header with-border">
                        <img class="box-img-top" src="{{asset('bitcoin-ethe.jpg')}}" alt="box image cap">
                        <h4 class="box-title">SELL BITCOIN/ETHEREUM</h4>
                    </div>
                    <div class="box-body">
                        <a class="popup-gmaps btn btn-info" href="{{route('coin.sell-form')}}">SELL COIN</a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-lg-4 col-12">
                <!-- Default box -->
                <div class="box box-outline-info">
                    <div class="box-header with-border">
                        <img class="box-img-top" src="{{asset('giftcardmat.png')}}" alt="box image cap">
                        <h4 class="box-title">SELL GIFTCARD</h4>
                    </div>
                    <div class="box-body">
                        <a class="popup-gmaps btn btn-info" href="{{route('giftcard.sell-form')}}">SELL GIFT CARD</a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
@endsection
