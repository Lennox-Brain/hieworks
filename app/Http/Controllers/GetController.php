<?php

namespace App\Http\Controllers;


use App\Job;
use App\Search;
use App\Jobslug;
use App\Jobcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\ModelFilters\Job as Fil;


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
        $query = Job::where('status', true)
                    ->orderBy('created_at', 'DESC');

                    
        if($request->filled('job_category')){
            $category_title = Jobcategory::where('slug', $request->job_category)->first();
             if($category_title != null){
                $query->where('job_category', $category_title->title);
                $request->merge(['job_category' => $category_title->title ]); 
             }           
        }

        if($request->filled('job_location')){
            $query->where('job_location', $request->job_location);
        }
        
       
       $filters = $query->simplePaginate()->appends([
                'job_category' =>Str::slug($request->job_category, '-'),
                'job_location' => $request->job_location
         ]);
      
       /*if($category_title){
           $category_title  = $category_title->title;
       }else{
           $category_title = '';
       }
        $query =  Job::where('job_category', $category_title);
        
            if($request->job_location != 'All of Ghana'){
                $query->orWhere('job_location', $request->job_location);
            }
       $filters =  $query->where('status', true)
                         ->orderBy('created_at', 'DESC')
                         ->simplePaginate();
                         
        if(!$filters) $filters = Job::orderBy('created_at', 'desc')
                                      ->where('status', true)
                                      ->simplePaginate();

        $filters->appends([
            'job_category'=>Str::slug($category_title, '-'),
            'job_location' =>$request->job_location
        ]);

        */
        return view('layouts.alljobs', ['jobs'=>$filters]);
   }
   

   public function jobCategories(Request $request)
   {

      $category = $request->category;
      $category =  Jobcategory::where('slug', $category)->first()->title;
    //   $category;
    
       $categories =  Job::where('job_category',$category)
                           ->where('status', true)
                           ->orderBy('created_at', 'desc')
                           ->simplePaginate();
      return view('layouts.alljobs', ['jobs' => $categories, 'title'=>$category]);
    
    }

    public function jobLocation($location)
    {
        $job_ids = Jobslug::where('location_slug', $location)->pluck('id');
        $jobs_by_locations =  Job::whereIn('id', $job_ids)->simplePaginate();
        return view('layouts.alljobs', ['jobs' => $jobs_by_locations, 'title'=>Str::slug($location,' ')]);
    }

    public function jobType($type)
    {
       
       $job_ids = Jobslug::where('type_slug', $type)->pluck('id');
       $jobs_by_type =  Job::whereIn('id', $job_ids)->simplePaginate();
       return view('layouts.alljobs', ['jobs' => $jobs_by_type, 'title'=>Str::slug($type,' ')]);

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
