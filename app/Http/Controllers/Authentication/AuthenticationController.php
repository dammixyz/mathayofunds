<?php

namespace App\Http\Controllers\Authentication;

use App\AuditTrail;
use App\CustomerDetail;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthenticationController extends Controller
{
    public function Authenticate(){
        return view('actions.authentication');
    }

    public function Logout(){
        Auth::logout();
        return redirect(route('homepage'))->with('success', 'You Have Successfully Logout');
    }
    public function userLogin(Request $request){
        $this->validate($request, [
            'email' => 'bail|required',
            'password' => 'bail|required'
        ]);
        try {
            if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
                $role = Auth::user()->role_id;
                // check role for redirection
                switch ($role){
                    case 1:
                        /*if (session()->get('intended_url')){
                            return redirect(route(session()->get('intended_url')))->with('success', 'Login Successful');
                            break;
                        }
                        else{
                            return redirect(route('user.dashboard'))->with('success', 'Login Successful');
                            break;
                        }*/
                        return redirect(route('homepage'))->with('success', 'Login Successful');
                        break;
                    case 2:
                        return redirect(route('admin.dashboard'))->with('success', 'Login Successful');
                        break;
                    default:
                        return redirect(route('user.dashboard'))->with('success', 'Login Successful');
                }
            }
            else{
                return redirect()->back()->with('failure', 'Email or Password Incorrect');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', "Action Could not be Performed");
        }
    }

    public function userRegistration(Request $request){
        $this->validate($request, [
            'password' => 'bail|confirmed|required',
            'username' => 'bail|required|unique:users',
            'phone_number' => 'bail|required',
            'email' => 'bail|required|unique:users', // checks for email uniqueness
        ]);
        try {
            // save user details
            User::registerUser($request);
/*            Mail::to($request->email)->send(new \App\Mail\RegistrationMail($user)); // send email to user*/
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $role = Auth::user()->role_id;
                // check role for redirection
                switch ($role){
                    case 1:
                        /*if (session()->get('intended_url')){
                            return redirect(route(session()->get('intended_url')))->with('success', 'Login Successful');
                            break;
                        }
                        else{
                            return redirect(route('user.dashboard'))->with('success', 'Login Successful');
                            break;
                        }*/
                        return redirect(route('homepage'))->with('success', 'Login Successful');
                        break;
                    case 2:
                        return redirect(route('admin.dashboard'))->with('success', 'Login Successful');
                        break;
                    default:
                        return redirect(route('user.dashboard'))->with('success', 'Login Successful');
                }
            }
            else{
                return  redirect()->back()->with('failure', 'Authentication Failed');
            }
        }
        catch(\Exception $exception){
            return redirect()->back()->with('failure', "Action Could not be Performed");
        }
    }
}
