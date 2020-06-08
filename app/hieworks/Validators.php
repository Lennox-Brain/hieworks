<?php 
namespace App\Hieworks;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
 
class Validators{

    
        public static function validatePost($data){
               
            return Validator::make($data, [
           'job_title'=> ['required', 'min:5'],
           'job_category'=>'required',
           'job_type'=>'required',
           'job_qualification'=>'required',
           'job_experience'=>'required',
           'job_location'=>'bail|required|max:255',
           'job_email'=>'sometimes|email:rfc|nullable|max:255',
           'job_phone'=>'sometimes|max:14',
           'job_company'=>'sometimes|max:100',
           'application_url'=>'sometimes|url|nullable|max:255',
           'job_deadline'=>'sometimes|date|nullable',
           'job_description'=> 'required',
           'expected_salary'=>'sometimes|max:100',
           'company_logo'=>'bail|image|mimes:jpeg,png,jpg|max:5048|dimensions:min_height=120,min_width=120'
            ]);
    }

    public static function validateApplication($data){
        return Validator::make($data, [
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'contact' => ['max:255', 'max:10'],
            'employee_cv' => 'bail|required|mimes:pdf,doc,docx|max:5048' , 
            'cover_letter' => 'bail|sometimes|nullable|mimes:pdf,doc,docx|max:5048'          
        ]);

    }

    public static function validateSettings($data){
        return Validator::make($data, [
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore(auth()->user()->id)],
            'contact' => ['max:255', 'max:10'],
            'current_password' => ['nullable', Rule::requiredIf($data['new_password'] != null)],
            'new_password' => ['nullable', 'min:8', Rule::requiredIf($data['current_password'] != null)],
            'company' => ['required', 'max:255'],
            'company_summary'=>'required|max:500',
           

        ]);
    }


}


