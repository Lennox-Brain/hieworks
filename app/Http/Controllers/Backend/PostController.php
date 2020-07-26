<?php

namespace App\Http\Controllers\Backend;

use App\Job;
use App\Jobcategory;
use App\Hieworks\Helpers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

  public function addJobcategory(Request $request){
      
     $data = Validator::make($request->except('_token'),
        [
                'category_title' => ['required','min:5','max:255', 'unique:jobcategories,title']
        ]
    )->validate();

    $status =  Jobcategory::create([
        'title' =>$data['category_title'],
        'slug' => Str::slug($data['category_title'], '-')
      ]);

    if(!$status) return redirect()->back()->withErrors(['newjob_category_error' => 'sorry, system down try again later'])->withInput();
    return redirect()->back();
}

}
