<?php

namespace App\Http\Controllers\Authentication;

use App\AuditTrail;
use App\CustomerDetail;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
                        if (session()->get('intended_url')){
                            return redirect(route(session()->get('intended_url')))->with('success', 'Login Successful');
                            break;
                        }
                        else{
                            return redirect(route('user.dashboard'))->with('success', 'Login Successful');
                            break;
                        }
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
            Mail::to($request->email)->send(new \App\Mail\RegistrationMail($request->username)); // send email to user
            Mail::to('mathayofund@gmail.com')->send(new \App\Mail\RegistrationMail()); // send email to user
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $role = Auth::user()->role_id;
                // check role for redirection
                switch ($role){
                    case 1:
                        if (session()->get('intended_url')){
                            return redirect(route(session()->get('intended_url')))->with('success', 'Login Successful');
                            break;
                        }
                        else{
                            return redirect(route('user.dashboard'))->with('success', 'Login Successful');
                            break;
                        }
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


    public function forgotPassword()
    {
        return view('actions.forgot-password');
    }

    public function forgotPasswordEmail(Request $request)
    {
        //Validate input form
        $this->validate($request, [
            'email' => 'bail|required',
        ]);
        try {
            $user = User::where('email', $request['email'])->first();
            if (!$user){
                return redirect()->back()->with('failure', 'Email Does Not Exist');
            }
            else{
                Mail::to($user->email)->send(new \App\Mail\ForgotPassword($user)); // send email to user
                return redirect()->back()->with('success', 'A link has been sent to your email, use the link to reset your password');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Action could not be completed');
        }

    }

    public function resetPassword($token){
        $user = User::where('token', $token)->first();
        if ($user){
            return view('actions.change-password', compact('user'));
        }
        else{
            return redirect(route('login'))->with('failure', 'This operation cannot be completed');
        }
    }

    function finalChangePassword(Request $request, $token){
        $this->validate($request, [
            'password' => 'bail|required|confirmed'
        ]);
        $user = User::where('token', $token)->first();
        if ($user){
            $user->password = bcrypt($request->password);
            $user->token = Str::random(15);
            $user->save();
            return redirect(route('login'))->with('success', 'Password Successfully Changed');
        }
        else{
            return redirect(route('login'))->with('failure', 'Operation cannot be completed');
        }
    }
}
