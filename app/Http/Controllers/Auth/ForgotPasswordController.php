<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Carbon\Carbon;
use App\Mail\ForgetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    // use SendsPasswordResetEmails;
  
    public function sendPasswordResetLink(Request $request)
    {
       $user = User::where('email', $request->email)->first();
       if(!$user) return redirect()->back()->withErrors(['user with this email does not exist'])->withInput();
       $link =  URL::temporarySignedRoute('confirm:passwordreset', Carbon::now()->addMinutes(15), ['id' => \base64_encode($user->id)])."/?utm_source=email&utm_medium=email&utm_content=reset account password";
       Mail::to($user->email)->send(new ForgetPassword($link));
          return redirect()->back()->with('ResetStatus', 'a reset link has been sent to your email');
       
       
    }
}
