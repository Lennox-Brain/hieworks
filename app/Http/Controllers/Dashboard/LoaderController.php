<?php

namespace App\Http\Controllers\Dashboard;

use App\Application;
use App\Job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoaderController extends Controller
{
    public function loadAccount()
    {
        $jobs = Job::where('user_id', Auth::id())->count();
            return view('layouts.dashboard.account', ['count_jobs' => $jobs]);
    }

    public function loadJobs()
    {
        $userjobs = Job::where('user_id', Auth::id())
                        ->where('status', true)->simplePaginate();
            return view('layouts.dashboard.jobs', ['userjobs' => $userjobs]);
    }

    public function loadSettings()
    {
            return view('layouts.dashboard.settings');
     }

    public function loadJobEdit($id)
    {
            $id =  base64_decode($id);
            $job = Job::findOrFail($id); 
            return view('layouts.dashboard.updatejob',['job'=>$job]);
     }

     public function loadApplications($job_title, $id)
     {
         $id = base64_decode($id);
         $job_info = Job::find($id);
         $applications = Application::where('application_id', $id)
                            ->orderBy('created_at', 'DESC')
                            ->simplePaginate();
        return view('layouts.dashboard.applications', ['applications' => $applications, 'job'=>$job_info]);                    
     }

     public function loadNotifications()
    {
        return view('layouts.dashboard.notifications');
     }


}
