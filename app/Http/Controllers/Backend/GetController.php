<?php

namespace App\Http\Controllers\Backend;

use App\Job;
use App\Article;
use App\Category;
use App\Hieworks\Validators;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class GetController extends Controller
{
    public function showAccount(){
        $jobs = Job::count();
        return view('layouts.backend.account', ['count_jobs' => $jobs]);
    }


  



}
