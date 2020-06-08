<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index()
    {
        return view('trade-with-us.choose-transaction');
    }

    public function buyCoinForm(){
        return view('trade-with-us.buy-coin-form');
    }

    public function sellCoinForm(){

        return view('trade-with-us.sell-coin-form');
    }

    public function sellGiftCardForm(){
        return view('trade-with-us.sell-giftcard-form');
    }
}
