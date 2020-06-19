@extends('layouts.wireframe')
    @section('page-title', 'sitemap - hieworks.com')

@section('content-wrapper')
   <div>
        <div class="page container mx-auto px-2 sm:px-0 bg-white px-2 sm:px-4 py-4 min-h-screen">
           <div class="w-full md:w-4/5 border mx-auto p-3 leading-7 text-gray-600">
            <h3 class="text-blue-700 text-lg font-bold">
                Sitemap - hieworks.com
            </h3>
               <p>
                    Our hieworks site map helps users to easily navigate through pages with complete ease.
               </p>
               <div>
                
                   <ul class="underline text-blue-700 font-semibold">
                       <li>&circleddash; <a  class="outline-none" href="{{route('home')}}">Homepage</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('login')}}">Login to your account</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('register')}}">Register for an account</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('jobs')}}">Browse latest jobs</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('post:postjob')}}">Upload job post</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('register')}}">Reset pasword</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('about')}}">About hieworks</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('policy')}}">hieworks policies</a></li>
                       <li>&circleddash; <a  class="outline-none" href="{{route('terms')}}">hieworks terms and conditions</a></li>
                   </ul>
               </div>


           </div>
           
        </div>
   </div>
@endsection

