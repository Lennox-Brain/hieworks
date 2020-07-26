<?php

namespace App\Http\Controllers\Backend;

use App\Job;
use App\Jobcategory;
use App\Hieworks\Helpers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    
    public function updateJobcategory(Request $request, $id){
        $category_id = base64_decode($id);
        $data = Validator::make($request->except('_token'),
        [
                'edit_jobcategory' => ['required','min:5','max:255']
        ]
    )->validate();

    $update_jobcategory = Jobcategory::findOrFail($category_id)->update([
            'title' =>$data['edit_jobcategory'],
            'slug' => Str::slug($data['edit_jobcategory'], '-')
        ]);

        
        //  note: newjob_category_error session wasnt created so
        //  it uses the same session error with creating the category 
        if(!$update_jobcategory) return redirect()->back()->withErrors(['newjob_category_error' => 'sorry, system down try again later'])->withInput();
        return redirect()->back();
    }
   

}
