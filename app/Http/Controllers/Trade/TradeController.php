<?php

namespace App\Http\Controllers\Trade;

use App\AccountDetail;
use App\CardSelling;
use App\Coin;
use App\CoinBuying;
use App\CoinRate;
use App\CoinSelling;
use App\Http\Controllers\Controller;
use App\Platform;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TradeController extends Controller
{
    public function tradeCoin(){
        $account_details = AccountDetail::where('user_id', Auth::user()->id)->first();
        if ($account_details){
            if (session()->get('intended_url')){
                session()->forget('intended_url');
            }
            $coins = Coin::getCoins();
            $bitcoin = Coin::getBitCoin();
            $ethereum = Coin::getEthereum();
            $bitcoin_platforms = Platform::getCoinPlatforms($bitcoin->id);
            $ethereum_platforms = Platform::getCoinPlatforms($ethereum->id);
            $bitcoin_rate = CoinRate::getRate($bitcoin->id);
            $ethereum_rate = CoinRate::getRate($ethereum->id);
            return view('actions.trade-coin', compact('bitcoin', 'ethereum', 'bitcoin_rate','ethereum_rate',
                'bitcoin_platforms', 'ethereum_platforms', 'coins', 'account_details'));
        }
        else{
            dd("you need to upload set up ur account");
        }

    }

    public function submitSellCoinForm(Request $request){
        try {
            if($request->file('payment-proof')->getSize() > 5000000 )
            {
                return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
            }
            $this->validate($request, [
                'coin_type' => 'bail|required',
                'sell_coin_amount' => 'bail|required',
                'payment_method' => 'bail|required',
                'platform' => 'bail|required',
            ]);
            $image = $request->file('payment-proof');
            $image_name = User::processImage($image);
            $sellings = new CoinSelling();
            $sellings->platform_id = $request->platform;
            $sellings->coin_amount = $request->sell_coin_amount;
            $sellings->coin_rate_id = CoinRate::getRate($request->coin_type)->id;
            $sellings->rate_amount = CoinRate::getRate($request->coin_type)->usd_rate;
            $sellings->payment_proof = $image_name;
            $sellings->status = 0;
            $sellings->user_id = Auth::user()->id;
            $sellings->token = Str::random(15);
            $sellings->coin_id = $request->coin_type;
            $sellings->payment_type = $request->payment_method ;
            $sellings->amount_payable = $sellings->rate_amount *  $sellings->coin_amount;
            $sellings->save();
            return redirect()->back()->with('success', "Transaction Submitted For Admin Action");
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', "Transaction Failed to be Processed, Kindly try again");
        }
    }
    public function submitBuyCoinForm(Request $request){
        try {
            if($request->file('payment_proof')->getSize() > 5000000 )
            {
                return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
            }
            $this->validate($request, [
                'coin_type' => 'bail|required',
                'coin_amount' => 'bail|required',
                'wallet_address' => 'bail|required',
                'platform' => 'bail|required',
            ]);
            $image = $request->file('payment_proof');
            $image_name = User::processImage($image);
            $buyings = new CoinBuying();
            $buyings->amount = $request->coin_amount;
            $buyings->buying_rate = CoinRate::getRate($request->coin_type)->usd_rate;
            $buyings->coin_rate_id = CoinRate::getRate($request->coin_type)->id;
            $buyings->coin_id = $request->coin_type;
            $buyings->coin_wallet = $request->wallet_address;
            $buyings->status = 0;
            $buyings->payment_proof = $image_name;
            $buyings->user_id = Auth::user()->id;
            $buyings->token = Str::random(15);
            $buyings->platform_id = $request->platform;
            $buyings->coin_value = $buyings->amount *  $buyings->buying_rate;
            $buyings->save();
            return redirect()->back()->with('success', "Transaction Submitted For Admin Action");
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', "Transaction Failed to be Processed, Kindly try again");
        }
    }
}
