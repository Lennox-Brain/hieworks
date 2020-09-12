@extends('layouts.wireframe')
    @section('page-title', 'sitemap - hieworks.com')

@section('content-wrapper')
   <div>
        <div class="page container mx-auto bg-white px-2 sm:px-4 py-4 min-h-screen text-sm">
           <div class="w-full md:w-4/5 mx-auto p-3 leading-7 text-gray-600">
            <h3 class="text-blue-700 text-lg font-bold">
                Sitemap - hieworks.com
            </h3>
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

