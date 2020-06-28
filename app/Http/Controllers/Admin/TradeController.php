<?php

namespace App\Http\Controllers\Admin;

use App\CardSelling;
use App\CoinBuying;
use App\CoinSelling;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function cardTradeTransactions(){
        $card_transactions = CardSelling::orderBy('id', 'desc')->get();
        return view('Admin.Actions.card-trade-transactions', compact('card_transactions'));
    }

    public function coinTradeTransactions(){
        $coin_selling_transactions = CoinSelling::orderBy('id', 'desc')->get();
        $coin_buyings_transactions = CoinBuying::orderBy('id', 'desc')->get();
        return view('Admin.Actions.coin-trade-transactions', compact('coin_selling_transactions', 'coin_buyings_transactions'));
    }
}
