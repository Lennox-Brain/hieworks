<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
        <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="width=device-width" name="viewport"/>
        <!--[if !mso]><!-->
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <!--<![endif]-->
        <title>Weekly Newsletters - hieworks.com</title>
        <!--[if !mso]><!-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            .container{
                width: 50%;
                margin: 0 auto;
                background: white;
                box-shadow: 0px 0px 1.8px #888;
                padding:10px;
                border-top: 5px solid #553c9a;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color:#444;
                line-height: 1.8
            }
            .job_card{
                    border:1px solid #e5e5e5;
                    margin: 0 auto;
                    padding: 20px;
                    /* background: */
                  
            }
            .job_card a{
                text-decoration: none
            }
            .job_title{
                font-weight: bold;
            }
        </style>

       <style id="media-query" type="text/css">
                 @media (max-width: 595px) {
                     .container{
                         width: 100%;                       
                     }
                     
                 }
       </style>
</head>
<body>
    <div class="container">
       <div style=" font-weight:bold">Hi there,</div>
             <h3 style="color:#553c9a">Top Jobs Selected For You This Week</h3>
             <div>
                 {{-- {{dd($jobs)}} --}}
                    <div>
                      @foreach ($jobs as $job)
                          <div class="job_card">
                                    <a href="{{URL::route('jobinfo',['title'=>   Str::slug($job['job_title'],'-'), 'id'=>base64_encode($job['id'])  ])}}/?utm_source=email&utm_medium=email-newsletters&utm_campaign=newsletters&utm_content={{$job['id']}}" style="text-overflow: ellipsis; word-break: break-all">
                                            <div class="job_title">{{$job['job_title']}}</div>
                                            <div style="font-weight:bold">
                                                <span style="background:#553c9a;padding:4px;border-radius:5px;color:white ">{{$job['job_type']}}</span>
                                                <span style="color: #7a7676"> | {{$job['job_location']}}</span>
                                                <span style="color: #7a7676"> | {{$job['job_category']}}</span>
                                            </div>
                                            <div style="text-align: right">
                                                <span style="background: #553c9a; padding:5px;color:white;">view details</span>
                                            </div>
                                    </a>
                            </div>
                        @endforeach                        
                    </div>
                    <div style="text-align:center;margin-top:10px">
                        <a href="{{route('jobs')}}?utm_source=email&utm_campaign=browse_all_jobs&utm_medium=email-newletters" style="text-decoration: none;">Browse All Jobs</a>
                    </div>
             </div>
            <div style="color:#8d8c8c;margin-top:16px">Thanks, The Hieworks Team</div>
            <div>
                <img src="{{asset('assets/images/hieworks-logo.png')}}" alt="hieworks logo" width="120">
            </div>
            <div style="text-align: center">
                <a href="https://hieworks.com?utm_source=email&utm_medium=email-newsletter&utm_campaign=newsletter" style="text-decoration: none;color:royalblue;font-weight:bold">hieworks.com&copy;{{date('Y')}}</a>
            </div>

    </div>
</body>
</html>