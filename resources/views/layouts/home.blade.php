@extends('layouts.wireframe')

@section('content-wrapper')
   <div>
      <div class="bg-gray-200">
        <div class="flex flex-wrap items-center border-b pb-2 pt-4 container mx-auto">
          <div class="lg:w-1/2 flex flex-col items-center px-3 welcome-message">
            <h1 class="capitalize text-center text-xl sm:text-4xl font-light text-blue-700 leading-tight mb-4">Bring your job search to an end <strong class="font-black text-3xl sm:text-4xl block">Get Hired, Get Happy!</strong></h1>
            <p class="lg:text-right sm:text-lg text-gray-600  leading-relaxed capitalize">
               We are your online portal for latest job vacancies in Ghana and Remotely. We help end your job searching !
               
            </p>
            <a href="{{route('jobs')}}" class="bg-purple-700 hover:bg-purple-800 mt-8 py-3 px-4  rounded-full font-bold uppercase text-white tracking-widest text-sm">Browse Jobs</a>
          </div>

           <div class="flex flex-grow-1 flex-start" >
              <img src="{{asset('assets/icons/recruite.svg')}}" width="500">
            </div>
        </div>
      </div>

        <div class="container mx-auto">
            @include('partials.search')
         
          {{-- content  --}}
            <div class="my-12">
                <div class="job_ bg-white w-full md:w-4/5 mx-auto">
                  @forelse ($home_categories as $category)
                      
                  <div class="my-8">
                  {{-- category title  --}}
                      @if(count(App\hieworks\Data::data_adapter($category)) > 0)
                          <div class="text-blue-700 font-bold text-xl flex items-center p-4"">
                            <h4 class="align-middle">{{$category}}</h4>
                           
                          </div>
                      @endif
                  
                     {{-- job_wrapper --}}
                      <div class="mt-3">
                          @forelse(App\hieworks\Data::data_adapter($category) as $job)
                                <a href="{{route('jobinfo', ['title'=>Str::slug($job->job_title,'-'), 'id'=> base64_encode($job->id)])}}" class="block outline-none first:border-t">
                                    <div class="job-card sm:border-l sm:border-r">
                                      <div class="mr-2">
                                        @if($job->company_logo)
                                              <img src="{{asset('storage/uploads/'.$job->company_logo)}}" loading="lazy" alt="{{ $job->company_name }} company logo" width="80">
                                        @else 
                                              <img src="{{asset('/assets/images/logo-thumbnail.png')}}" loading="lazy" alt="hieworks logo" width="80">
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
                                  @if ($loop->iteration == 3)
                                      @break
                                  @endif
                               
                              
                            @empty
                                {{-- <h3>no post found</h3> --}}
                            @endforelse
                      </div>
                      @if (count(App\hieworks\Data::data_adapter($category) ) > 0 )
                          <div class="text-center text-purple-700 text-sm sm:font-bold my-4 py-6">
                            <a href="{{route('category', ['category' =>$category])}}">Browse all ({{count(App\hieworks\Data::data_adapter($category) ) }}) {{$category}} jobs </a>
                          </div>
                      @endif

                    </div> 
                    {{-- category block ends  --}}
                      

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
                    
            </div>
            {{-- jobs list container ends  --}}

            {{-- newsletters --}}
            <div class="sm:w-4/5 mx-auto">
                <!-- component -->
                  <div class="flex flex-col w-full md:h-48 bg-white rounded-lg shadow-md overflow-hidden md:flex-row my-10">
                    <div class="md:flex items-center justify-center md:w-1/2 md:bg-purple-900">
                        <div class="py-6 px-8 md:py-0">
                            <h2 class="text-purple-800 flex items-center  text-lg sm:text-2xl font-bold md:text-gray-100">
                              Subscribe Now 
                              <svg fill="none" stroke-linecap="round" class="w-8 h-8" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                              </svg>

                            </h2>
                            <p class="mt-2 text-gray-600 md:text-gray-400 capitalize">Be the first to get latest job updates. Subscribe today</p>
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
   </div>
@endsection