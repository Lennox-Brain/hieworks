<?php

namespace App\Http\Controllers\Backend;

use App\Jobcategory;
use App\Http\Controllers\Controller;


class DeleteController extends Controller
{
    
    public function deleteJobcategory($id){
            $id = base64_decode($id);
            Jobcategory::findOrFail($id)->delete();
            return redirect()->back();
    }
   

}
