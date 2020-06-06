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
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                                <span>ACCOUNT</span>
                              </a>
                            </div>
                        </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-2">
                              <a href="{{route('user:jobs')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>                                
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
                             <div class="bg-white py-3 px-2 mr-3 md:mr-6 active-tab">
                              <a href="{{route('user:settings')}}" class="flex items-center block">
                                <span>
                                  <svg fill="none" stroke-linecap="round"  class="h-6 w-6" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>                                
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
                        <div class="w-full bg-white md:w-3/5 mx-auto overflow-x-auto border p-2 md:p-4">
                              <div>
                                <div class="my-3 py-2">
                                   <h3 class="text-gray-700 font-bold flex items-center">
                                    <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                      <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Make account changes
                                  </h3>
                                </div>

                                <div class="notifications">
                                    <div>
                                          @if ($errors->any())
                                                  @foreach ($errors->all() as $error)
                                                      <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3 sm:w-4/5 my-2 mx-auto flex justify-evenly" role="alert">
                                                          <strong class="font-bold mr-2 text-red-500">
                                                              <svg class="fill-current text-red-300 h-6 w-6 text-red-500 mr-4" viewBox="0 0 20 20">
                                                                  <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                                              </svg>                                
                                                          </strong>

                                                          <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{$error}}</span>
                                                          <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                                              <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                                  <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                                              </svg>
                                                          </span>
                                                      </div>

                                                  @endforeach
                                          @endif
                                    </div>

                                    <div>
                                        @if (session('info'))
                                        <div class="bg-teal-100 shadow border-teal-400 border-t-2 pl-2 pr-1 py-3 sm:w-4/5 my-2 mx-auto flex justify-evenly" role="alert">
                                            <strong class="font-bold mr-2 text-gray-500">
                                                <svg class="fill-current text-teal-400 h-6 w-6 text-gray-500 mr-4" viewBox="0 0 20 20">
                                                    <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                                </svg>                                
                                            </strong>

                                            <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{session('info')}}</span>
                                            <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                                <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                                </svg>
                                            </span>
                                        </div>
                                    @endif

                                    </div>

                                </div>


                                <form  method="POST" action="{{route('post:settings')}}" role="form">
                                   <div class="block md:flex flex-wrap justify-around my-2">
                                        <div class="w-full md:w-2/5 my-2">
                                            <label class="label" for="firstname">Firstname</label>
                                            <input type="text" name="firstname" value="{{auth()->user()->firstname}}" id="firstname" class="input">
                                        </div>
                                       
                                        <div  class="w-full md:w-2/5 my-2">
                                            <label class="label" for="lastname">Lastname</label>
                                            <input type="text" name="lastname" id="lastname" value="{{auth()->user()->lastname}}" class="input">
                                        </div>
                                   </div>

                                   <div class="block md:flex flex-wrap justify-around my-2">
                                        <div class="w-full md:w-2/5 my-2 my-2">
                                            <label class="label" for="email">Email</label>
                                            <input type="text" name="email" id="email" value="{{auth()->user()->email}}" class="input">
                                        </div>
                                       
                                        <div  class="w-full md:w-2/5 my-2">
                                            <label class="label" for="contact">Contact</label>
                                            <input type="text" name="contact" id="contact" value="{{auth()->user()->contact}}" class="input">
                                        </div>
                                   </div>

                                   <div class="block md:flex flex-wrap justify-around my-2">
                                        <div class="w-full md:w-2/5 my-2">
                                            <label class="label" for="current_password">Current Password</label>
                                            <input type="text" name="current_password" id="current_password" class="input">
                                        </div>
                                       
                                        <div  class="w-full md:w-2/5 my-2">
                                            <label class="label" for="new_password">New Password</label>
                                            <input type="text" name="new_password"  id="new_password" class="input">
                                        </div>
                                   </div>


                                   <div class="md:mx-10 my-2">
                                        <label class="label" for="company">Company</label>
                                        <input type="text" name="company" id="company" value="{{auth()->user()->company}}" class="input">
                                   </div>


                                   <div class="md:mx-10 my-2">
                                        <label class="label" for="company_summary">Company Summary</label>
                                        <textarea class="input" name="company_summary" id="company_summary">{{auth()->user()->company_summary}}</textarea>
                                   </div>
                                      @csrf
                                   <div class="md:mx-10 my-2" x-data="{application_mail: '{{auth()->user()->application_notice}}' }">
                                        <span class="text-gray-700 text-sm bold block">Receive email on new application</span>
                                        <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
                                        :class="[application_mail == '1' ? 'bg-green-400' : 'bg-gray-400']">
                                        <label for="application_mail"
                                            class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
                                            :class="[application_mail == '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
                                        <input type="checkbox" id="application_mail" name="application_mail"  :checked="application_mail == '0' ? false : true"
                                            class="appearance-none w-full h-full active:outline-none focus:outline-none"
                                            @click="application_mail == '0' ? application_mail = '1' : application_mail = '0'"/>
                                        </div>
                                   </div>

                                    <div class="md:mx-10 my-2 text-right my-2">
                                      <button class="btn btn-primary" type="submit" role="button">save changes</button>
                                    </div>

                                </form>
                              </div>                            
                        </div>

                    </div>
                </section>

              </div>
                    
      </div>
  
@endsection