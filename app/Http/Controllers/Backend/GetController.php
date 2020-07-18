<?php

namespace App\Http\Controllers\Backend;

use App\Job;
use App\User;
use App\Report;
use App\Article;
use App\Newsletter;
use App\Http\Controllers\Controller;
use Laravel\Ui\Presets\React;

class GetController extends Controller
{
    public function showAccount(){
        $active_jobs = Job::where('status', true)->count();
        $expired_jobs = Job::where('status', false)->count();
        $active_articles = Article::count();
        $reports = Report::count();
        $subscribers = Newsletter::count();
        $active_employers = User::count();
        return view('layouts.backend.account',
         [
             'active_jobs' => $active_jobs,
             'expired_jobs' =>$expired_jobs,
             'active_articles'=>$active_articles,
             'reports'=> $reports,
             'subscribers' => $subscribers,
             'active_employers' => $active_employers
         ]
        );
    }



    public function showReports(){
            $reports = Report::orderby('created_at', 'desc')->simplePaginate();
            return view('layouts.backend.reports', ['reports'=>$reports]);
    }


}
