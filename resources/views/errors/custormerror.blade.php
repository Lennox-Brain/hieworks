@extends('layouts.wireframe')
  @section('page-title')
        @yield('title')- hieworks.com
  @endsection
  

@section('content-wrapper')
   <div>
        <div class="page container mx-auto px-2 sm:px-0 bg-white px-2 sm:px-4 py-4 min-h-screen">
            <div class="p-2 sm:p-10 sm:w-full mx-auto">
                <div class="p-4 mx-auto justify-center block md:flex items-center mt-32 h-64">
              
                        <span class="text-base md:text-xl font-bold text-blue-700">@yield('code') - @yield('message')</span>
                        {{-- <div>
                            <img src="{{asset('/assets/images/empty.png')}}">
                        </div> --}}
                        
                        <div class="m-4">
                            <a href="{{route('home')}}" class="p-2 bg-purple-600 text-white rounded-full">Browse Recent Job Posts</a>
                        </div>
                    
                </div>
            </div>               
        </div>
   </div>
@endsection


