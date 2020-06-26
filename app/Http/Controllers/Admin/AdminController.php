<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(){
        return view('Admin.Actions.dashboard');
    }

    public function adminViewCardReceipt(){
        return view('Admin.Actions.card-receipt-upload');
    }

    public function userDetails(){
        return view('Admin.Actions.user-details');
    }

    public function cardTradeTransactions(){
        return view('Admin.Actions.card-trade-transactions');
    }

    public function coinTradeTransactions(){
        return view('Admin.Actions.coin-trade-transactions');
    }

    public function usersManagement(){
        return view('Admin.Actions.users-management');
    }

    public function cardRates(){
        return view('Admin.Actions.card-rates');
    }

    public function coinRates(){
        return view('Admin.Actions.coin-rates');
    }

    public function messages(){
        return view('Admin.Actions.messages');
    }

    public function blog(){
        return view('Admin.Actions.blog');
    }

    public function giftCardManagement(){
        return view('Admin.Actions.gift-card-management');
    }










}
