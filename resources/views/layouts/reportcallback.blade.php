@extends('layouts.wireframe')

@section('page-title', 'apply for job online '. date('M Y'). ' - hieworks.com')

@section('content-wrapper')
   <div>
        <div class="container mx-auto px-2 sm:px-0">

            
          {{-- content  --}}
            <div class="my-8">
                <div class="bg-white border text-center h-auto mt-32 sm:w-3/5 mx-auto py-4 px-1">
                   <h1 class="flex text-sm text-center items-center font-bold text-blue-800">
                    <svg fill="none" stroke-linecap="round" class="h-12 w-12 text-green-500" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                   Post Successfully Reported
                  </h1>
                  <p class="text-gray-600 font-semibold capitalize leading-7 text-sm">
                      Our Team Will Review Your Report and Take The needed Action. Thank You
                       <div class="my-2">
                           <a href="{{route('jobs')}}" class="outline-none bg-blue-800 capitalize text-white p-2 rounded text-sm font-bold">browse more jobs</a>
                       </div>
                      <em class="font-bold block text-purple-800 my-6">Team hieworks Gh.</em> 
                  </p>
                   
                </div>
                    
            </div>
      
        </div>
   </div>
@endsection