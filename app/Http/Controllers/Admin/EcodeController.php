<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use App\Coin;
use App\CoinRate;
use App\Ecode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EcodeController extends Controller
{
    public function viewEcode(){
        $ecodes = Ecode::orderBy('id', 'desc')->get();
        $cards = Card::get();
        return view('Admin.Actions.view-ecodes', compact('ecodes', 'cards'));
    }

    public function addEcode(Request $request){
        try {
            $this->validate($request, [
                'rate' => 'bail|required',
                'card_id' => 'bail|required|unique:ecodes',
            ]);

            $add_rate = new Ecode();
            $add_rate->card_id = $request->card_id;
            $add_rate->rate = $request->rate;
            $add_rate->token = Str::random(15);
            $add_rate->save();
            return redirect()->back()->with('success', 'Ecode Rate Added Successfully');

        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action could not be performed');
        }
    }

    public function editEcode(Request $request, $token){
        try {
            $this->validate($request, [
                'rate' => 'bail|required',
            ]);
            $rate = Ecode::where('token', $token)->first();
            if ($rate){
                $rate->rate = $request->rate;
                $rate->token = Str::random(15);
                $rate->save();
                return redirect()->back()->with('success', 'Ecode Rate Updated Successfully');
            }
            else{
                return redirect()->back()->with('failure', 'Ecode Could not be Found');
            }

        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action could not be performed');
        }
    }
}
