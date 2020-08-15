<?php

namespace App\Http\Livewire;

use App\Newsletter as NewsletterModel;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Newsletter extends Component
{

    public $email;

    public function subscribe(Request $request)
    {
       
        $validate = Validator::make($request->data, [
            'email' => 'required|email|max:255|unique:newsletters,email'
        ])->validate();

        $status = NewsletterModel::create([
            'email'=> $validate['email']
        ]);

        if($status) return redirect()->back()->with(['info' =>'Subscription successful']);

    }


    public function render()
    {
       
        return view('livewire.newsletter');
    }
}
