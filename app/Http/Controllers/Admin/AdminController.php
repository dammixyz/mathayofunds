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




}
