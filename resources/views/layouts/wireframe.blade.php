<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
              })(window,document,'script','dataLayer','GTM-KD6JSCW');</script>
        <!-- End Google Tag Manager -->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="@yield('page-description', 'Find current Jobs in Ghana From Top Companies and Employers. Browse and Apply For Unlimited Job Vacancies and Land your Dream Job Today')">
        <link rel="canonical" href="https://hieworks.com" />
        <meta name="keywords" content="graduate recruitment, current jobs in Ghana, work from home, online jobs, latest jobs, full time jobs, contract, job interviews, job opportunities, jobseekers, employers, employers in Ghana, Ghanaian companies, vacancy, job vacancy, human resource, cv, office works in Ghana, quick jobs, fast jobs, jobs in Ghana, jobs, by day jobs, job vacancies, recruitments, works, employments, hire employees, remote jobs, remote work, online works, job board, hiring remote workers, telecommunication jobs">
        <meta name="theme-color" content="#553c9a">
        <meta name="MobileOptimized" content="320">
        <meta name="HandheldFriendly" content="true">
        <meta name="distribution" content="global"/>
        <meta name="robots" content="index, follow"/>
        <meta name="copyright" content="2020 - {{date('Y')}} By Hieworks.com Ltd - www.hieworks.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, shrink-to-fit=no">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, target-densitydpi=device-dpi, shrink-to-fit=no"> --}}
        <meta name="author" content="Lennox Inc.">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>@yield('page-title', View::make('partials.title'))</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Varela+Round&display=swap" rel="stylesheet">         
        <livewire:styles />
        @stack('app_css')


        {{-- fb open graph meta data  --}}
          <meta property="og:url" content="{{url()->full()}}"/>
          <meta property="og:type" content="website" />
          <meta property="og:title" content="@yield('page-title','Find Current Jobs in Ghana and Remote Opportunities')" />
          <meta property="og:description" content="@yield('page-description', 'Find current jobs in Ghana from top companies and employers. Browse and apply for unlimited job vacancies and land your dream job today')"/>
          <meta property="og:image" content="{{asset('assets/images/social-medium.png')}}"/>
          <meta property="og:updated_time" content="{{date('Y-d-m')}}"/>
          <meta property="fb:app_id" content="250776776263089"/>
        {{-- open graph ends  --}}

        {{-- twitter share api  --}}
          <meta name="twitter:title" content="@yield('page-title','Find Current Jobs in Ghana and Remote Opportunities')"/>
          <meta name="twitter:description" content="@yield('page-description', 'Find current jobs in Ghana from top companies and employers. Browse and apply for unlimited job vacancies and land your dream job today')"/>
          <meta name="twitter:image" content="{{asset('assets/images/social-medium.png')}}"/>
          <meta name="twitter:card" content="summary"/>
        {{-- twitter api ends  --}}

        {{-- linkedIn meta tags  --}}
          
        <meta property="og:title" content="@yield('page-title','Find Current Jobs in Ghana and Remote Opportunities')"/>
        <meta property="og:image" content="{{asset('assets/images/social-large.png')}}"/>
        <meta property="og:description" content="@yield('page-description', 'Find current jobs in Ghana from top companies and employers. Browse and apply for unlimited job vacancies and land your dream job today')"/>
        <meta property="og:url" content="{{ url()->full() }}"/>

        {{-- linkedIn ends  --}}

        {{-- other meta tags  --}}
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="msapplication-starturl" content="/">
        <meta name="application-name" content="hieworks.com" />
        <meta name="msapplication-tooltip" content="hieworks.com" />

        {{-- favicons --}}
        <link rel="shortcut icon" href="{{asset('/assets/favicons/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('/assets/favicons/favicon.ico')}}" type="image/x-icon">


        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets/favicons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assets/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets/favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('/assets/favicons/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('/assets/favicons/safari-pinned-tab.svg')}}" color="#553c9a">
        <link rel="shortcut icon" href="{{asset('/assets/favicons/favicon.ico')}}">
        <meta name="msapplication-TileColor" content="#553c9a">
        <meta name="msapplication-config" content="{{asset('/assets/favicons/browserconfig.xml')}}">
        <meta name="theme-color" content="#553c9a">


    </head>
    <body class="bg-gray-100 min-h-screen">

        {{-- service scripts   --}}
            <!-- Google Tag Manager (noscript) -->
                  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD6JSCW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->


          @yield('service-scripts')
        

        {{-- services scripts ends  --}}

      <main x-data="{isOpen:false}" x-cloak>
       
        <header class="bg-purple-800">
          <div class="justify-between flex flex-wrap px-2 sm:px-0 text-white items-center container mx-auto">
           <div class="logo"><a href="/" class="outline-none"><img src="{{asset('assets/images/hieworks-logo.png')}}" width="100" alt="hieworks logo"></a></div>
                <nav class="flex" x-cloak>
                        <button class="sm:hidden focus:outline-none active:bg-transparent" @click="isOpen = !isOpen">
                           <template x-if.transition="!isOpen">
                            <svg fill="none" stroke-linecap="round" class="fill-current w-10 h-10" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                              <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                          </template>

                          <template x-if.transition="isOpen">
                            <svg fill="none" stroke-linecap="round" class="w-10 h-10" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                              <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                          </template>
                           
                          </button>

  
                          {{-- desktop menu begins  --}}
                        <ul class="justify-between hidden sm:flex">
                          
                          <li class="p-2 py-3">
                            <a href="{{route('user:postjob')}}" class="flex items-center bg-purple-900 rounded-full p-1 outline-none">
                              <span>
                                <svg fill="none" class="h-5 w-5 mx-1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                  <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                              </span>
                              <span>Post Job</span>
                            </a>
                          </li>

                          <li class="p-2 hover:bg-purple-700 py-3">
                            <a href="{{route('home')}}" class="flex items-center outline-none">
                              <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                              </svg>
                              <span>Home</span>
                            </a>
                          </li>

                          <li class="p-2 hover:bg-purple-700 py-3">
                            <a href="{{route('jobs')}}" class="flex items-center outline-none">
                              <svg fill="none" class="h-5 w-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                              </svg>
                              <span>Browse Jobs</span>
                            </a>
                          </li>

                         @auth
                              <li class="p-2 py-3 hover:bg-purple-700">
                                <a href="{{route('user:account')}}" class="flex items-center outline-none">
                                  <span>
                                    <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                  </span>
                                  <span>Account</span>
                                </a>
                              </li>

                              <li class="p-2 py-3 hover:bg-purple-700">
                                <a href="{{route('user:logout')}}" class="flex items-center outline-none">
                                  <span>
                                    <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                                   </svg>
                                  </span>
                                  <span>Logout</span>
                                </a>
                              </li>
                         @endauth

                          @guest
                            <li class="p-2 py-3 hover:bg-purple-700">
                                <a href="{{route('login')}}" class="flex items-center outline-none">
                                  <span>
                                    <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                                   </svg>
                                  </span>
                                  <span>Login</span>
                                </a>
                            </li>
                            
                            <li class="p-2 py-3 hover:bg-purple-700">
                                <a href="{{route('register')}}" class="flex items-center outline-none">
                                  <span>
                                    <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                    </svg>
                                  </span>
                                  <span>Register</span>
                                </a>
                            </li>

                           @endguest

                            <li class="p-2 py-3 hover:bg-purple-700">
                                <a href="{{route('blog')}}" class="flex items-center outline-none">
                                  <span>
                                    <svg fill="none" class="h-5 w-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                  </span>
                                  <span>Blog</span>
                                </a>
                            </li>
                        </ul>
                </nav>
           </div>
          </header>
          {{-- desktop menu ends  --}}

          {{-- mobile menu  --}}
          <div x-show.immediate="isOpen" class="absolute z-50 bg-purple-900 opacity-low w-full h-full pt-12">
            <div x-show.transition="isOpen">
                <ul class="text-white text-2xl ml-4 leading-10">
                  <li>
                      <a href="{{ route('home') }}" class="flex items-center outline-none">
                        <span>
                          <svg fill="currentColor" class="h-6 w-6" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                          </svg>
                        </span>
                        <span class="ml-1">Home</span>
                      </a>
                  </li>
                   
                  
                  <li>
                      <a href="{{ route('jobs') }}" class="flex items-center outline-none">
                        <span>
                          <svg fill="none" class="h-6 w-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                          </svg>
                        </span>
                        <span class="ml-1">Browse Jobs</span>
                      </a>
                  </li>

                  @auth
                      <li>
                          <a href="{{route('user:account')}}" class="flex items-center outline-none">
                            <span>
                              <svg fill="none" class="h-6 w-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                              </svg>
                            </span>
                            <span class="ml-1">Account</span>
                          </a>
                      </li>

                      <li>
                        <a href="{{route('user:jobs')}}" class="flex items-center outline-none">
                          <span>
                            <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                              <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                          </span>
                          <span class="ml-1">My Jobs</span>
                        </a>
                      </li>

                    <li>
                      <a href="{{route('user:notifications')}}" class="flex items-center outline-none">
                        <span>
                          <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                      <span class="ml-1">Notifications</span>
                      </a>
                    </li>

                    <li>
                      <a href="{{route('user:settings')}}" class="flex items-center outline-none">
                        <span>
                          <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                        </span>
                        <span class="ml-1">Settings</span>
                      </a>
                    </li>

                      
                  @endauth
                  
                  
                  @guest
                      <li>
                          <a href="{{route('login')}}" class="flex items-center outline-none">
                          <span>
                            <svg fill="none" class="h-6 w-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                              <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                          </span>
                          <span class="ml-1">Login</span>
                          </a>
                      </li>
                      

                      <li>
                          <a href="{{route('register')}}" class="flex items-center outline-none">
                          <span>
                            <svg fill="none" class="h-6 w-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                              <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                          </span>
                          <span class="ml-1">Register</span>
                          </a>
                      </li>

                  @endguest
                
                  <li>
                      <a href="{{route('post:postjob')}}" class="flex items-center outline-none">
                      <span>
                        <svg fill="none" class="h-6 w-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                          <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                      </span>
                      <span class="ml-1">Post Job</span>
                      </a>
                  </li>

                  @auth
                       <li>
                          <a href="{{route('user:logout')}}" class="flex items-center  outline-none">
                          <span>
                            <svg fill="none" stroke-linecap="round" class="h-6 w-6"  stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                               <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                            </svg>
                          </span>
                          <span class="ml-1">Logout</span>
                          </a>
                      </li>
                  @endauth

                  <li>
                      <a href="{{route('blog')}}" class="flex items-center outline-none">
                      <span>
                        <svg fill="none" class="h-6 w-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                      </span>
                      <span class="ml-1">Blog</span>
                      </a>
                  </li>

                </ul>
            </div>
           </div>
           {{-- mobile menu ends  --}}


        <section class="min-h-screen">
            @yield('content-wrapper')
        </section>

        {{-- <div class="bg-orange-600 px-1 py-1 fixed flex-start bottom-0 mb-2 right-0 rounded" :class="{'-mr-20' : isOut}" x-data="{isOut:false}" @click.away="isOut = !isOut">
            <div class="flex items-center text-white">
              <svg xmlns="http://www.w3.org/2000/svg" x-show="isOut" class="w-5 h-5 lg:w-6 lg:h-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"/>
                <polyline points="15 6 9 12 15 18" />
              </svg>
                <span class="lg:font-semibold">Subscribe</span>
              <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOut" class="w-5 h-5 lg:w-6 lg:h-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z"/>
                <polyline points="9 6 15 12 9 18" />
              </svg>
              
            </div>
           
        </div> --}}
        <footer class="footer p-2 md:p-6">
           <div class="container mx-auto">
              <div class="block md:flex flex-wrap justify-evenly text-gray-400">
                  <div class="my-4">
                      <h4 class="font-bold">Support & Help</h4>
                      <div class="text-sm pt-2 leading-7">
                        <ul>
                            <li><a href="/about#contact-us">Contact Us</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                            <li><a href="{{route('sitemap')}}">Sitemap</a></li>
                        </ul>
                      </div>
                  </div>

                  <div class="my-4 flex-grow-1">
                    <h4 class="font-bold">Get to know us</h4>
                    <div class="text-sm pt-2 leading-7">
                      <ul>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('policy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('terms')}}">Terms & Conditions</a></li>
                      </ul>
                    </div>
                  </div>

                 <div class="my-4 max-w-xs">
                  <h4 class="font-bold">Let's Get Interactive</h4>
                  <div class="text-sm pt-2 text-wrap">
                    <p>
                      Follow us on our social media platforms to get the latest updates from us.
                    </p>
                    <div class="flex items-center mt-3 flex-wrap leading-7">
                        <div class="font-bold">
                          <a href="https://www.facebook.com/hieworks/" target="_blank">Facebook</a>, <a href="https://twitter.com/hieworks" target="_blank">Twitter</a> (Hieworks Gh)
                        </div>
                    </div>
                  </div>
                </div>

              </div>
           </div>
           <div class=" text-gray-500">
               <a href="/">&copy; {{date('Y')}} | Hieworks Ltd.</a>
           </div>
        </footer>
      </main>
      <script src="{{ mix('/js/vendor.js') }}"></script>
      <script src="{{ mix('/js/activate_sw.js') }}"></script>
      <livewire:scripts />
       @stack('app_js')

       {{-- schema.org --}}
       <script type="application/ld+json">
            {
            "@context": "http://www.schema.org",
            "@type": "Organization",
            "@id": "https://www.hieworks.com.gh#organisation",
            "name": "Hieworks Ghana",
            "url": "{{config('app.url')}}",
            "logo": "{{asset('assets/images/social-medium.png')}}",
            "description": "Find current jobs in Ghana and online from top companies and employers. Easily apply for vacancies and land your dream job today. Ghana's leading jobs website",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Nii Boi Town",
                "addressLocality": "Accra, Ghana",
                "addressRegion": "Greater Accra",
                "addressCountry": "Ghana"
            },
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+233241775839",
                    "contactType": "Customer Support"
                }
            ],
            "sameAs": [
                "https://web.facebook.com/hieworks",
                "https://twitter.com/hieworks",
                "https://www.instagram.com/hieworks/",
                "https://www.linkedin.com/company/hieworks"
            ]
        }
    </script>


    {{-- <script type="application/ld+json">
      {
        "@context":"http://schema.org",
        "@type":"ItemList",
        "itemListElement":[
          @foreach($home_categories as $category)
            {
                "@type":"SiteNavigationElement",
                "position":{{$loop->iteration}},
                "url": "{{route('category', ['category' =>Str::slug($category,'-')])}}"
              },
            @endforeach  
        ]
      }
    </script> --}}
   
    </body>
    
</html>