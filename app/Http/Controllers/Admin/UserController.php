<?php

namespace App\Http\Controllers\Admin;

use App\Chat;
use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function usersManagement(){
        $users = User::orderBy('id', 'desc')->get();
        return view('Admin.Actions.users-management', compact('users'));
    }

    public function sendMessage(Request $request, $token){
        try {
            $this->validate($request, [
                'title' => 'bail|required',
                'body' => 'bail|required',
            ]);
            $user = User::where('token', $token)->first();
            if ($user){
                $send_message = new Chat();
                $send_message->title = $request->title;
                $send_message->body = $request->body;
                $send_message->user_id = $user->id;
                $send_message->sender = 1;
                $send_message->save();
                return redirect()->back()->with('success', 'Message Successfully Sent');
            }
            else{
                return redirect()->back()->with('failure', 'user Details not found');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action could not be processed');
        }
    }

    public function editWallet(Request $request, $token){
        try {
            $this->validate($request, [
                'wallet' => 'bail|required',
            ]);
            $user = User::where('token', $token)->first();
            if ($user){
                $user->account_balance = $request->wallet;
                $user->token = Str::random(15);
                $user->save();
                return redirect()->back()->with('success', 'Wallet Successfully Updated');
            }
            else{
                return redirect()->back()->with('failure', 'user Details not found');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action could not be processed');
        }
    }
}
