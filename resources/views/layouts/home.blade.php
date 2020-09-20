@extends('layouts.wireframe')

@section('content-wrapper')

     <section x-data="globalState()">

        <div class="fixed top-0 h-full bg-gray-900 bg-opacity-75 w-full" x-show.immediate="isSeen">
          <div class="flex items-center justify-center h-full px-4">
                   <livewire:newsletter/>
            </div>          
        </div>


       <div class="bg-blue-100">
       
            <div class="flex flex-wrap items-center border-b pb-2 pt-4 container mx-auto">
                <div class="lg:w-1/2 flex flex-col items-center px-3 welcome-message">
                  <h1 class="capitalize text-center text-xl sm:text-4xl font-light text-blue-700 leading-tight mb-4">Bring your job search to an end <strong class="font-black text-3xl sm:text-4xl block">Get Hired, Get Happy!</strong></h1>
                  <p class="lg:text-right sm:text-lg text-gray-600  leading-relaxed capitalize">
                    We are your online portal for latest job vacancies in Ghana and Remote Opportunities. We help end your job search Journey !
                    
                  </p>
                    <a href="{{route('jobs')}}" class="bg-purple-700 hover:bg-purple-800 mt-8 py-3 px-4 rounded-full font-bold uppercase text-white tracking-widest text-sm">Browse Jobs</a>
                
                </div>
       
                <div class="flex flex-grow-1 flex-start">
                    <img src="{{asset('assets/icons/recruite.svg')}}" style="width:30rem" alt="hieworks jobs in Ghana image">
                  </div>
              </div>
        </div>
       
          
          <div class="container mx-auto">
              @include('partials.search')
              <div class="flex justify-center">
                <button class="rounded px-6 py-2 text-white font-bold text-sm flex items-center justify-center bg-blue-500" @click="isSeen = true">
                  
                    <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-200" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    Subscribe For Job Alerts
                  
                </button>
              </div>
           
            {{-- content  --}}
              <div class="my-12">
                <div class="w-full md:w-2/5 mx-auto flex justify-center my-4" id="adb_v0"></div>
                 
                
              <div class="flex flex-wrap">  
                <div class="job_ bg-white w-full md:w-4/5">
                    @forelse ($home_categories as $category)
                        
                    <div class="my-8">
                    {{-- category title  --}}
                        @if(count(App\hieworks\Data::data_adapter($category)) > 0)
                            <div class="text-blue-700 font-bold text-xl flex items-center p-4">
                              <h3 class="align-middle">{{$category}}</h3>                             
                            </div>
                        @endif
                    
                       {{-- job_wrapper --}}
                        <div class="mt-3">
                            @forelse(App\hieworks\Data::data_adapter($category) as $job)
                                  <a href="{{route('jobinfo', ['title'=>Str::slug($job->job_title,'-'), 'id'=> base64_encode($job->id)])}}" class="block outline-none first:border-t">
                                      <div class="job-card sm:border-l sm:border-r">
                                        <div class="mr-2">
                                          @if($job->company_logo)
                                                <img src="{{asset('storage/uploads/'.$job->company_logo)}}" loading="lazy" alt="{{ $job->company_name }} logo" class="w-16 object-contain">
                                          @else 
                                                <img src="{{asset('/assets/images/logo-thumbnail.png')}}" loading="lazy" alt="hieworks.com logo" class="w-16 object-contain">
                                          @endif
                                        </div>
                                      
                                        <div class="w-full">
                                          <div class="text-right text-sm text-gray-500">
                                             @if (latest_badge($job->created_at))
                                                <small class="px-3 py-1 bg-pink-200 rounded-full text-pink-700 font-semibold">New</small>
                                             @endif
                                               <span class="pr-3">{{$job->created_at->diffForHumans()}}</span>
                                          </div>
                                           
                                            <div class="text-blue-700 font-bold job-title text-sm">
                                                {{$job->job_title}}
                                            </div>
       
                                            <div class="flex mt-2">
                                              {{-- job type  --}}
                                               <div class="bg-purple-800 rounded-full px-2 py-1 text-white flex items-center mx-2">
                                                  <span>
                                                      <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                      </svg>
                                                  </span>
                                                  <span class="text-sm capitalize">{{$job->job_type}}</span>
                                               </div>
       
                                                {{-- job location  --}}
                                               <div class="flex items-center text-gray-600 mx-2">
                                                <span>
                                                  <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                    <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                  </svg>
                                                </span>
                                                <span class="text-sm ">{{$job->job_location}}</span>
                                             </div>
                                          
                                             {{-- details ends  --}}
                                            </div>
       
                                        </div>
                                      </div>
                                      
                                  </a>
                                    @if($loop->iteration == 3)
                                        @break
                                    @endif
                                 
                                
                              @empty
                                  {{-- <h3>no post found</h3> --}}
                              @endforelse
                        </div>
                        @if (count(App\hieworks\Data::data_adapter($category) ) > 0 )
                            <div class="text-center text-purple-700 text-sm sm:font-bold my-4 py-6">
                              <h2><a href="{{route('category', ['category' =>Str::slug($category, '-')])}}">Browse all ({{count(App\hieworks\Data::data_adapter($category) ) }}) {{$category}} jobs </a></h2>
                            </div>
                        @endif
       
                      </div> 
                      {{-- category block ends  --}}
                        
       
                       @empty
                         <div class="text-center p-6 text-gray-500">
                               <div class="w-1/2 mx-auto flex items-center justify-center">
                                <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="hieworks empty jobs post">
                              </div>
                              <div>
                                <h4>No Post Found</h4>
                              </div>
                        </div>
                    @endforelse
       
                          
       
                  </div>

                  <aside class="w-full md:w-1/5 px-1">
                     <div class="bg-white mb-4">
                        <div class="job-by-region border-t-4 border-purple-600 py-2" x-data="{open:true}">
                          <div class="text-center text-purple-800 font-semibold flex justify-evenly items-center py-2" @click="open = !open">
                            <span class="cursor-pointer">Find Jobs by Region</span>
                            
                            <span x-show="!open" class="cursor-pointer">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                            </span>
                            <span x-show="open" class="cursor-pointer">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </span>

                          </div>
                          <div x-show="open"
                               x-transition:enter="transition ease-out duration-200"
                               x-transition:enter-start="opacity-0">
                             <ul class="pl-4 text-blue-500 text-sm leading-7">
                              
                              @foreach (filled_locations() as $location)
                                  <li class="flex items-center">
                                    <svg class="w-5 h-5 text-blue-100 bg-blue-300 p-1 mr-1 font-bold rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <a href="{{ route('location', ['location' => Str::slug("$location->job_location, '-'")]) }}">{{ $location->job_location }} <span class="text-gray-400">{{ count_jobs_by_option('job_location', $location->job_location) }}</span></a></li>
                              @endforeach
                             </ul>
                          </div>
                        </div>
                     </div>

                     <div class="bg-white mb-4">
                      <div class="job-by-region border-t-4 border-purple-600 py-2" x-data="{open:false}">
                        <div class="text-center text-purple-800 font-semibold flex justify-evenly items-center py-2" @click="open = !open">
                          <span class="cursor-pointer">Browse Jobs by Type</span>
                          
                          <span x-show="!open" class="cursor-pointer">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                          </span>
                          <span x-show="open" class="cursor-pointer">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                          </span>

                        </div>
                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0">
                           <ul class="pl-4 text-blue-500 text-sm leading-7">
                                <li class="flex items-center">
                                  <svg class="w-5 h-5 text-blue-100 bg-blue-300 p-1 mr-1 font-bold rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                  <a href="{{ route('job-type', ['type'=>'full-time']) }}">Full Time <span class="text-gray-400">{{ count_jobs_by_option('job_type', 'full time') }}</span></a>
                                </li>
                                <li class="flex items-center">
                                  <svg class="w-5 h-5 text-blue-100 bg-blue-300 p-1 mr-1 font-bold rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                  <a href="{{ route('job-type', ['type'=>'part-time']) }}">Part Time <span class="text-gray-400">{{ count_jobs_by_option('job_type', 'part time') }}</span></a>
                                </li>
                                <li class="flex items-center">
                                  <svg class="w-5 h-5 text-blue-100 bg-blue-300 p-1 mr-1 font-bold rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                  <a href="{{ route('job-type', ['type'=>'contract']) }}">Contract <span class="text-gray-400">{{ count_jobs_by_option('job_type', 'contract') }}</span></a>
                                </li>
                                <li class="flex items-center">
                                  <svg class="w-5 h-5 text-blue-100 bg-blue-300 p-1 mr-1 font-bold rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                  <a href="{{ route('job-type', ['type'=>'internship']) }}">Internship <span class="text-gray-400">{{ count_jobs_by_option('job_type', 'contract') }}</span></a>
                                </li>
                           </ul>
                        </div>
                      </div>
                   </div>
                  </aside>
                </div>
                      
              </div>
              <div class="w-full md:w-2/5 mx-auto flex justify-center" id="adb_v1"></div>

              {{-- jobs list container ends  --}}
       
              {{-- newsletters --}}
              <div class="sm:w-4/5 mx-auto">
                  <!-- component -->
                    <div class="flex flex-col w-full md:h-48 bg-white rounded-lg shadow-md overflow-hidden md:flex-row my-10" id="sub">
                      <div class="md:flex items-center justify-center md:w-1/2 md:bg-purple-900">
                          <div class="py-6 px-8 md:py-0">
                              <h4 class="text-purple-800 flex items-center  text-lg sm:text-2xl font-bold md:text-gray-100">
                                Subscribe Now 
                                <svg fill="none" stroke-linecap="round" class="w-8 h-8" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                  <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>       
                              </h4>
                              <p class="mt-2 text-gray-600 md:text-gray-400 capitalize font-semibold">Don't miss out on any job post again</p>
                          </div>
                      </div>
                      <div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2 md:border-b-8 border-purple-900">
                         
                          <form class="w-4/5" method="POST" action="{{route('newsletter')}}">
                            <div class="text-red-400 pb-3">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div>{{$error}}</div>
                                    @endforeach
                                @endif
                            </div>
       
                            <div class="text-green-500 pb-3">
                                @if (session('info'))
                                  <div>{{session('info')}}</div>
                                @endif
                            </div>
                                
                          
                              <div class="flex flex-col rounded-lg overflow-hidden sm:flex-row">
                                  <input class="py-3 px-4 bg-gray-100 text-gray-800 border-gray-300 border outline-none placeholder-gray-500 focus:bg-gray-100" type="text" name="email" value="{{old('email')}}" placeholder="Enter your email">
                                  <button class="py-3 px-4 bg-purple-800 text-gray-100 font-semibold uppercase hover:bg-gray-600">subscribe</button>
                              </div>
                              @csrf
                          </form>
                      </div>
                    </div>
       
              </div>
              {{-- news letters ends  --}}
       
       
          </div>
   
     </section>
@endsection