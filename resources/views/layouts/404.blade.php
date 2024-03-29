@extends('layouts.wireframe')
@prepend('app_css')

@endprepend

@section('content-wrapper')
   <div>
        <div class="page container mx-auto sm:px-0 bg-white px-2 lg:px-4 py-4 min-h-screen">
            <div class="p-2 sm:p-10 sm:w-full mx-auto">
                <div class="p-4 mx-auto justify-center block md:flex items-center mt-32 h-64">
              
                        <span class=" text-base md:text-xl font-bold text-gray-500">404 NOTHING FOUND</span>
                        {{-- <div>
                            <img src="{{asset('/assets/images/empty.png')}}">
                        </div> --}}
                        
                        <div class="m-4">
                            <a href="{{ route('jobs') }}" class="p-2 bg-purple-600 text-white rounded-full">Browse Latest Jobs</a>
                        </div>
                       
                </div>
            </div>               
        </div>
   </div>
@endsection

@prepend('app_js')
  
@endprepend
