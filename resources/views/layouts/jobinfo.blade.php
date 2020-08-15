@extends('layouts.wireframe')

@section('page-title', $job->job_title . ' | hieworks.com')
@section('page-description', 'Apply for '.$job->job_title .' Job')

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
                <div class="job_ bg-white mx-auto p-0 sm:p-2 block md:flex ">
                   <div class="w-full md:w-4/5 border p-2 lg:p-4 my-2">
                       <div>
                           <h3 class="font-bold text-purple-700">{{$job->job_title}}</h3>
                           
                         {{-- set one  --}}
                           <div class="flex items-center flex-wrap justify-between text-gray-600 text-sm border-t my-2 pt-1">  
                            <div class="flex items-center">
                                <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                    <span class="capitalize">{{$job->job_type}}</span>
                            </div>

                            <div class="flex items-center">
                                <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                    <span class="capitalize">{{$job->job_location}}</span>
                            </div>

                            <div class="flex items-center">
                                <svg fill="none" stroke-linecap="round" class="h5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                                    <span class="capitalize">
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
                       
                       <div class="border p-1">
                                <div>
                                    <div class="text-center py-3">
                                        <span class="bg-gray-200 font-semibold text-lg px-3 py-1 rounded-full text-blue-700 m-1">More Information</span>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-center text-gray-600">
                                         @if($job->company_logo)
                                            <img src="{{asset('storage/uploads/'.$job->company_logo)}}" loading="lazy" alt="{{ $job->company_name }} company logo" width="80">
                                         @endif
                                        <span class="text-base sm:text-lg font-bold"><i class="text-gray-500">{{$job->job_company}}</i></span>
                                    </div>

                                    <div class="block sm:flex flex-wrap items-center text-gray-500">
                                        <div>
                                            @if($job->onsite)
                                                <div class="flex justify-center my-2">
                                                     <a href="{{route('apply:job', ['id'=> base64_encode($job->id)])}}" class="py-1 px-3 bg-purple-800 text-white rounded-full text-xs font-bold">Apply On Hieworks</a>
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
                                                        <a href="{{$job->application_url}}" target="_blank" class="text-blue-700 text-sm font-bold">Apply with Link</a>
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
                                           <span class="text-base">Deadline:  {{$job->job_deadline->format('d M Y')}}</span>
                                        @endif
                                    </div>

                                     @if($job->status == false)
                                            <div class="text-red-200 font-bold">Job Post Expired</div>
                                     @endif

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
                                    <div class="w-full my-3 p-4">
                                        <div class="capitalize py-1 text-sm font-semibold flex items-center">
                                            <img src="{{asset('assets/icons/subscribe.png')}}" class="object-contain w-16" width="75">
                                            <div>
                                                <span class="text-xs lg:text-sm font-bold text-blue-600">Get The Job Before Others Do</span> 
                                                <br>
                                                <small class="italic text-gray-600">you for look sharp !</small>
                                            </div>                                           
                                        </div>
                                       <form method="POST" action="{{route('newsletter')}}">
                                           <div class="text-center">
                                               <input type="email" name="email" class=" @error('email') border border-red-500 @enderror text-gray-600 text-sm bg-gray-200 px-3 rounded-full py-2 w-full lg:w-5/6 mx-auto focus:border focus:border-blue-500" value="{{old('email')}}" placeholder="Subscribe for Latest Job Updates"/>
                                           </div>
                                           @error('email')
                                                <div class="text-xs text-red-400 font-semibold px-2 py-1 text-center">{{$message}}</div>
                                           @enderror
                                           <div>
                                                @if (session('info'))
                                                <div class="text-xs text-teal-500 font-semibold px-2 py-1 text-center">{{session('info')}}</div>
                                                @endif
                                           </div>
                                           <div class="text-center my-2">
                                                <button class="bg-orange-500 px-6 py-2 text-white rounded-full mx-auto uppercase text-xs font-bold">subscribe</button>
                                           </div>
                                           @csrf
                                       </form>

                                    </div>
                                   

                                    <div class="text-red-400">
                                       <p class="text-xs font-bold capitalize">
                                            <a href="{{route('report:job', ['id'=> base64_encode($job->id)])}}" class="flex items-center bg-blue-500 px-2 py-1 w-32 justify-center mt-2 font-bold uppercase text-white text-center rounded-sm">
                                                <svg fill="none" stroke-linecap="round" class="w-4 h-4" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg> 
                                                Report Job
                                            </a>   
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
                    @forelse($relatedJobs as $relatedJob)
                                 
                            <a href="{{route('jobinfo', ['title'=>Str::slug($relatedJob->job_title,'-'), 'id'=> base64_encode($relatedJob->id)])}}" class="block outline-none first:border-t">
                                <div class="job-card sm:border-l sm:border-r">
                                    <div class="mr-2">
                                        @if($relatedJob->company_logo)
                                            <img src="{{asset('storage/uploads/'.$relatedJob->company_logo)}}" loading="lazy" alt="{{ $relatedJob->company_name }} company logo" width="80">
                                        @else 
                                            <img src="{{asset('/assets/images/logo-thumbnail.png')}}" loading="lazy" alt="hieworks logo" width="80">
                                        @endif
                                    </div>
                    
                                <div class="w-full">
                                    <div class="text-right text-sm text-gray-500">
                                    @if (latest_badge($relatedJob->created_at))
                                        <small class="px-3 py-1 bg-pink-200 rounded-full text-pink-700 font-semibold">New</small>
                                    @endif
                                    <span>{{$relatedJob->created_at->diffForHumans()}}</span>
                                    </div>
                                    
                                    <div class="text-blue-700 font-bold job-title text-sm">
                                        {{$relatedJob->job_title}}
                                    </div>
                    
                                    <div class="flex mt-2">
                                        {{-- job type  --}}
                                        <div class="bg-purple-800 rounded-full px-2 py-1 text-white flex items-center mx-2">
                                            <span>
                                                <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </span>
                                            <span class="text-sm capitalize">{{$relatedJob->job_type}}</span>
                                        </div>
                    
                                        {{-- job location  --}}
                                        <div class="flex items-center text-gray-600 mx-2">
                                        <span>
                                            <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </span>
                                        <span class="text-sm">{{$relatedJob->job_location}}</span>
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

@prepend('app_js')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "{{config('app.url')}}",
                    "name": "Homepage",
                    "image": "{{asset('assets/images/hieworks-logo-300x300.png')}}"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@id": "{{route('category', ['category' =>Str::slug($job->job_category, '-')])}}",
                    "name": "{{$job->job_category}}",
                    "image": "{{asset('assets/images/hieworks-logo-300x300.png')}}"
                }
            },
            {
                "@type": "ListItem",
                "position": 3,
                "item": {
                    "@id": "{{route('jobinfo', ['title'=>Str::slug($job->job_title,'-'), 'id'=> base64_encode($job->id)])}}",
                    "name": "{{$job->job_title}}",
                    "image": "{{($job->company_logo)  ?  asset('storage/uploads/'.$job->company_logo) : asset('assets/images/hieworks-logo-300x300.png')}}"
                }
            }
        ]
    }
</script>

<script type="application/ld+json">
    {
            "@context": "https://schema.org/",
            "@type": "JobPosting",
            "title": "{{$job->job_title}}",
            "image": "{{asset('assets/images/hieworks-logo-300x300.png')}}",
            "url":"{{url()->current()}}",
            "datePosted": "{{$job->created_at}}",
            "description": "{{$job->job_description}}",
            "employmentType": "{{strtoupper(Str::slug($job->job_type, '_'))}}",
            "industry": "{{$job->job_category}}",
            "occupationalCategory": "{{ $job->job_category }}",
            "salaryCurrency": "GHS",
            
            "identifier":"{{$job->job_id}}",
            "validThrough": "{{($job->job_deadline) ? $job->job_deadline : $job->created_at->addDays(45)}}",
            "educationRequirements": "{{$job->job_qualification}}",
            "qualifications": "{{$job->job_experience}}",
            "experienceRequirements": "{{$job->job_experience}}",
            "jobLocation": {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "{{$job->job_location}}",
                    "addressRegion": "Ghana",
                    "addressCountry": "GH"
                }
            },
            "hiringOrganization": {
                "@type": "Organization",
                "name": "{{($job->job_company) ? $job->job_company : 'Reputable Company'}}",
                "logo" : "{{($job->company_logo)  ?  asset('storage/uploads/'.$job->company_logo) : asset('assets/images/hieworks-logo-300x300.png')}}",
                "sameAs": ""
            }
        }
</script>
   
@endprepend