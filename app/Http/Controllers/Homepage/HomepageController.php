<?php

namespace App\Http\Controllers\Homepage;

use App\Blog;
use App\CardRate;
use App\Coin;
use App\CoinRate;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function Homepage(){
        $eth_rate = CoinRate::getRate(2);
        $btc_rate = CoinRate::getRate(1);
        $btc_price = 9744.17;
        $eth_price = 250;
        $coins = Coin::getCoins();
        $reviews = Review::get();
        $blogs = Blog::take(3)->orderBy('id', 'desc')->get();
        return view('welcome', compact('eth_rate', 'btc_rate', 'coins', "btc_price", 'eth_price','reviews', 'blogs'));
    }

    public function Faqs(){
        return view('actions.faqs');
    }

    public function aboutUs(){
        return view('actions.about-us');
    }

    public function viewCardRate(){
        $cards = CardRate::get();
        return view('actions.card-rate', compact('cards'));
    }

    public function viewCoinRate(){
        $coins = CoinRate::get();
        return view('actions.coin-rate', compact('coins'));
    }
}
