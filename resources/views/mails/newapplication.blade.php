<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
        <!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="width=device-width" name="viewport"/>
        <!--[if !mso]><!-->
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <!--<![endif]-->
        <title>job application request - hieworks.com</title>
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
             <h3 style="color:#553c9a">Job application notice</h3>
             You have a new application for the job role "<strong>{{$job_title}}</strong>" published on the hieworks platform.<br>
             you may <a href="{{$link}}">click</a> on this link to view this application in your hieworks job portal.
             <div>
                 <p style="text-overflow: ellipsis; word-wrap:break-word">
                     You may also copy this link directly into your browser's url.<br>
                     <a href="{{$link}}">{{$link}}</a>
                 </p>
             </div>
       
            <span style="font-weight: bold; color:#553c9a">Thanks, hieworks Team</span>
            <div>
                <img src="{{asset('assets/images/hieworks-logo.png')}}" alt="hieworks logo" width="120">
            </div>
            <div style="text-align: center">
                <a href="https://hieworks.com?utm_source=email" style="text-decoration: none;color:royalblue;font-weight:bold">hieworks.com&copy;{{date('Y')}}</a>
            </div>

    </div>
</body>
</html>