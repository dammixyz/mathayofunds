<?php

namespace App\Http\Controllers\Admin;

use App\Chat;
use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletRequestController extends Controller
{
    public function userWallets()
    {
        $withdrawals = Withdrawal::get();
        return view('Admin.Actions.user-wallets', compact('withdrawals'));
    }

    public function approveWalletPaymentRequest(Withdrawal $withdrawal)
    {
        $withdrawal->update(['status' => 1]);
        return redirect()->back();
    }

    public function cancellationMessage(Request $request, Withdrawal $withdrawal, User $user)
    {
        //Validate input form
        $this->validate($request, [
            'title' => 'bail|required',
            'body' => 'bail|required',
        ]);

        //Create Message
        Chat::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $user->id,
            'sender' => 1,
        ]);

        //Update withdrawal status
        $withdrawal->update(['status' => 2]);

        //Refund account balance
        $bal = $user->account_balance + $withdrawal->amount;
        User::where('id', $user->id)->update(['account_balance' => $bal]);

        return redirect()->back()->with('success', 'Message sent and transaction cancelled');
    }


}
