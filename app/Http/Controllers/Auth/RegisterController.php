<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'contact' => ['max:255','required', 'max:10'],
            'password' => ['required', 'min:8', 'confirmed'],
            'company' => ['required', 'max:255'],
            'company_summary'=>'required|max:500',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function signUp(Request $request)
    {
         $data = $this->validator($request->except('_token'))->validate();
        $status = User::create([
            'firstname' => strip_tags($data['firstname']),
            'lastname' => strip_tags($data['lastname']),
            'email' => strip_tags($data['email']),
            'contact' => strip_tags($data['contact']),
            'password' => strip_tags($data['password']),
            'company' => strip_tags($data['company']),
            'company_summary' => strip_tags($data['company_summary']),
         ]);

         if(!$status){
            return redirect()->back()->withErrors(['sorry, try again later'])->withInput();
         }

          return redirect()->back()->with(['info' =>'registration successful']);

    }
}
