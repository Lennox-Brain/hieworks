@extends('layouts.wireframe')
    @section('page-title', 'Sitemap - hieworks.com')

@section('content-wrapper')
   <div>
       <div class="h-40 bg-gray-300"></div>
       
        <div class="container w-5/6 text-sm md:text-base md:w-3/5 relative p-2 md:p-8 -mt-24 mb-10 rounded-lg mx-auto bg-white min-h-screen">
            <h1 class="font-bold text-blue-600 text-2xl">Sitemap</h1>
            <div class="text-gray-600 leading-7 break-words tracking-normal">
                <p>
                    Our hieworks site map helps users to easily navigate through pages with complete ease.
                </p>
                <div>
                
                   <ul class="text-blue-700">
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('home')}}">Home Page</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('login')}}">Login to your account</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('register')}}">Register for an account</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('jobs')}}">Browse latest jobs</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('post:postjob')}}">Upload job post</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('register')}}">Reset pasword</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('about')}}">About hieworks</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('policy')}}">Hieworks policies</a></li>
                       <li>&raquo; <a  class="outline-none capitalize" href="{{route('terms')}}">Hieworks terms and conditions</a></li>
                   </ul>
                </div>
                
            </div>
           
        </div>
   </div>
@endsection
