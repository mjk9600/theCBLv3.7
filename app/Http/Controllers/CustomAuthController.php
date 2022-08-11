<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Mail\Varification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\verifyUser;
use Illuminate\Support\Str;

       

class CustomAuthController extends Controller
{
    public function login()
    {
            return view("auth.loginPage");
    }
    public function register()
    {
            return view("auth.registerPage");
    }
    public function registerUser(Request $request)
    {
       request()->validate([
            'name' => 'required | min:3 ',
            'email' => 'required|email|unique:users',
            'mobile'=>'required|numeric|digits:10',
            'password' => 'required| min:8 ',
            'confirm_password' => 'required| min:8|same:password'  
         ]);

      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->mobile = $request->mobile;
      $user->password = Hash::make($request->password);
      $user->confirm_password = Hash::make($request->confirm_password);
      $res = $user->save();

      $token = Str::random(64);
    //   $createUser = $this->create($user);
    //   verifyUser::create([
    //         'user_id' => $createUser->id, 
    //         'token' => $token
    //       ]);
 

    $user['token'] = $token;
    $user['is_verified'] = 0;

      Mail::to($request->email)->send(new Varification($user->name, $token));
      
        if ($res) 
        {   
                  return redirect("loginPage")->with('success', 'please check your mail and click on verify button');
        }
         else 
         {
                 return back()->with('fail', 'Something wrong');
         }

        /*
          $data = $request->all();
        $createUser = $this->create($data);
  
        $token = Str::random(64);
  
        UserVerify::create([
              'user_id' => $createUser->id, 
              'token' => $token
            ]);
  
        Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Email Verification Mail');
          });
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');






         */
    }

    public function loginUser (Request $request)
      {
                $request->validate([
                'email' => 'required| email ',
                'password' => 'required|min:8'
                ]);
              
                $user =  User::where('email', '=', $request->email)->first();
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                                //    if (Hash::check ($request->password, $user->password))
                                //     { 
                                //            $request -> session() ->put('name' , $user->name);
                                //                 return redirect('dashboard')->with('success', "Welcome username to the Corporate BasketBall Leag.");  
                                //    } 
                                //    else 
                                //    {
                                //  return back()->with('fail', 'Password not matches.');
                                // }

                                $request->session()->all();
                                $request -> session() ->put('name' , $user->name);
                                   return redirect('dashboard')->with('success', "Welcome username to the Corporate BasketBall Leag.");
                }
                
                        return back()->with('fail', 'This email is not registered.');
                
         }

         public function dashboard()
         {
            if(Auth::check()) {
                return view('user.dashboard');
            }
    
            return redirect("loginPage")->with('fail','Oopps! You do not have access');
            //   return view('user.dashboard');
         }


         
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('loginPage');
    }

    /********************************************* */
         public function chooseYourReg()
         {
            
                return view('user.chooseYourReg');
         }

             /**
     * Forgot password
   
     */
    public function forgotPassword()
    {
        return view('auth.forgot');
    }

    /**
     * Validate token for forgot password
     * @param token
     * @return view
     */
    public function forgotPasswordValidate($token)
    {
        $user = User::where('token', $token)->where('is_verified', 0)->first();
        if ($user) {
            $email = $user->email;
            return view('auth.reset', compact('email'));
        }
        return redirect()->route('forgot')->with('failed', 'Password reset link is expired');
    }

    /**
     * Reset password
     * @param request
     * @return response
     */
    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('failed', 'Failed! email is not registered.');
        }

        $token = Str::random(60);

        $user['token'] = $token;
        $user['is_verified'] = 0;
        $user->save();

        Mail::to($request->email)->send(new ResetPassword($user->name, $token));
/*
        if(Mail::send() == null) {
            return back()->with('failed', 'Failed! there is some issue with email provider');
        }
        */
          
            return back()->with('success', 'Success! password reset link has been sent to your email');
        
    }

    /**
     * Change password
     * @param request
     * @return response
     */
    public function updatePassword(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password|min:8'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user['is_verified'] = 0;
            $user['token'] = '';
            $user['password'] = Hash::make($request->password);
            $user->save();
            return redirect()->route('login')->with('success', 'Success! password has been changed');
        }
        return redirect()->route('forgot')->with('failed', 'Failed! something went wrong');
    }




/****Mail varification******* */

public function verifyAccount($token)
{
    $verifyUser = verifyUser::where('token', $token)->first();
  //  $verifyUser = User::where('token', $token)->where('is_verified', 0)->first();

    $message = 'Sorry your email cannot be identified.';

    if(!is_null($verifyUser) ){
        $user = $verifyUser->user;
          
        if(!$user->is_email_verified) {
            $verifyUser->user->is_email_verified = 1;
            $verifyUser->user->save();
            $message = "Your e-mail is verified. You can now login.";
        } else {
            $message = "Your e-mail is already verified. You can now login.";
        }
    }

  return redirect()->route('login')->with('message', $message);
}

}

