<?php 
namespace App\Hieworks;

use App\Job;
use App\Jobcategory;
use Illuminate\Support\Facades\DB;
 
class Data{

    // status codes 
    public const OK =  200;
    public const REDIRECT = 302;
    public const BAD_REQUEST = 400;
    public const UNAUTHENTICATED =  401;
    public const FORBIDDEN =  403;
    public const NOT_FOUND =  404;
    public const METHOD_NOT_ALLOWED =  405;
    public const NOT_ACCEPTABLE =  406;
    public const UNPROCESSED_ENTITY =  422;

    // paths 
    public const UPLOADS_PATH = '/storage/uploads/';
    public const  CV_PATH = '/storage/docs/cv';
    public const  COVER_PATH = '/storage/docs/cover';


    // const CATEGORIES = [
    //     'Accounting, Banking, Finance',
    //     'Administration & Office Service',
    //     'Agriculture, Farming',
    //     'Animation, Audio & Multimedia',
    //     'Artisan',
    //     'Arts, Culture & Drama',
    //     'Beauty & Therapy',
    //     'Building & Construction',
    //     'Branding & Advertisment',
    //     'Business Development',
    //     'Catering, Food Services',
    //     'Communication, Media',
    //     'Consultation & Legal Services',
    //     'Courrier & Delivery',
    //     'Creative, Fashion & Design',
    //     'Customer Service',
    //     'Engineering & Mechanics', 
    //     'Education, Research, Training',
    //     'FMCG, Retail, Wholesale',
    //     'Healthcare & Pharmacy',
    //     'IT,Telecom & Computing',
    //     'Manufacturing, Packaging',
    //     'Management & Operation',
    //     'Monitoring, Evaluation',
    //     'NGO, Charity',
    //     'Others',
    //     'Oil, Gas & Energy',
    //     'Ports, Shipping & Marintime',
    //     'Public Sector & Government',
    //     'Real Estate, Housing',
    //     'Sales & Marketing',
    //     'Sanitation & Wast Management',
    //     'Security',
    //     'Sports & Fitness',
    //     'Transport, Travel',
    //     'Trade, Shiping',
    //     'Tourism, Hospitality'
    // ];

    

     public static function jobCategories_source(){
        return $categories = Jobcategory::orderBy('title', 'asc')->get(['title','slug']);
     }


    public static function jobCategories(){
        // return [];
        // return DB::table('jobs')
        // ->select(DB::raw('count(job_title) as jobs, job_category'))
        // ->groupBy('job_category')
        // ->orderBy('jobs', 'desc')
        // ->pluck('job_category');

        return Job::groupBy('job_category')
        ->orderByRaw('count(job_title) desc')
        ->where('status', true)
        ->pluck('job_category');
    }


    const LOCATIONS = [
                        "All of Ghana",
                        "Ashanti Region",
                        "Ahafo Region",
                        "Bono Region",
                        "Bono East Region",
                        "Central Region",
                        "Eastern Region",
                        "Greater Accra",
                        "Northern Region",
                        "North East",
                        "Oti Region",
                        "Savannah Region",
                        "Upper East Region",
                        "Upper West Region",
                        "Volta Region",
                        "Western Region",
                        "Western North",
                        "Outside Ghana",
                        "Remote",
    ];

    /**
     * @param category
     * gets jobs based on the passed in category
     * @return array
     */
    public static function data_adapter($category){
          return Job::where(['job_category'=>$category])
                    ->where('status', true)
                    ->orderBy('created_at', 'desc')
                ->get();
    }
    


}


