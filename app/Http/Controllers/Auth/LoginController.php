<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function authenticate(Request $request){
           $data =  Validator::make($request->except('_token'), [
                'email' => 'required',
                'password' => 'required'
            ])->validate();
            $credentials =  ['email'=> $data['email'], 'password' => $data['password'], 'status' => true];

            $isLoggedin = Auth::attempt($credentials, true);
            if(!$isLoggedin) return redirect()->back()->withErrors(['wrong username or password'])->withInput();
            return redirect(route('user:account'));
    }

    public function logout(){
        Auth::logout();
        return redirect(route('home'));
    }
}
