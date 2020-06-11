@extends('layouts.wireframe')

@section('page-title', 'Current works and job vacancies in Ghana '. date('M Y'). ' - hieworks.com')

@section('content-wrapper')
   <div>
     

        <div class="container mx-auto px-2 sm:px-0">
              @include('partials.search')

            <div class="sm:w-4/5 mx-auto p-1 sm:p-2 mt-8 bg-white">
              
                <form method="GET" action="{{route('filter')}}" class="bloc sm:flex justify-evenly items-center">
                    <div class="flex flex-grow-1 my-2">
                    
                       <select class="appearance-none bg-transparent w-full text-gray-600 border-b-2 border-purple-600 py-1 px-6  select" name="job_category">
                            <option value="">Select Job Category</option>
                            @foreach ($job_categories as $category)
                                      <option value="{{$category}}">{{$category}}</option>
                            @endforeach
                       </select>
                    </div>
                    <div class="flex flex-grow-1 my-2">
                        <select class="appearance-none bg-transparent w-full border-b-2 text-gray-500  border-purple-600 py-1 px-6 select" name="job_location">
                            <option value="">Select Job Location</option>
                             @foreach ($job_locations as $location)
                                       <option value="{{$location}}">{{$location}}</option>
                             @endforeach
                        </select>
                    </div>

                    <div class="my-2 text-right">
                        <button class="p-2 bg-purple-800 rounded-lg text-white">
                            <svg fill="none" stroke-linecap="round" class="w-5 h-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

          {{-- content  --}}
            <div class="my-8">
                <div class="job_ bg-white  sm:w-4/5 mx-auto p-1 sm:p-2">
                 
                          <div class="text-blue-700 font-bold text-xl flex items-center"> 
                          <div>

                            <h4>
                              @if(isset($title))
                                  <div class="text-blue-700 font-bold text-base flex items-center">All {{$title}} Jobs</div>
                              @else
                                  <div class="text-blue-700 font-bold text-xl flex items-center">Browsing Latest Jobs</div>
                              @endif
                            </h4>
                          </div>
                         {{-- <x-alert :message="accra"/> --}}
                   
                     {{-- job_wrapper --}}
                      <div class="my-3 sm:m-4">
                            @forelse($jobs as $job)
                                <a href="{{route('jobinfo', ['title'=>Str::slug($job->job_title,'-'),'id'=> base64_encode($job->id)])}}" class="outline-none">
                                    <div class="job-card sm:p-2">
                                      <div class="mr-2">
                                        @if($job->company_logo)
                                            <img src="{{asset('storage/uploads/'.$job->company_logo)}}" loading="lazy" alt="{{ $job->company_name }} company logo" width="80">
                                         @else 
                                            <img src="{{asset('/assets/images/logo-thumbnail.png')}}" loading="lazy" alt="hieworks logo" width="80">
                                        @endif
                                    </div>

                                      <div class="w-full">
                                        <div class="text-right text-sm text-gray-500">
                                             <span>{{$job->created_at->diffForHumans()}}</span>
                                        </div>
                                         
                                          <div class="text-blue-700 font-bold job-title text-sm">
                                              {{$job->job_title}}
                                          </div>

                                          <div class="block flex mt-2">
                                            {{-- job type  --}}
                                             <div class="bg-purple-800 rounded-full px-2 py-1 text-white flex items-center mx-2">
                                                <span>
                                                    <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                      <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                </span>
                                                <span class=" text-sm ">{{$job->job_type}}</span>
                                             </div>

                                              {{-- job location  --}}
                                             <div class="flex items-center text-gray-600 mx-2">
                                              <span>
                                                <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                  <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                  <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                              </span>
                                              <span class="text-sm">{{$job->job_location}}</span>
                                           </div>
                                        


                                           {{-- details ends  --}}
                                          </div>

                                      </div>
                                    </div>
                                </a>

                              @empty
                                <div class="text-center p-6 text-gray-500">
                                    <div class="w-1/2 mx-auto flex items-center justify-center">
                                      <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="empty jobs">
                                    </div>
                                    <div>
                                        <h4>No Post Found</h4>
                                    </div>
                                </div>

                            @endforelse
                      </div>
                      {{-- job wrapper ends  --}}

                      <div class="my-4">
                           {{$jobs->links()}}
                      </div>
                     



                </div>
                    
            </div>
            {{-- jobs list container ends  --}}

           


        </div>
   </div>
@endsection