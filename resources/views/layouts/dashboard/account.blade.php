@extends('layouts.wireframe')

@section('content-wrapper')
   <div>
        
            <div class="dashboard_ bg-white min-h-screen">
              {{-- tabs --}}
                  <div class="dashboard-menu">
                      <ul class="flex flex-wrap text-gray-700">
                        <li>
                            <div class="py-3 px-2 mr-1 md:mr-2 active-tab">
                              <a href="{{route('user:account')}}" class="outline-none flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                                <span>ACCOUNT</span>
                              </a>
                            </div>
                        </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-2">
                              <a href="{{route('user:jobs')}}" class="flex items-center outline-none">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>                                
                                </span>
                                <span>JOBS</span>
                              </a>
                            </div>
                         </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('user:postjob')}}" class="flex items-center outline-none">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>                                
                                </span>
                                  <span>NEW JOB</span>
                              </a>
                            </div>
                         </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('user:notifications')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>                                
                                </span>
                                <span>NOTIFICATIONS</span>
                              </a>
                            </div>
                         </li>

                         <li>
                             <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('user:settings')}}" class="flex items-center block">
                                <span>
                                  <svg fill="none" stroke-linecap="round"  class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>                                
                                </span>
                                <span>SETTINGS</span>
                              </a>
                            </div>
                         </li>

                      </ul>
                  </div>
                  {{-- tabs ends  --}}
                
                <section class="container mx-auto bg-gray-100 min-h-screen mt-2 p-1 md:p-4">
                    <div class="w-full block md:flex">
                        <aside class="w-full md:w-1/5 text-gray-700">
                            <div class="flex mx-auto items-center justify-center border rounded-full w-24 h-24 bg-gray-400">
                              <svg fill="none" class="h-16 w-16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="mt-3">
                             <h3 class=" text-lg font-bold text-center">{{auth()->user()->company}}</h3>
                            </div>
                            <div class="text-sm font-bold mt-3 text-center">
                              Joined on {{auth()->user()->created_at->format('d-m-Y')}}
                            </div>
                        </aside>

                        <div class="w-full">
                              <div class="block md:flex">
                                
                                <div class="mt-5 bg-white shadow w-full md:w-2/5 md:mx-2 p-1 rounded-md h-32">
                                        <div class="items-center flex px-4 text-gray-600 pb-2 block md:flex border-b">
                                            <span class="font-bold text-blue-700">Total Jobs</span>
                                            <span class="text-right">
                                              <svg fill="none" stroke-linecap="round" class="h-8 w-8 md:h-10 md:w-10" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>                                    
                                            </span>
                                        </div>
                                        <div>
                                          <h2 class="text-lg text-gray-600 font-bold">{{$count_jobs}}</h2>
                                        </div>
                              
                                    </div>
                              
                                    <div class="mt-5 bg-white shadow w-full md:w-2/5 md:mx-2 p-1 rounded-md h-32 ">
                                        <div class="flex items-center px-4 pb-2 text-gray-600 block md:flex border-b">
                                            <span class="font-bold text-blue-700">New Notifications</span>
                                            <span>
                                              <svg fill="none" stroke-linecap="round"  class="h-8 w-8 md:h-10 md:w-10" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>                                    
                                            </span>
                                        </div>
                                        <div>
                                          <h2 class="text-lg text-gray-600 font-bold">0</h2>
                                        </div>
                                    </div>
                              
                                </div>

                                <div class="bg-white mt-4 w-full md:w-4/5 p-1 md:p-4 text-gray-700">
                                  <div class="flex items-center my-2">
                                     <span class="bg-pink-500 p-2 text-white rounded-full m-2">
                                      <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                                     </span>
                                     <span>{{auth()->user()->email}}</span>
                                  </div>

                                  <div class="flex items-center my-2">
                                     <span class="bg-blue-600 text-white p-2 rounded-full m-2">
                                      <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>                                     
                                    </span>
                                     <span>{{auth()->user()->contact}}</span>
                                  </div>

                                  <div class="flex items-center  my-2">
                                    <span class="bg-green-500 text-white p-2 rounded-full m-2">
                                      <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>                                   
                                    </span>
                                    <span>{{auth()->user()->firstname}}</span>
                                    <span class="mx-2">{{auth()->user()->lastname}}</span>
                                  </div>

                                  <div class="flex items-center my-2">
                                    <span class="bg-purple-600 p-2 text-white rounded-full m-2">
                                      <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    </span>
                                    <span class="mx-2">{{auth()->user()->company_summary}}</span>
                                  </div>


                                </div>

                        </div>

                    </div>
                </section>

              </div>
                    
      </div>
  
@endsection