<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('actions.dashboard');
    }

    public function Profile(){
        return view('actions.profile');
    }

    public function myMessage(){
        return view('actions.my-message');
    }

    public function myCoinTransactions(){
        return view('actions.coin-transactions');
    }

    public function myCardTransactions(){
        return view('actions.card-transactions');
    }
}
