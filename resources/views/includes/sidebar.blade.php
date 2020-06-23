<div class="col col-lg-3 col-md-12 col-sm-12 res-m-bttm mb-25">
    <div class="pricing-box ucap shadow">
        <div class="box round no-pt">
            <img src="{{asset('uploads/'.Auth::user()->icon)}}" alt="box-icon" class="box-icon">
            <h6 class="">{{auth()->user()->username}}</h6>
            <p style="color: #f7921a"><b>Wallet: &#8358; {{Auth::user()->account_balance}}</b></p>
            <a href="{{route('user.dashboard')}}" class="btn btn-md btn-alt" style="padding-left: 28px; padding-right: 28px"><span><i
                        class="fa fa-dashboard"></i>&nbsp; Dashboard</span></a><br>
            {{--<a href="{{route('user.card-transactions')}}" class="btn btn-md btn-alt"><span><i class="fa fa-credit-card"></i>&nbsp; Card Trades</span></a><br>
            <a href="{{route('user.coin-transactions')}}" class="btn btn-md btn-alt"><span><i
                        class="fas fa-coins"></i>&nbsp; Coin Trades</span></a><br>--}}
            <a href="{{route('user.profile')}}" class="btn btn-md btn-alt" style="padding-left: 43px; padding-right: 43px"><span><i class="fa fa-user"></i>&nbsp; Profile</span></a><br>
            <a href="{{route('user.message')}}" class="btn btn-md btn-alt" style="padding-left: 35px; padding-right: 35px"><span><i
                        class="fa fa-envelope"></i>&nbsp; Messages</span></a><br>
            <a href="{{route('user.withdrawal-request')}}" class="btn btn-md btn-alt" style="padding-left: 24px; padding-right: 24px"><span><i class="fa fa-money"></i>&nbsp; Withdrawal</span></a><br>
            <a href="{{route('logout')}}" class="btn btn-md btn-alt" style="padding-left: 38px; padding-right: 38px"><span><i class="fa fa-power-off"></i>&nbsp; Logout</span></a><br>
        </div>
    </div>
</div>
