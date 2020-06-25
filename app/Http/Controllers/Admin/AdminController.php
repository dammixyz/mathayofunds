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
        return view('Admin.Actions.dashboard', compact('users', 'messages', 'cards',
            'coin_sellings', 'coin_buyings', 'limit_users', 'coin_buyings_transactions', 'coin_selling_transactions'));
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




}
