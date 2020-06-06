<?php

namespace App\Http\Controllers\Dashboard;

use App\Hieworks\Data;
use App\Job;
use App\User;
use App\Hieworks\Helpers;
use App\Hieworks\Validators;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\Help;

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
                $path = Data::UPLOADS_PATH;
                $file_value = Helpers::getModel('App\Job', $job_id)->first('company_logo')->company_logo;
                  if($file_value){
                    
                      Helpers::deleteFile($file_value);
                  }
               $fileName =  Helpers::uploadFile($data['company_logo'], $path);
               $data['company_logo'] = $fileName;
            }
           
         
        
        $changes = array_filter($data, function($val){
            return $val != null;
        }); 
        

         $status = Job::findorFail($job_id)->update($changes);
             if(!$status) return redirect()->back()->withErrors(['system failure, try again later'])->withInput();

     return redirect()->back()->with('postStatus', 'changes saved successfully');


    }

}
