<?php

namespace App\Http\Controllers\Admin;

use App\CardSelling;
use App\Chat;
use App\CoinBuying;
use App\CoinSelling;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function adminDashboard(){
        $users = User::get();
        $messages = Chat::get();
        $cards = CardSelling::get();
        $coin_buyings  = CoinBuying::get();
        $coin_sellings  = CoinSelling::get();
        $limit_users = User::orderBy('id', 'desc')->take(4)->get();
        $coin_selling_transactions = CoinSelling::orderBy('id', 'desc')->take(3)->get();
        $coin_buyings_transactions = CoinBuying::orderBy('id', 'desc')->take(3)->get();
        $card_transactions = CardSelling::orderBy('id', 'desc')->take(5)->get();
        return view('Admin.Actions.dashboard', compact('users', 'messages', 'cards',
            'coin_sellings', 'coin_buyings', 'limit_users', 'coin_buyings_transactions',
            'coin_selling_transactions', 'card_transactions'));
    }

    public function adminViewCardReceipt(){
        return view('Admin.Actions.card-receipt-upload');
    }

    public function userDetails($token){
        $user = User::where('token', $token)->first();
        if ($user){
            return view('Admin.Actions.user-details', compact('user'));
        }
        else{
            return redirect()->back()->with('failure', 'User Does not Exist');
        }

    }

    public function makeAdmin($token){
        $user = User::where('token', $token)->first();
        if ($user){
            $user->role_id = 2;
            $user->save();
            return redirect()->back()->with('success', 'Action Successfully Performed');
        }
        else{
            return redirect()->back()->with('failure', 'User Does not Exist');
        }

    }

    public function removeAdmin($token){
        $user = User::where('token', $token)->first();
        if ($user){
            $user->role_id = 1;
            $user->save();
            return redirect()->back()->with('success', 'Action Successfully Performed');
        }
        else{
            return redirect()->back()->with('failure', 'User Does not Exist');
        }

    }

    public function confirmCoinBuying(Request $request, $token){
        try {
            if ($request->file('coin_payment_proof')->getSize() > 5000000) {
                return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
            }
            $image = $request->file('coin_payment_proof');
            $image_name = User::processImage($image);
            $card_buying = CoinBuying::where('token', $token)->first();
            if ($card_buying){
                $card_buying->status = 1;
                $card_buying->platform_payment_proof = $image_name;
                $card_buying->save();
                if ($request->title){
                    $message = new Chat();
                    $message->title = $request->title;
                    $message->body = $request->body ? $request->body: $request->title;
                    $message->user_id = $card_buying->user_id;
                    $message->sender = 1;
                    $message->save();
                }
                return redirect()->back()->with('success', "Coin Buying Transaction Successfully Completed");
            }
            else{
                return redirect()->back()->with('failure', "Transaction Not Found");
            }

        }
        catch(\Exception $exception){
            return redirect()->back()->with('failure', "This Process could not be completed");
        }

    }

    public function confirmCoinSelling(Request $request, $token){
        try {
            if ($request->file('coin_payment_proof')->getSize() > 5000000) {
                return redirect()->back()->with('failure', "Uploaded File Size is Larger than 5mb");
            }
            $image = $request->file('coin_payment_proof');
            $image_name = User::processImage($image);
            $coin_selling = CoinSelling::where('token', $token)->first();
            if ($coin_selling){
                $coin_selling->status = 1;
                $coin_selling->platform_payment_proof = $image_name;
                $coin_selling->save();
                if ($request->title){
                    $message = new Chat();
                    $message->title = $request->title;
                    $message->body = $request->body ? $request->body: $request->title;
                    $message->user_id = $coin_selling->user_id;
                    $message->sender = 1;
                    $message->save();
                }
                return redirect()->back()->with('success', "Coin Selling Transaction Successfully Completed");
            }
            else{
                return redirect()->back()->with('failure', "Transaction Could not be found");
            }

        }
        catch(\Exception $exception){
            return redirect()->back()->with('failure', "This Process could not be completed");
        }

    }

    public function confirmCoinSellingWallet($token){
        try {
            $coin_selling = CoinSelling::where('token', $token)->first();
            if ($coin_selling){
                $user = User::where('id', $coin_selling->user_id)->first();
                if ($user){
                    $coin_selling->status = 1;
                    $coin_selling->token = Str::random(15);
                    $coin_selling->save();

                    $user->account_balance = $user->account_balance + $coin_selling->amount_payable;
                    $user->save();
                    return redirect()->back()->with('success', 'Transaction Successfully activated');
                }
                else{
                    return redirect()->back()->with('failure', 'User does not exist');
                }
            }
            else{
                return redirect()->back()->with('failure', 'Transaction does not exist');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Transaction Could not be completed');
        }
    }



}
