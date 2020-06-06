<?php 
namespace App\Hieworks;

use App\Job;
use Illuminate\Support\Facades\DB;
 
class Data{

    public const OK =  200;
    public const REDIRECT = 302;
    public const BAD_REQUEST = 400;
    public const UNAUTHENTICATED =  401;
    public const FORBIDDEN =  403;
    public const NOT_FOUND =  404;
    public const METHOD_NOT_ALLOWED =  405;
    public const NOT_ACCEPTABLE =  406;
    public const UNPROCESSED_ENTITY =  422;

    const CATEGORIES = [
        'Accounting, Banking, Finance',
        'Administration & Office Service',
        'Agriculture, Farming ',
        'Artisan',
        'Beauty & Therapy',
        'Building & Construction',
        'Branding & Advertisment',
        'Business Development',
        'Catering, Food Services',
        'Communication, Media',
        'Consultation & Legal Services',
        'Courrier & Delivery',
        'Creative, Fashion & Design',
        'Custormer Service',
        'Engineering & Mechanics', 
        'Education, Research, Training',
        'FMCG, Retail, Wholesale',
        'Healthcare & Pharmacy',
        'IT,Telecom & Computing',
        'Manufacturing, Packaging',
        'Management & Operation',
        'Monitoring, Evaluation',
        'NGO, Charity',
        'Others',
        'Oil, Gas & Energy',
        'Ports, Shipping & Marintime',
        'Public Sector & Government',
        'Real Estate, Housing',
        'Sales & Marketing',
        'Sanitation & Wast Management',
        'Security',
        'Transport, Travel',
        'Trade, Shiping, Courier',
        'Tourism, Hospitality'
    ];

    public static function jobCategories(){
        // return [];
        return DB::table('jobs')
        ->select(DB::raw('count(job_title) as jobs, job_category'))
        ->groupBy('job_category')
        ->orderBy('jobs', 'desc')
        ->pluck('job_category');
    }


    const LOCATIONS = [
                        "All of Ghana",
                        "Ashanti",
                        "Brong Ahafo",
                        "Central",
                        "Eastern",
                        "Greather Accra",
                        "Nothern",
                        "Upper East",
                        "Upper West",
                        "Volta",
                        "Western",
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
                    ->orderBy('created_at', 'desc')
                ->paginate(4);
    }
    


}


