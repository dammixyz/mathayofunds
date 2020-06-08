<?php

namespace App\Http\Controllers\Newsletter;

use App\Http\Controllers\Controller;
use App\NewsLetter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function newsletterSubscription(Request $request){
        $this->validate($request, [
            'email' => 'bail|required|unique:news_letters'
        ]);
        try {
            $subscription = NewsLetter::createSubscription($request->email);
            if ($subscription){
                return redirect()->back()->with('success', 'Action Successfully Performed');
            }
            else{
                return redirect()->back()->with('failure', 'Error Performing Action');
            }
        }
        catch(\Exception $exception){
            return redirect()->back()->with('failure', 'Action Could not be  performed');
        }
    }
}
