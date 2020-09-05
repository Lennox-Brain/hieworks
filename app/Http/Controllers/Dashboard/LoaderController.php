<?php

namespace App\Http\Controllers\Dashboard;

use App\Application;
use App\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

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
                        ->where('status', true)
                        ->orderBy('created_at', 'desc')
                        ->simplePaginate();
            return view('layouts.dashboard.jobs', ['userjobs' => $userjobs]);
    }

    public function searchDashboardJob(Request  $request)
    {
        $query = trim($request->q);
        if( $query == '' ) return redirect()->back();
        $searchResult =  Job::where('job_title', 'like', "%$query%")
                            ->orWhere('job_type', 'like', "%$query%")
                            ->orWhere('job_category', 'like', "%$query%")
                            ->orWhere('job_location', 'like',  "%$query%")
                            ->orWhere('job_company', 'like', "%$query%")
                            ->orWhere('job_id', 'like', "%$query%")
                            ->where('status', true)
                            ->orderBy('created_at', 'DESC')
                            ->simplePaginate();

         $searchResult->appends([
             'q' => $query
         ]);
         
            return view('layouts.dashboard.jobs', ['userjobs' => $searchResult]);
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
