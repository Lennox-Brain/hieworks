<?php

namespace App\Http\Controllers\Dashboard;

use App\Job;
use App\User;
use App\Jobslug;
use App\Hieworks\Data;
use PHPUnit\TextUI\Help;
use App\Hieworks\Helpers;
use Illuminate\Support\Str;
use App\Hieworks\Validators;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    public function updateUserSettings(Request $request){
         $data = Validators::validateSettings($request->except('_token'))->validate();
         $changes = array_filter($data, function($val){
             return $val != null;
         });
         

       if($data['current_password'] != null){
           $comparePasswords = Helpers::comparePassword($changes['current_password']);
           if(!$comparePasswords) return redirect()->back()->withErrors(['wrong current password'])->withInput();
           $changes['password'] = $changes['new_password'];
            unset($changes['current_password']);
            unset($changes['new_password']);
       } 

       if($request->application_mail){
               $changes = array_merge($changes, ['application_notice' => true]);
       }else{
               $changes = array_merge($changes, ['application_notice' => false]);
       }

       $status =  User::find(Auth::id())->update($changes);  
       if($status) return redirect()->back()->with(['info' =>'changes updated successfully']);        
    }


   public function updateJobPost(Request $request){
        $payload = $request->except(['_token', '_method']);
        $job_id = base64_decode($request->_job);
         $data = Validators::validatePost($payload)->validate();
        
          if($request->has('onsite')){
                  $data['onsite'] = true;
            }else{
                  $data['onsite'] = '0';
            }
            // return $data;

            $fileName = null;
            if($request->has('company_logo')){
              
                $file_value = Helpers::getModel('App\Job', $job_id)->first('company_logo')->company_logo;
                  if($file_value){
                    
                      Helpers::deleteFile($file_value);
                  }
               $fileName =  Helpers::uploadFile($data['company_logo'], Data::UPLOADS_PATH);
               $data['company_logo'] = $fileName;
            }
           
         
        
        // $changes = array_filter($data, function($val){
        //     return $val;
        //     // return $val != null;
        // }); 
        

         $status = Job::findorFail($job_id);
         if($status) $status->update($data);
             if(!$status) return redirect()->back()->withErrors(['system failure, try again later'])->withInput();
          
             Jobslug::where('job_id',$job_id)->update([
                
                'job_id' =>$status->id,
                'title_slug' =>Str::slug($status->job_title,'-'),
                'category_slug' => Str::slug($status->job_category,'-'),
                'type_slug'=>Str::slug($status->job_type, '-'),
                'location_slug'=>Str::slug($status->job_location, '-'),
                'qualification_slug'=>Str::slug($status->job_qualification,'-'),
                'experience_slug'=>Str::slug($status->job_experience,'-'),
                'experience_slug'=>Str::slug($status->job_company,'-')
           
             ]);
   
   
             return redirect()->back()->with('postStatus', 'changes saved successfully');


    }

}
