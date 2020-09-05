@extends('layouts.wireframe')

@section('page-title', 'Current Jobs in Ghana '. date('Y'). ' - Hieworks')
@section('page-description', 'Find current job vacancies from top companies and employers in Ghana and Online. Easily apply online and land your dream job today')

@section('content-wrapper')
   <div>
     
        <div class="w-full md:w-3/5 mx-auto my-3" id="adb_v2"></div>

        <div class="container mx-auto">
              @include('partials.search')

            <div class="sm:w-4/5 mx-auto p-1 sm:p-2 mt-8 bg-white">
              
                <form method="GET" action="{{route('filter')}}" class="block sm:flex justify-evenly items-center">
                    <div class="flex flex-grow-1 my-2">
                    
                       <select class="w-full text-gray-600 bg-gray-300 py-2 border-2 rounded px-6 select" name="job_category">
                            <option value="">Select Job Category</option>
                            @foreach ($job_categories as $category)
                                      <option value="{{$category->slug}}">{{$category->title}}</option>
                            @endforeach
                       </select>
                    </div>
                    <div class="flex flex-grow-1 my-2">
                        <select class="w-full text-gray-600 bg-gray-300 py-2 border  rounded px-6 select" name="job_location">
                            <option value="">Select Job Location</option>
                             @foreach ($job_locations as $location)
                                       <option value="{{$location}}">{{$location}}</option>
                             @endforeach
                        </select>
                    </div>

                    <div class="my-2 text-right">
                        <button class="px-4 py-2 bg-purple-800 rounded-lg text-white flex items-center">
                            <svg fill="none" stroke-linecap="round" class="w-5 h-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                            Filter
                        </button>
                    </div>
                </form>
            </div>

          {{-- content  --}}
            <div class="my-8">
                <div class="job_ bg-white w-full  md:w-4/5 mx-auto">
                 
                          <div class="p-4">
                            <h1>
                              @if(isset($title))
                                  <div class="text-blue-700 font-bold text-base flex items-center">All {{$title}} Jobs</div>
                              @else
                                  <div class="text-blue-700 font-bold text-xl flex items-center">Browsing Latest Jobs</div>
                              @endif
                            </h1>
                          </div>
                         {{-- <x-alert :message="accra"/> --}}
                   
                     {{-- job_wrapper --}}
                      <div class="my-3">
                            @forelse($jobs as $job)
                             
                                <a href="{{route('jobinfo', ['title'=>Str::slug($job->job_title,'-'), 'id'=> base64_encode($job->id)])}}" class="block outline-none first:border-t">
                                    <div class="job-card sm:border-l sm:border-r">
                                      <div class="mr-2">
                                        @if($job->company_logo)
                                            <img src="{{asset('storage/uploads/'.$job->company_logo)}}" loading="lazy" alt="{{ $job->company_name }} company logo" class="w-16 object-contain">
                                         @else 
                                            <img src="{{asset('/assets/images/logo-thumbnail.png')}}" loading="lazy" alt="hieworks logo" class="w-16 object-contain">
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
                                      <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="empty jobs icon">
                                    </div>
                                    <div>
                                        <h4>No Post Found</h4>
                                        <div class="my-4 text-center flex items-center justify-center">
                                           <div class="px-3 py-2 bg-indigo-500 text-white rounded-full w-48 flex">
                                              <a href="{{route('jobs')}}" class="">Browse Jobs</a>
                                              <svg viewBox="0 0 20 20" fill="currentColor" class="briefcase w-6 h-6"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
                                           </div>
                                        </div>
                                    </div>
                                </div>

                            @endforelse
                      </div>
                      {{-- job wrapper ends  --}}

                     
                      <div class="my-4 py-6">                        
                           {{$jobs->links()}}
                      </div>
                     



                </div>
                <div class="w-full md:w-3/5 mx-auto" id="adb_v3"></div>

            </div>
            {{-- jobs list container ends  --}}

           


        </div>
   </div>
@endsection

@prepend('app_js')
    <script type="application/ld+json">
      {
          "@context": "https://schema.org",
            "@type": "ItemList",
            "url": "{{config('app.url')}}",
            "name": "Current Jobs in Ghana and Remote Careers",
            "numberOfItems": 20,
            "itemListElement": [
               @foreach ($jobs as $job)
                  {
                    "@type": "ListItem",
                    "position": {{$loop->iteration}},
                    "name": "{{$job->job_title}}",
                    "url": "{{route('jobinfo', ['title'=>Str::slug($job->job_title,'-'), 'id'=> base64_encode($job->id)])}}"
                    }{{ ($loop->last) ? '' : ','}}
               @endforeach
            ]
      }
    </script>

    <script type="application/ld+json">
      {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "Hieworks Ghana",
          "url": "{{config('app.url')}}",
          "potentialAction": {
              "@type": "SearchAction",
              "target": "https://hieworks.com/search?q={q}",
              "query-input": "required name=q"
          }
        }
      </script>
@endprepend