@extends('layouts.wireframe')

@section('content-wrapper')
   <div>
        
            <div class="dashboard_ bg-white min-h-screen">
              {{-- tabs --}}
                  <div class="dashboard-menu">
                      <ul class="flex flex-wrap text-gray-700">
                        <li>
                            <div class="py-3 px-2 mr-1 md:mr-2">
                              <a href="{{route('user:account')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                                <span>ACCOUNT</span>
                              </a>
                            </div>
                        </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-2">
                              <a href="{{route('user:jobs')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>                                
                                </span>
                                <span>JOBS</span>
                              </a>
                            </div>
                         </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('user:postjob')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>                                
                                </span>
                                  <span>NEW JOB</span>
                              </a>
                            </div>
                         </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6 active-tab">
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
                  <div class="m-4">
                    <h3 class="text-gray-700 font-bold">Your Current Notifications</h3>
                  </div>
                    <div class="w-full block md:flex">
                        <div class="w-full md:w-5/5 mx-auto overflow-x-auto">
                            <div class="text-center p-6 text-gray-500">
                                <div class="w-1/2 mx-auto flex items-center justify-center">
                                <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="empty jobs">
                                </div>
                                <div>
                                    <h4>You have no notification</h4>
                                </div>
                            </div>
                             
                        </div>

                    </div>
                </section>

              </div>
                    
      </div>
  
@endsection