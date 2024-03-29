<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="@yield('page-description', 'hieworks.com')">
        <link rel="canonical" href="https://hieworks.com" />
        <meta name="keywords" content="">
        <meta name="theme-color" content="#553c9a">
        <meta name="MobileOptimized" content="320">
        <meta name="HandheldFriendly" content="true">
        <meta name="robots" content="noindex"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, target-densitydpi=device-dpi, shrink-to-fit=no">
        <meta name="author" content="Lennox Inc.">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>@yield('page-title', 'hieworks.com')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
        @stack('app_css')

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
    <body class=" bg-gray-100 min-h-screen">
        {{-- service scripts   --}}
            <!-- Google Tag Manager (noscript) -->
                  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD6JSCW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->


          @yield('service-scripts')
        

        {{-- services scripts ends  --}}
      <main x-data={isOpen:false} x-cloak>
        <header class="bg-purple-800">
          <div class="justify-between flex flex-wrap px-2 sm:px-0 text-white items-center container mx-auto">
           <div class="logo"><a href="/" class="outline-none"><img src="{{asset('assets/images/hieworks-logo.png')}}" width="100"></a></div>
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
                         

                          <li class="p-2 hover:bg-purple-700 py-3">
                            <a href="{{route('jobs')}}" target="_blank" class="flex items-center outline-none">
                              <svg fill="none" class="h-5 w-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                              </svg>
                              <span>Browse Jobs</span>
                            </a>
                          </li>

                         @auth('admin')
                              <li class="p-2 py-3 hover:bg-purple-700">
                                <a href="{{route('backend:logout')}}" class="flex items-center outline-none">
                                  <span>
                                    <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                                   </svg>
                                  </span>
                                  <span>Logout</span>
                                </a>
                              </li>
                         @endauth

                          @guest('admin')
                            <li class="p-2 py-3 hover:bg-purple-700">
                                <a href="{{route('backend:login')}}" class="flex items-center outline-none">
                                  <span>
                                    <svg fill="none" stroke-linecap="round" class="h-5 w-5"  stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                                   </svg>
                                  </span>
                                  <span>Login</span>
                                </a>
                            </li>
                          @endguest
                        </ul>
                </nav>
           </div>
          </header>
          {{-- desktop menu ends  --}}

          {{-- mobile menu  --}}
          <div x-show.immediate="isOpen" class="z-50 bg-purple-900 opacity-low absolute w-full h-full pt-12">
            <div x-show.transition="isOpen">
                <ul class="text-white text-2xl ml-4 leading-10">
                 
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
                  @auth('admin')
                    
                      

                    <li>
                      <a href="#" class="flex items-center outline-none">
                        <span>
                          <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                          </svg>
                        </span>
                      <span class="ml-1">Notifications</span>
                      </a>
                  </li>

                    <li>
                      <a href="#" class="flex items-center outline-none">
                        <span>
                          <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                        </span>
                        <span class="ml-1">Settings</span>
                      </a>
                    </li>

                      
                  @endauth
                  
                  
                  @guest('admin')
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
                      
                 @endguest
                
                  @auth('admin')
                       <li>
                          <a href="{{route('backend:logout')}}" class="flex items-center  outline-none">
                          <span>
                            <svg fill="none" stroke-linecap="round" class="h-6 w-6"  stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                               <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                            </svg>
                          </span>
                          <span class="ml-1">Logout</span>
                          </a>
                      </li>
                  @endauth

                </ul>
            </div>
           </div>
           {{-- mobile menu ends  --}}


        <section class="min-h-screen">
            @yield('content-wrapper')
        </section>

        <footer class="footer p-2 md:p-6">
           <div class="container mx-auto">
              <div class="block md:flex flex-wrap justify-evenly text-gray-400">
                  <div class="my-4">
                      <h4 class="font-bold">Support & Help</h4>
                      <div class="text-sm pt-2">
                        <ul>
                            <li><a href="/about#contact-us">Contact Us</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                            <li><a href="{{route('sitemap')}}">Sitemap</a></li>
                        </ul>
                      </div>
                  </div>

                  <div class="my-4 flex-grow-1">
                    <h4 class="font-bold">Get to know us</h4>
                    <div class="text-sm pt-2">
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
                      follow us on our social media platforms to get the latest updates from us.
                    </p>
                    <div class="flex items-center mt-3 flex-wrap">
                        <div class="font-bold">
                          facebook, twitter (hieworks Gh)
                        </div>
                    </div>
                  </div>
                </div>

              </div>
           </div>
           <div class=" text-gray-500">
               <a href="/">&copy; {{date('Y')}} | hieworks ltd.</a>
           </div>
        </footer>
      </main>
      <script src="{{ mix('/js/vendor.js') }}"></script>
      <script src="{{ mix('/js/activate_sw.js') }}"></script>
       @stack('app_js')
    </body>
    
</html>