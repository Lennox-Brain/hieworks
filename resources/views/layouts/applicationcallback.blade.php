@extends('layouts.wireframe')

@section('page-title', 'apply for job online '. date('M Y'). ' - hieworks.com')

@section('content-wrapper')
   <div>
        <div class="container mx-auto px-2 sm:px-0">

            
          {{-- content  --}}
            <div class="my-8">
                <div class="bg-white border mx-auto text-center h-auto mt-32 sm:w-3/5 mx-auto p-1 sm:p-2">
                   <h3 class="flex items-center font-bold text-gray-600">
                    <svg fill="none" stroke-linecap="round" class="h-16 w-16 text-green-500" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                     Thank you. Application successfully submitted
                  </h3>
                  <p class="text-gray-600 font-semibold leading-7 text-sm">
                      Remember you don't have to pay money to any <br>individual or group
                      of persons on the basis of offering you employment.<br>
                      call [+233241775839]<br> in case of any fraudulent activitis.
                      Thank you.<br> 
                       <div class="my-2">
                           <a href="{{route('jobs')}}" class="outline-none bg-blue-800 text-white p-2 rounded-lg text-sm font-bold">browse more jobs</a>
                       </div>
                      <em class=" font-bold text-purple-800">Team hiework Gh.</em> 
                  </p>
                   
                </div>
                    
            </div>
      
        </div>
   </div>
@endsection