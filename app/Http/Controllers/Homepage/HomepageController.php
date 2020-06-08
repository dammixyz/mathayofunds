<?php

namespace App\Http\Controllers\Homepage;

use App\Coin;
use App\CoinRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function Homepage(){
        $eth_rate = CoinRate::getRate(2);
        $btc_rate = CoinRate::getRate(1);
        $coins = Coin::getCoins();
        return view('welcome', compact('eth_rate', 'btc_rate', 'coins'));
    }
}
