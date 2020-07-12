<?php

namespace App\Http\Controllers\Backend;

use App\Job;
use App\Hieworks\Helpers;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    

    public function suspendJob($id)
    {
        $company_path = '/storage/uploads/';
        $id= base64_decode($id);
        $job = Job::findOrFail($id);
         if($job->company_logo){
            Helpers::deleteFile($job->company_logo, $company_path);
        }
        $job->delete();
        return redirect()->back();
    }



}
