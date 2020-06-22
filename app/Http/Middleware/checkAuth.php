<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            return $next($request);
        }
        else{
            if(\Illuminate\Support\Facades\Route::getCurrentRoute()->action['as'] == "user.trade-coin"
            ){
                $intended_url = \Illuminate\Support\Facades\Route::getCurrentRoute()->action['as'];
                session()->put('intended_url', $intended_url);
                return redirect(route('login'))->with('failure', "You must be Signed in to Perform this Action");
            }
            else{
                return redirect(route('login'))->with('failure', "You must be Signed in to Complete this Action");
            }
        }
    }
}
