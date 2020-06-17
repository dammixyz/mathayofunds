<?php

namespace App\Http\Controllers\Trade;

use App\AccountDetail;
use App\Card;
use App\CardRate;
use App\CardSelling;
use App\Coin;
use App\CoinBuying;
use App\CoinRate;
use App\CoinSelling;
use App\Country;
use App\Denomination;
use App\Ecode;
use App\EcodeTransactions;
use App\Http\Controllers\Controller;
use App\ImageUpload;
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

    public function tradeCard(){
        $account_details = AccountDetail::where('user_id', Auth::user()->id)->first();
        if ($account_details){
            if (session()->get('intended_url')){
                session()->forget('intended_url');
            }
            $cards = Card::get();
            $countries = Country::get();
            $denominations = Denomination::get();
            /*$coins = Coin::getCoins();
            $bitcoin = Coin::getBitCoin();
            $ethereum = Coin::getEthereum();
            $bitcoin_platforms = Platform::getCoinPlatforms($bitcoin->id);
            $ethereum_platforms = Platform::getCoinPlatforms($ethereum->id);
            $bitcoin_rate = CoinRate::getRate($bitcoin->id);
            $ethereum_rate = CoinRate::getRate($ethereum->id);*/
            return view('actions.trade-card', compact('cards', 'countries', 'denominations'));
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
    public function submitTradeCardForm(Request $request){
        try {
            foreach ($request->allFiles() as $folders){
                foreach ($folders as $file){
                    if($file->getSize() > 5000000 ) {
                        return redirect()->back()->with('failure', "One of the Uploaded Files Size is Larger than 5mb");
                    }
                }
            }
            $card_amount = Denomination::where('id', $request->denomination)->first()->value;
            $giftcard_type = "giftcard-type";
            if ($request->sell_option == 1){
                $new_card = new CardSelling();
                $new_card->card_id = $request->$giftcard_type;
                $new_card->user_id = Auth::user()->id;
                $new_card->sell_option_id = $request->sell_option;
                $new_card->token = Str::random(15);
                $new_card->denomination_id = $request->denomination;
                if ($request->country == "others"){
                    $new_card->user_transaction_approval = 0;
                    $new_card->other_country = $request->country_other;
                }
                else{
                    $rate = Ecode::where('card_id',$request->$giftcard_type)->first()->rate;
                    $new_card->user_transaction_approval = 1;
                    $new_card->amount_payable = $rate * $card_amount;
                    $new_card->country_id = $request->country;
                    $new_card->rate = $rate;
                }
                $new_card->save();
                $new_ecode = new EcodeTransactions();
                $new_ecode->code = $request->ecode;
                $new_ecode->card_selling_id = $new_card->id;
                $new_ecode->token = Str::random(15);
                $new_ecode->save();
                return redirect()->back()->with('success', "Transaction Submitted For Admin Processing");
            }
            else{
                $new_card = new CardSelling();
                $new_card->card_id = $request->$giftcard_type;
                $new_card->denomination_id = $request->denomination;
                $new_card->user_id = Auth::user()->id;
                if ($request->$giftcard_type == 3){
                    $new_card->receipt_type = $request->receipt_type == 'cash' ? 1 : 2;
                }
                $new_card->token = Str::random(15);
                $new_card->sell_option_id = $request->sell_option;
                if ($request->country == "others"){
                    $new_card->user_transaction_approval = 0;
                    $new_card->other_country = $request->country_other;
                }
                else{
                    $rate = CardRate::where(['card_id' =>$request->$giftcard_type, 'country_id' => $request->country])->first()->rate;
                    $new_card->amount_payable = $rate * $card_amount * count($request->file('card_upload'));
                    $new_card->rate = $rate;
                    $new_card->country_id = $request->country;
                }
                $new_card->save();
                foreach($request->file('card_upload') as $image){
                   $image_name = User::processImage($image);
                   $new_image = new ImageUpload();
                   $new_image->card_selling_id = $new_card->id;
                   $new_image->image = $image_name;
                   $new_image->image_type = 1;
                   $new_image->token = Str::random(15);
                   $new_image->save();
                }
                foreach($request->file('receipt_upload') as $image){
                   $image_name = User::processImage($image);
                   $new_image = new ImageUpload();
                   $new_image->card_selling_id = $new_card->id;
                   $new_image->image = $image_name;
                   $new_image->image_type = 2;
                   $new_image->token = Str::random(15);
                   $new_image->save();
                }
                return redirect()->back()->with('success', "Transaction Submitted For Admin Processing");
            }
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
