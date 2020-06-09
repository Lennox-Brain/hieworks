<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Carbon\Carbon;
use App\Newsletter;
use App\Application;
use App\Hieworks\Data;
use App\Hieworks\Helpers;
use Illuminate\Support\Str;
use App\Hieworks\Validators;
use Illuminate\Http\Request;
use App\Mail\ApplicationMail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function postJob(Request $request)
    {
       $payload =  $request->except(['_token', '_method']);
       $validate =  Validators::validatePost($payload);
       if($validate->fails()) return redirect()->back()->withErrors($validate->errors()->all())->withInput();
       $data =  $validate->valid();
       $fileName = null;
       $onsite = false;
       if($request->has('company_logo')){
          $fileName =  Helpers::uploadFile($data['company_logo'], Data::UPLOADS_PATH);
       }
       if($request->has('onsite')){
            $onsite =  $data['onsite'] = true;
       }
    
       $status = Job::create([
           'user_id' => Auth::user()->id,
           'job_id' => Helpers::jobId(),
           'job_title'=>$data['job_title'],
           'job_category'=>$data['job_category'],
           'job_type'=>$data['job_type'],
           'job_qualification'=>$data['job_qualification'],
           'job_experience'=>$data['job_experience'],
           'expected_salary' => $data['expected_salary'],
           'job_location' => $data['job_location'],
           'job_email'=>$data['job_email'],
           'job_phone'=>$data['job_phone'],
           'job_company'=>$data['job_company'],
           'application_url'=>$data['application_url'],
           'job_deadline' =>$data['job_deadline'],
           'job_description' => $data['job_description'],
           'company_logo' => $fileName,
           'onsite' =>$onsite,
           'ip'=>$request->ip()
       ]);

       if(!$status) return redirect()->back()->withErrors(['system failure, try again later'])->withInput();
        
        return redirect()->back()->with('postStatus', 'job successfully uploaded');

    }


    public function confirmApplication(Request $request){
       
        $job_id = base64_decode($request->job_token);
       
        $data = Validators::validateApplication($request->except('_token'))->validate();
        $employee_cv = Helpers::uploadFile($data['employee_cv'], DATA::CV_PATH);
        $cover_letter = null;
        if($request->has('cover_letter')){
            $cover_letter = Helpers::uploadFile($data['cover_letter'], DATA::COVER_PATH);;
        }

        $exist =  Application::where('application_id', $job_id)
                    ->where('email', $data['email'])
                    ->count();
        if($exist > 0) return redirect()->back()->withErrors(['sorry, you have already applied for this position'])->withInput();


      $status = Application::create([
           'application_id' => $job_id,
           'firstname' => strip_tags($data['firstname']),
           'lastname' => strip_tags($data['lastname']),
           'email' => strip_tags($data['email']),
           'contact' => strip_tags($data['contact']),
           'employee_cv'=> $employee_cv,
           'cover_letter' =>  $cover_letter

       ]);

        // send Mail to the employer/recruiter
        $job = Job::find($job_id);
          $getEmployer = User::find($job->user_id);
        
            if($getEmployer->application_notice){
                    $link =  URL::signedRoute('user:applications',['job_title'=> Str::slug($job->job_title, '-'), 'id'=>\base64_encode($job->id)])."/?utm_source=email&utm_medium=email&utm_content=new job application";
                    Mail::to($getEmployer->email)->send(new ApplicationMail($link, $job->job_title ));
            }

       if(!$status) return redirect()->back()->withErrors(['system failure, try again later'])->withInput();
       return redirect(route('application:callback'));

    }




    public function newsletter(Request $request){
      $validate =   Validator::make($request->only('email'), [
            'email' => 'required|email:rfc,dns|max:255|unique:newsletters,email'
        ])->validate();

        $status = Newsletter::create([
            'email'=> $validate['email']
        ]);

        if($status) return redirect()->back()->with(['info' =>'Subscription successful']);
    }
}
