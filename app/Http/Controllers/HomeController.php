<?php

namespace App\Http\Controllers;

use App\Hieworks\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return 'great';
        return view('layouts.home', ['home_categories' => Data::jobCategories()]);
    }
}
