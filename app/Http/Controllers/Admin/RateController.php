<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use App\CardRate;
use App\Coin;
use App\CoinRate;
use App\Country;
use App\Denomination;
use App\Http\Controllers\Controller;
use App\Platform;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RateController extends Controller
{
    public function coinRates(){
        $coin_rates = CoinRate::orderBy('id', 'desc')->get();
        $coins = Coin::get();
        return view('Admin.Actions.coin-rates', compact('coin_rates', 'coins'));
    }

    public function editCoinRate(Request $request, $token){
        try {
            $this->validate($request, [
                'rate' => 'bail|required',
            ]);
            $coin_rate = CoinRate::where('token', $token)->first();
            if ($coin_rate){
                $coin_rate->usd_rate = $request->rate;
                $coin_rate->save();
                return redirect()->back()->with('success', 'Coin Details Updated Successfully');
            }
            else{
                return redirect()->back()->with('failure', 'Coin rate not found');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action could not be performed');
        }
    }

    public function addCoinRate(Request $request){
        try {
            $this->validate($request, [
                'coin' => 'bail|required',
                'rate' => 'bail|required',
            ]);
            $check_rate = CoinRate::where('coin_id', $request->coin)->first();
            if ($check_rate){
                return redirect()->back()->with('failure', 'Coin rate already exist');
            }
            else{
                $add_rate = new CoinRate();
                $add_rate->coin_id = $request->coin;
                $add_rate->usd_rate = $request->rate;
                $add_rate->token = Str::random(15);
                $add_rate->save();
                return redirect()->back()->with('success', 'Coin Rate Added Successfully');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action could not be performed');
        }
    }

    public function viewCoins(){
        $coins = Coin::get();
        return view('Admin.Actions.view-coins', compact('coins'));
    }

    public function viewCards(){
        $cards = Card::get();
        return view('Admin.Actions.view-cards', compact('cards'));
    }

    public function addCoin(Request $request){
        try {
            $this->validate($request, [
                'name' => 'bail|required|unique:coins'
            ]);
            $add_coin = new Coin();
            $add_coin->name = $request->name;
            $add_coin->image = Str::random(12);
            $add_coin->token = Str::random(15);
            $add_coin->save();
            return redirect()->back()->with('success', 'Coin Successfully Added');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function addCountry(Request $request){
        try {
            $this->validate($request, [
                'name' => 'bail|required|unique:countries'
            ]);
            $add_country = new Country();
            $add_country->name = $request->name;
            $add_country->token = Str::random(15);
            $add_country->save();
            return redirect()->back()->with('success', 'Country Successfully Added');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }
    public function addDenomination(Request $request){
        try {
            $this->validate($request, [
                'value' => 'bail|required|unique:denominations'
            ]);
            $add_denomination = new Denomination();
            $add_denomination->value = $request->value;
            $add_denomination->token = Str::random(15);
            $add_denomination->save();
            return redirect()->back()->with('success', 'Denomination Successfully Added');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function addCardRate(Request $request){
        try {
            $this->validate($request, [
                'rate' => 'bail|required',
                'card' => 'bail|required',
                'country' => 'bail|required',
            ]);
            $check_card = CardRate::where(['card_id' => $request->card, 'country_id' => $request->country])->first();
            if ($check_card){
                return redirect()->back()->with('failure', 'Card rate already exist');
            }
            else{
                $add_rate = new CardRate();
                $add_rate->rate = $request->rate;
                $add_rate->card_id = $request->card;
                $add_rate->country_id = $request->country;
                $add_rate->token = Str::random(15);
                $add_rate->save();
                return redirect()->back()->with('success', 'Rate Successfully Added');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function editCountry(Request $request, $token){
        $this->validate($request, [
            'name' => 'bail|required|unique:countries'
        ]);
        try {
            $country = Country::where('token', $token)->first();
            if ($country){
                $country->name = $request->name;
                $country->token = Str::random(15);
                $country->save();
                return redirect()->back()->with('success', 'Country Successfully Added');
            }
            else{
                return redirect()->back()->with('failure', 'Country Details does not exit');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function editCoin(Request $request, $token){
        $this->validate($request, [
            'name' => 'bail|required|unique:coins'
        ]);
        try {
            $coin = Coin::where('token', $token)->first();
            if ($coin){
                $coin->name = $request->name;
                $coin->token = Str::random(15);
                $coin->save();
                return redirect()->back()->with('success', 'Coin Successfully Added');
            }
            else{
                return redirect()->back()->with('failure', 'Coin Details does not exit');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function editDenomination(Request $request, $token){
        $this->validate($request, [
            'value' => 'bail|required|unique:denominations'
        ]);
        try {
            $denomination = Denomination::where('token', $token)->first();
            if ($denomination){
                $denomination->value = $request->value;
                $denomination->token = Str::random(15);
                $denomination->save();
                return redirect()->back()->with('success', 'Denomination Successfully Updated');
            }
            else{
                return redirect()->back()->with('failure', 'Denomination Details does not exit');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function editCardRate(Request $request, $token){
        try {
            $this->validate($request, [
               'rate' => 'bail|required',
               'card' => 'bail|required',
               'country' => 'bail|required',
            ]);
            $card_rate = CardRate::where('token', $token)->first();
            if ($card_rate){
                $card_rate->rate = $request->rate;
                $card_rate->token = Str::random(15);
                $card_rate->card_id = $request->card;
                $card_rate->country_id = $request->country;
                $card_rate->save();
                return redirect()->back()->with('success', 'Card Rate Successfully Updated');
            }
            else{
                return redirect()->back()->with('failure', 'Card Rate Details does not exit');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function viewPlatform(){
        $platforms = Platform::get();
        $coins = Coin::get();
        return view('Admin.Actions.view-platforms', compact('platforms', 'coins'));
    }

    public function viewCountry(){
        $countries = Country::get();
        return view('Admin.Actions.view-countries', compact('countries'));
    }

    public function viewDenominations(){
        $denominations = Denomination::get();
        return view('Admin.Actions.view-denomination', compact('denominations'));
    }

    public function viewCardRates(){
        $cards = Card::get();
        $countries = Country::get();
        $rates = CardRate::get();
        return view('Admin.Actions.card-rates', compact('cards', 'countries', 'rates'));
    }

    public function addPlatform(Request $request){
        try {
            if (!$request->hasFile('image')) {
                return redirect()->back()->with('failure', "Image File must be Uploaded");
            }
            else {
                if ($request->file('image')->getSize() > 5000000) {
                    return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
                }
                $this->validate($request, [
                    'name' => 'bail|required',
                    'address' => 'bail|required',
                    'coin' => 'bail|required',

                ]);
                $check_platform = Platform::where(['name' => $request->name, 'coin_id' => $request->coin])->first();
                if ($check_platform){
                    return redirect()->back()->with('failure', 'Platform already exist');
                }
                else{
                    $image = $request->file('image');
                    $image_name = User::storeImage($image);
                    $add_platform = new Platform();
                    $add_platform->name = $request->name;
                    $add_platform->wallet_address = $request->address;
                    $add_platform->qr_code = $image_name;
                    $add_platform->coin_id = $request->coin;
                    $add_platform->save();
                    return redirect()->back()->with('success', 'Platform Successfully Added');
                }
            }

        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function addCard(Request $request){
        try {
            if (!$request->hasFile('image')) {
                return redirect()->back()->with('failure', "Image File must be Uploaded");
            }
            else {
                if ($request->file('image')->getSize() > 5000000) {
                    return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
                }
                $this->validate($request, [
                    'name' => 'bail|required|unique:cards',
                ]);
                $image = $request->file('image');
                $image_name = User::storeImage($image);
                $add_card = new Card();
                $add_card->name = $request->name;
                $add_card->image = $image_name;
                $add_card->token = Str::random(15);
                $add_card->save();
                return redirect()->back()->with('success', 'Card Successfully Added');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function editPlatform(Request $request, $token){
        $this->validate($request, [
            'name' => 'bail|required',
            'address' => 'bail|required',
            'coin' => 'bail|required',
        ]);
        try {
            if ($request->hasFile('image')){
                if ($request->file('image')->getSize() > 5000000) {
                    return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
                }
            }
            $check_platform = Platform::where('token', $token)->first();
            if ($check_platform){
                if ($request->hasFile('image')){
                    $image = $request->file('image');
                    $image_name = User::storeImage($image);
                    $check_platform->qr_code = $image_name;
                }
                $check_platform->name = $request->name;
                $check_platform->wallet_address = $request->address;
                $check_platform->coin_id = $request->coin;
                $check_platform->save();
                return redirect()->back()->with('success', 'Platform Successfully Edited');
            }
            else{
                return redirect()->back()->with('failure', 'Platform details not found');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }

    public function editCard(Request $request, $token){
        $this->validate($request, [
            'name' => 'bail|required',
        ]);
        try {
            if ($request->hasFile('image')){
                if ($request->file('image')->getSize() > 5000000) {
                    return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
                }
            }
            $check_card = Card::where('token', $token)->first();
            if ($check_card){
                if ($request->hasFile('image')){
                    $image = $request->file('image');
                    $image_name = User::storeImage($image);
                    $check_card->image = $image_name;
                }
                $check_card->name = $request->name;
                $check_card->save();
                return redirect()->back()->with('success', 'Card Details Successfully Edited');
            }
            else{
                return redirect()->back()->with('failure', 'Card Details not found');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be performed');
        }
    }
}
