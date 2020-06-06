<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    
     // commentted out by Lennox 01-06-2020
    // use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // commentted out by Lennox 01-06-2020 
     // protected $redirectTo = RouteServiceProvider::HOME;

    

     public function confirmPasswordResetLink(Request $request)
     {
        return view('layouts.confirmpasswordreset', ['user_id' => $request->id]);       
        
     }

     public function resetPassword(Request $request)
     {
        //  return $request;
         $data = Validator::make($request->except('_token'),[
            'password' => ['required', 'min:8', 'confirmed'],
         ])->validate();
         $user_id = base64_decode($request->_key);
         $user = User::findOrFail($user_id)->update(['password' => $data['password'] ]);
         if(!$user) return redirect()->back()->withErrors(['sorry, something went wrong. try again']);
         return redirect()->back()->with('ResetStatus', 'password succefully changed');
       
     }

}
