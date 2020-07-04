<?php

namespace App\Http\Controllers\Dashboard;

use App\Application;
use App\Hieworks\Helpers;
use App\Job;
use App\Http\Controllers\Controller;


class DeleteController extends Controller
{
    public function deleteApplication($id){
        $cvPath = '/storage/docs/cv/';
        $coverPath = '/storage/docs/cover/';

        $id = base64_decode($id);
        $application = Application::findOrFail($id);
        Helpers::deleteFile($application->employee_cv, $cvPath);
        if($application->cover_letter){
            Helpers::deleteFile($application->cover_letter, $coverPath);
        }

        $status  = $application->delete();
        if(!$status) return redirect()->back()->withErrors(['system failure, try again later'])->withInput();

        return redirect()->back()->with('deleteStatus', 'application deleted');

    }

    public function deleteJob($id){
        $company_path = '/storage/uploads/';

        $job_id = base64_decode($id);
        $job = Job::findOrFail($job_id);
        if($job->cpmpany_logo){
            Helpers::deleteFile($job->cpmpany_logo, $company_path);
        }
    
        $job->update(['status'=> false]);
        return redirect(route('user:jobs'));
    }

}
