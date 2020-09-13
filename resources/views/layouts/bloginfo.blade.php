@extends('layouts.wireframe')

@section('page-title',  $blogInfo->article_title)
@section('page-description', 'Latest Jobs in Ghana recruitments and vacancies website with information in career tips, hr services and employment opportunities.')


@section('service-scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=250776776263089&autoLogAppEvents=1"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
    
@endsection

@section('content-wrapper')
   <div>
     
        <div class="my-4 border bg-gray-200">
            <div class="container mx-auto p-12">
                 <div class="text-center">
                  <h1 class="text-2xl md:text-4xl font-bold  pb-4 text-blue-600"><a href="{{route('blog')}}">Blog</a></h1>
                  <h3 class="text-blue-700 text-lg font-semibold">
                      {{$blogInfo->article_title}}
                   </h3>
                 </div>
            </div>
        </div>
      
        <div class="container mx-auto sm:px-0">
          <div class="w-full md:w-2/5 my-3 flex justify-center mx-auto" id="adb_v8">
            <script async="async" data-cfasync="false" src="//pl15793604.toprevenuenetwork.com/4b5abac20f17db3a97470c78b5dcc515/invoke.js"></script>
            <div id="container-4b5abac20f17db3a97470c78b5dcc515"></div>
          </div>
          <div>
              <ul class="text-gray-600 text-xs breadcrumb pl-3">
                <li><a href="{{route('blog')}}" class="text-blue-700 mini-title">Blog</a> &raquo; <span class="text-gray-700">{{$blogInfo->article_title}}</span></li>
              </ul>
          </div>
          <div class="block md:flex">
                <div class="w-full md:w-4/5">
                  
                        <div class="block md:flex items-center bg-white text-gray-700 p-3 border my-2">
                               <div class="w-full">
                                       <div class="md:pl-4 flex flex-wrap justify-between">
                                            <div>
                                                <span class="text-sm text-right bg-orange-200 px-3 py-1 font-semibold rounded-full text-orange-700">{{$blogInfo->created_at->format('M d, y')}}</span>
                                            </div>

                                            <div>
                                                <span class="text-sm text-right bg-teal-200 px-3 py-1 font-semibold rounded-full text-teal-700">{{$blogInfo->category->category}}</span>
                                            </div>
                                       </div>

                                      <div class="md:pl-4 my-3 text-blue-700">
                                        {{$blogInfo->article_title}}
                                      </div>
                                     
                                      <div class="md:pl-4 article_description text-sm">
                                        {!! $blogInfo->article_description !!} 
                                      </div>

                                      <div class="share_post my-6">
                                        <div class="my-3 flex justify-end items-center">
                                          <div class="fb-share-button mx-3" data-href="{{url()->full().'?utm_source=facebook&utm_medium=social&utm_campaign=share-button&utm_content='.$blogInfo->id}}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->full()}}" class="fb-xfbml-parse-ignore">Share</a></div>
                                          <div class="mx-3">
                                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-url="{{url()->full().'?utm_source=twitter&utm_medium=twitter&utm_campaign=share-button&utm_content='.$blogInfo->id}}" 
                                                    class="twitter-share-button" data-show-count="false">Tweet
                                            </a>
                                          </div>
                                          <script type="IN/Share" data-url="{{url()->full().'?utm_source=linkedin&utm_medium=linkedin&utm_campaign=share-button&utm_content='.$blogInfo->id}}"></script>
                                          <div class="sm:hidden mx-3">
                                              <a href="https://api.whatsapp.com/send?text={{url()->full().'?utm_source=whatsapp&utm_medium=whatsapp&utm_campaign=share-button&utm_content='.$blogInfo->id}}" target="_blank">
                                                  <img src="{{asset('assets/icons/whatsapp.svg')}}" class="w-6" alt="whatsapp share">
                                              </a>
                                          </div>
                                        </div>
                                      </div>
                                      {{-- share ends  --}}
                                     
                                    </div>

                                   
                        </div>

                        <div class="my-6 bg-white">
                           <div class="flex justify-center py-6">
                             <span class="bg-indigo-500 text-white text-center rounded-full px-6 py-3"><a href="{{route('jobs')}}" class="outline-none block capitalize">view latest jobs today</a></span>
                           </div>

                           <div class="w-full md:w-2/5 my-3 flex justify-center mx-auto" id="adb_v9">
                              <script async="async" data-cfasync="false" src="//pl15793604.toprevenuenetwork.com/4b5abac20f17db3a97470c78b5dcc515/invoke.js"></script>
                              <div id="container-4b5abac20f17db3a97470c78b5dcc515"></div>
                           </div>


                            <div class="text-blue-600 text-xl font-bold my-6 pl-3">
                              <h3>Browse Latest Job Vacancies</h3>
                            </div>

                           <div>
                             @foreach ($recentJobs as $job)
                                 
                               
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
                                          
                                            </div>
                             
                                        </div>
                                      </div>
                                  </a>
                             @endforeach
                           </div>

                          
                        </div>
                </div>
                <aside class="mt-3 p-2 w-full md:w-1/4 bg-white">
                      <div class="border rounded-md mb-6">
                        <div class="text-center font-bold text-blue-700 text-sm bg-gray-100 p-4">
                          Featured Posts
                        </div>
                         @forelse ($featuredPosts as $featured)
                            <a href="{{route('bloginfo', ['title' => Str::slug($featured->article_title, '-'),'id' => base64_encode($featured->id)])}}" class="outline-none">
                              <div class="text-sm text-gray-700 py-3 px-4 border-t hover:bg-purple-700 hover:text-white">
                                &raquo; {{$featured->article_title}}
                              </div>
                              
                            </a>
                        @empty
                            <div class="text-gray-300 text-center mx-auto px-6 py-3">no post found</div>
                        @endforelse
                      </div>

                      <div class="border rounded-md mb-6">
                        <div class="text-center font-bold text-blue-700 text-sm bg-gray-100 p-4">
                           Blog Categories
                        </div>
                        @forelse ($categories as $category)
                      
                            <a href="{{route('blog:category', ['category' =>Str::slug($category->category, '-'), 'id'=> base64_encode($category->id)])}}" class="outline-none">
                              <div class="text-sm text-gray-700 py-3 px-4 border-t hover:bg-purple-700 hover:text-white">
                                &raquo; {{$category->category}}
                              </div>
                              
                            </a>
                            
                        @empty
                            <div class="text-gray-300 text-center mx-auto px-6 py-3">no post found</div>
                        @endforelse
                      </div>


                      
                </aside>
            </div>
        </div>
   </div>
@endsection

@prepend('app_js')

<script type="text/javascript">
	atOptions = {
		'key' : 'c2a83c08534d500af07bee042cef20e6',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaynetworkprofit.com/c2a83c08534d500af07bee042cef20e6/invoke.js"></scr' + 'ipt>');
</script>

<script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage": {
          "@type": "WebPage",
          "@id": "{{url()->current()}}"
        },
        "headline": "{{$blogInfo->article_title}}",
        "image": [
          "{{asset('/assets/images/social-large.png')}}"
        ],
        "datePublished": "{{$blogInfo->created_at}}",
        "dateModified": "{{$blogInfo->updated_at}}",
        "author": {
          "@type": "Person",
          "name": "Lennox Kaidzro"
        },
        "publisher": {
          "@type": "Organization",
          "name": "Hiework Ghana",
          "logo": {
            "@type": "ImageObject",
            "url": "{{asset('/assets/images/hieworks-logo-300x300.png')}}"
          }
        }
      }
  </script>


@endprepend