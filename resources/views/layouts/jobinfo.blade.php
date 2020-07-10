@extends('layouts.wireframe')

@section('page-title', $job->job_title . ' | hieworks.com')
@section('page-description', 'apply for '.$job->job_title .' job')

@section('service-scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=250776776263089&autoLogAppEvents=1"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
    
@endsection

@section('content-wrapper')


        <div class="container mx-auto px-2 sm:px-0">
            @include('partials.search')
            

          {{-- content  --}}
            <div class="my-8">
                <div class="job_ bg-white mx-auto p-1 sm:p-2 block md:flex ">
                   <div class="w-full md:w-4/5 border p-4 my-2">
                       <div>
                           <h3 class="font-bold md:font-normal md:text-lg text-purple-800">{{$job->job_title}}</h3>
                           
                         {{-- set one  --}}
                           <div class="flex items-center flex-wrap justify-between text-gray-600 text-sm border-t my-2 pt-1">  
                            <div class="flex items-center">
                                <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                    <span>{{$job->job_type}}</span>
                            </div>

                            <div class="flex items-center">
                                <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                    <span>{{$job->job_location}}</span>
                            </div>

                            <div class="flex items-center">
                                <svg fill="none" stroke-linecap="round" class="h5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                    <span>
                                        @if ($job->expected_salary)
                                             {{$job->expected_salary}}
                                        @else
                                            confidential
                                        @endif
                                    </span>
                            </div>

                         </div>
                         {{-- set one ends  --}}

                         {{-- set two  --}}
                         <div class="flex items-center flex-wrap justify-between text-gray-600 text-sm  my-2 pt-1"> 
                            <div class="flex items-center my-1">
                                <span class="bg-blue-600 py-1 px-2 rounded-full text-white">{{$job->job_category}}</span>
                            </div>
                            <div class="flex items-center my-2">
                                <span class="bg-purple-600 py-1 px-2 rounded-full text-white">{{$job->job_experience}}</span>
                            </div>

                            <div class="flex items-center my-2">
                                <span class="bg-green-600 py-1 px-2 rounded-full text-white">{{$job->created_at->diffForHumans()}}</span>
                            </div>

                            <div class="flex items-center my-1">
                                <span class="bg-pink-600 py-1 px-2 rounded-full text-white">{{$job->job_qualification}}</span>
                            </div>

                            <div class="flex items-center my-1">
                                <span class="bg-red-500 py-1 px-2 rounded-full text-white">{{$job->job_id}}</span>
                            </div>
                         </div>
                         {{-- set two ends  --}}

                        <div class="text-gray-700">
                            <h4 class="font-bold mb-2">Job Description</h4>
                            <div class="text-sm md:text-base">
                               <div class="article_description text-sm">
                                 {!! $job->job_description !!}
                               </div>
                            </div>
                        </div>

                           
                       </div>
                       <div></div>
                   </div>

                   <div class="w-full md:w-2/5 md:px-3 my-2">
                       
                       <div class="border p-4">
                                <div>
                                    <div class="block sm:flex flex-wrap items-center text-gray-600">
                                         @if($job->company_logo)
                                            <img src="{{asset('storage/uploads/'.$job->company_logo)}}" loading="lazy" alt="{{ $job->company_name }} company logo" width="120">
                                         @else 
                                            <img src="{{asset('/assets/images/logo-thumbnail.png')}}" loading="lazy" alt="hieworks logo" width="120">
                                         @endif
                                        <span class="text-base sm:text-lg font-bold">{{$job->job_company}}</span>
                                    </div>

                                    <div class="block sm:flex flex-wrap items-center text-gray-500">
                                        <span class="bg-gray-200 font-semibold text-lg px-3 py-1 rounded-full text-blue-700 m-1">more info</span>
                                        <div>
                                            @if($job->onsite)
                                                <div class="flex justify-center my-2">
                                                     <a href="{{route('apply:job', ['id'=> base64_encode($job->id)])}}" class="py-1 px-3 bg-purple-800 text-white rounded-full">apply on hieworks</a>
                                                </div>
                                            @endif
                                            <span class="text-base mx-3 my-2 flex items-center"> 
                                                <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                                <span>
                                                        @if ($job->job_email)
                                                            <a href="mailto:{{$job->job_email}}?subject={{Str::slug($job->job_title, " ", "%20")}}" target="_blank">{{$job->job_email}}</a>
                                                        @else
                                                            Not Specified
                                                        @endif
                                                </span>
                                            </span>

                                            <span class="text-base mx-3 my-2 flex items-center"> 
                                                <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                                </svg>
                                                <span>{{($job->job_phone) ? $job->job_phone : 'Confidential' }}</span>
                                            </span>

                                            <span class="text-base mx-3 my-2 flex items-center"> 
                                                <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                                </svg>
                                                <span>
                                                    @if ($job->application_url)
                                                        <a href="{{$job->application_url}}" target="_blank" class="text-blue-400">click link to apply</a>
                                                    @else
                                                        Not Specified
                                                    @endif
                                                </span>
                                            </span>
                                          </div>
                                    </div>

                                    <div class="block sm:flex flex-wrap items-center text-gray-500">
                                        
                                       @if($job->job_deadline)
                                            <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                           <span class="text-base">Closing Date:  {{$job->job_deadline->format('d M Y')}}</span>
                                       @endif
                                    </div>

                                    <div class="my-3 flex justify-evenly items-center">
                                        <div class="fb-share-button" data-href="{{url()->full().'?utm_source=facebook&utm_medium=social&utm_campaign=share-button&utm_content='.$job->job_id}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" class="fb-xfbml-parse-ignore">Share</a></div>
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-url="{{url()->full().'?utm_source=twitter&utm_medium=twitter&utm_campaign=share-button&utm_content='.$job->job_id}}" 
                                                class="twitter-share-button" data-show-count="false">Tweet
                                        </a>
                                        <script type="IN/Share" data-url="{{url()->full().'?utm_source=linkedin&utm_medium=linkedin&utm_campaign=share-button&utm_content='.$job->job_id}}"></script>
                                        <div class="sm:hidden">
                                            <a href="https://api.whatsapp.com/send?text={{url()->full().'?utm_source=whatsapp&utm_medium=whatsapp&utm_campaign=share-button&utm_content='.$job->job_id}}" target="_blank">
                                                <img src="{{asset('assets/icons/whatsapp.svg')}}" width="32">
                                            </a>
                                        </div>
                                    </div>

                                {{-- informaition  --}}
                                <div class="mt-3">
                                    <div class="text-red-400">
                                        <h3 class="flex items-center font-bold">
                                            <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path>
                                            </svg>
                                            Fraud Alert
                                        </h3>
                                        <p class="text-xs font-bold capitalize">
                                            Do not pay money to anybody for a job or employment.    
                                        </p>
                                    </div>
                                </div>

                       </div>
                   </div>

                    <div class="my-4  text-center sm:hidden">
                            <a href="{{route('jobs')}}" class="outline-none bg-blue-200 font-semibold flex items-center capitalize justify-center text-blue-700 px-4 py-3">
                                 view latest jobs today &nbsp;
                                <svg fill="none" class="h-5 w-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </a>
                    </div>
                </div>
                    
            </div>

            <div class="w-full md:w-4/6 my-2 bg-white pb-12">
                 <div class="my-4  text-center hidden sm:block pt-12">
                            <a href="{{route('jobs')}}" class="outline-none capitalize text-sm mx-auto w-56 bg-blue-200 font-semibold flex items-center justify-center text-blue-700 px-4 py-3">
                                 view latest jobs today &nbsp;
                                <svg fill="none" class="h-5 w-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </a>
                 </div>

                <div class="p-4">
                    <h3 class="text-blue-700 font-bold flex items-center text-2xl">Related Jobs</h3>
                </div>
                <div>
                    @forelse($relatedJobs as $job)
                                 
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
                                    <span>{{$job->created_at->diffForHumans()}}</span>
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
                    
                    
                    @empty
                                <div class="text-center p-6 text-gray-500">
                                        <div class="w-1/2 mx-auto flex items-center justify-center">
                                          <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="empty jobs">
                                        </div>
                                        <div>
                                            <h4>No Jobs Found</h4>
                                        </div>
                                </div>
                    @endforelse
                </div>
            </div>
           

          </div>
   </div>
@endsection