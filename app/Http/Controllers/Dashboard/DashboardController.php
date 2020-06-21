<?php

namespace App\Http\Controllers\Dashboard;

use App\AccountDetail;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('actions.dashboard');
    }

    public function Profile(){
        $account_details = AccountDetail::where('user_id', Auth::user()->id)->first();
        return view('actions.profile', compact('account_details'));
    }

    public function updateBankDetails(Request $request){
        $this->validate($request, [
            'bank'=> 'bail|required',
            'account_no' => 'bail|required',
            'full_name' => 'bail|required',
        ]);
        try {
            $user_details = AccountDetail::where('user_id', Auth::user()->id)->first();
            if ($user_details){
                $user_details->bank = $request->bank;
                $user_details->account_number = $request->account_no;
                $user_details->name = $request->full_name;
                $user_details->token = Str::random(15);
                $user_details->save();
                return redirect()->back()->with('success','Account Details Successfully Updated');
            }
            else{
                $new_account_details = new AccountDetail();
                $new_account_details->bank = $request->bank;
                $new_account_details->account_number = $request->account_no;
                $new_account_details->name = $request->full_name;
                $new_account_details->user_id = Auth::user()->id;
                $new_account_details->token = Str::random(15);
                $new_account_details->save();
                return redirect()->back()->with('success','Account Details Successfully Saved');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure','Account Details Could not be Saved or Updated');
        }

    }

    public function updateProfileDetails(Request $request){
        $this->validate($request, [
            'phone_number' => 'bail|required',
        ]);
        try {
            if($request->file('profile_pic')->getSize() > 1000000 )
            {
                return redirect()->back()->with('failure', "Uploaded File Size is Larger than 1mb");
            }
            $user = User::where('id', Auth::user()->id)->first();
            if ($request->hasFile('profile_pic')){
                $image = $request->file('profile_pic');
                $image_name = User::processImage($image);
                $user->icon = $image_name;
            }
            $user->phone_number = $request->phone_number;
            $user->save();
            return redirect()->back()->with('success','Account Details Successfully Updated');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure','Account Details Could not be Saved or Updated');
        }

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
