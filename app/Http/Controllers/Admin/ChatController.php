<?php

namespace App\Http\Controllers\Admin;

use App\Chat;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function messages(){
        $messages = Chat::orderBy('id', 'desc')->paginate(4);
        $users = User::get();
        return view('Admin.Actions.messages', compact('messages', 'users'));
    }

    public function replyMessage(Request $request){
        try {
            $this->validate($request, [
                'title' => 'bail|required',
                'body' => 'bail|required',
                'token' => 'bail|required',
            ]);
            $user = User::where('token', $request->token)->first();
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
}
