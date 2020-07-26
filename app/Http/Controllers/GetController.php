<?php

namespace App\Http\Controllers;


use App\Job;
use App\Jobcategory;
use App\Jobslug;
use App\Search;
use Illuminate\Http\Request;


class GetController extends Controller
{
    
    public function jobs()
    {
         $jobs = Job::where(['status'=>true])
                ->orderBy('created_at', 'DESC')
                ->simplePaginate(20);
        return view('layouts.alljobs', ['jobs'=>$jobs]);
    }

    // job details info 
    public function jobInfo(Request $request)
    {
        $id = base64_decode($request->id);
        $job_id = 'job_'.$id;
        
        if(session()->has($job_id) == false){
                Job::findOrFail($id)->increment('views', 1);
                session()->put($job_id, $job_id);
          }  

        $jobInfo = Job::where(['id'=>$id])
                      ->first();
        if(!$jobInfo) abort(410);
         
        
         $relatedjobs = Job::orderBy('created_at', 'desc')
                      ->where('status', true)
                      ->where(['job_category'=>$jobInfo->job_category])
                      ->where('id','!=', $jobInfo->id)
                      ->limit(6)
                      ->get();

        if(!$jobInfo) return redirect('/404');
        return view('layouts.jobinfo', ['job'=>$jobInfo, 'relatedJobs'=>$relatedjobs ]);

    }

    public function searchJob(Request $request)
    {
         $keyword = strip_tags($request->q);
        
        Search::create([
            'keyword'=>$keyword
        ]);
        $searchJobs = Job::where('job_title', 'like', "%$keyword%")
        ->orWhere('job_category', 'like', "%$keyword%")
        ->orWhere('job_location', 'like', "%$keyword%")
        ->orWhere('job_type', 'like', "%$keyword%")
        ->orderBy('created_at', 'desc')
        ->simplePaginate();
        $searchJobs->appends([
            'keyword'=>$keyword
        ]);

       return view('layouts.alljobs', ['jobs'=>$searchJobs]);
    }

    public function filterJob(Request $request)
    {
       
       $category_title = Jobcategory::where('slug', $request->job_category)->first()->title;
        $query =  Job::where('job_category', $category_title);
        
            if($request->job_location != 'All of Ghana'){
                $query->orWhere('job_location',$request->job_location);
            }
       $filters =  $query->simplePaginate();

        return view('layouts.alljobs', ['jobs'=>$filters]);
   }
   

   public function jobCategories(Request $request)
   {

      $category = $request->category;
      $category =  Jobcategory::where('slug', $category)->first()->title;
      $category;
    
       $categories =  Job::where('job_category',$category)
                           ->orderBy('created_at', 'desc')
                           ->simplePaginate();
      return view('layouts.alljobs', ['jobs' => $categories, 'title'=>$category]);
     }

   
   public function applyJob($id)
     {
            $id = base64_decode($id);
            $job = job::findOrFail($id)->id;
            return view('layouts.apply', ['job_id'=>$job]);
     }



 public function reportJob($id)
     {
            $id = base64_decode($id);
            $job = job::findOrFail($id)->id;
            return view('layouts.report', ['job_id'=>$job]);
     }

 


}
