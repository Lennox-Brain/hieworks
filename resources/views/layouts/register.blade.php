@extends('layouts.wireframe')
    @section('page-title', 'Signup For an Account - hieworks.com')

@prepend('app_css')

@endprepend

@section('content-wrapper')
   <div>
        <div class="page container mx-auto px-2 bg-white sm:px-4 py-4 min-h-screen">
            <div class="block md:flex p-2 sm:p-10 sm:w-4/5 mx-auto">
                <div class="w-full md:w-2/5">
                  <img src="{{asset('/assets/icons/register.svg')}}" alt="registration illustration" class=" w-3/5 mx-auto md:w-4/5">
                  <h4 class=" text-center text-blue-700 text-xl m-3 font-bold">Why Signup for an account ?</h4>
                    <ul class="text-sm font-semibold text-gray-600">
                        <li>
                            <div class="bg-white border rounded-full my-3 p-3 flex items-center">
                                <span class="text-gray-400">
                                    <svg fill="none" stroke-linecap="round" class="h-8 w-8" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 17a5 5 0 01-.916-9.916 5.002 5.002 0 019.832 0A5.002 5.002 0 0116 17m-7-5l3-3m0 0l3 3m-3-3v12"></path>
                                    </svg>
                                </span>
                                <span>Make Unlimited Job Posts</span>
                            </div>
                        </li>

                        <li>
                            <div class="bg-white border rounded-full my-3 p-3 flex items-center">
                                <span class="text-gray-400">
                                    <svg fill="none" stroke-linecap="round" class="h-8 w-8" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                                    </svg>
                                </span>
                                <span>Track Employees Application</span>
                            </div>
                        </li>

                        <li>
                            <div class="bg-white border rounded-full my-3 p-3 flex items-center">
                                <span class="text-gray-400">
                                    <svg fill="none" class="h-8 w-8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                </span>
                                <span>Regular Notifications Insight</span>
                            </div>
                        </li>

                        <li>
                            <div class="bg-white border rounded-full my-3 p-3 flex items-center">
                                <span class="text-gray-400">
                                    <svg fill="none" stroke-linecap="round" class="h-8 w-8" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                                    </svg>
                                </span>
                                <span>Review Cv's and Cover Letters on the Go</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w-full md:w-3/5">
                       <div>
                           <div class="alerts">
                               <div>
                                    @if (session('info'))
                                        <div class="bg-teal-100 shadow border-teal-400 border-t-2 pl-2 pr-1 py-3 sm:w-4/5 my-2 mx-auto flex justify-evenly" role="alert">
                                            <strong class="font-bold mr-2 text-gray-500">
                                                <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-teal-500 mr-4" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            </strong>

                                            <span class="block sm:inline text-sm w-4/5 capitalize font-semibold text-gray-700">{{session('info')}} <a href="{{route('login')}}" class="outline-none bg-purple-800 text-white px-2 py-1 rounded-full">click to login</a></span>
                                            <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                                <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                                </svg>
                                            </span>
                                        </div>
                                    @endif
                                </div>

                                <div>
                                    @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3 sm:w-4/5 my-2 mx-auto flex justify-evenly" role="alert">
                                                    <strong class="font-bold mr-2 text-red-500">
                                                        <svg class="fill-current h-6 w-6 text-red-500 mr-4" viewBox="0 0 20 20">
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


                           </div>
                           <form method="POST" action="{{route('signup')}}" autocomplete="off">
                               <div class="block md:flex my-5 justify-center">
                                    <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                        <label class="text-gray-700 text-sm block" for="firstname">First name*</label>
                                        <input type="text" class="input" id="firstname" maxlength="100" name="firstname" required value="{{old('firstname')}}" placeholder="First name">
                                    </div>

                                    <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                        <label class="text-gray-700 text-sm block" for="lastname">Last name*</label>
                                        <input type="text" class="input" id="lastname" maxlength="100" name="lastname" required value="{{old('lastname')}}" placeholder="Last name">
                                    </div>
                               </div>

                               <div class="block md:flex justify-center my-5">
                                <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                    <label class="text-gray-700 text-sm block" for="email">Email*</label>
                                    <input type="text" class="input" id="email" maxlength="100" name="email" required value="{{old('email')}}" placeholder="example@example.com">
                                </div>

                                <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                    <label class="text-gray-700 text-sm block" for="contact">Contact*</label>
                                    <input type="text" class="input" id="contact" maxlength="14" name="contact" required value="{{old('contact')}}" placeholder="+233 000 00000">
                                </div>
                               </div>

                               <div class="block md:flex justify-center my-5">
                                <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                    <label class="text-gray-700 text-sm block" for="password">Password*</label>
                                    <input type="password" class="input" id="password" name="password" required value="{{old('password')}}" placeholder="**********">
                                </div>

                                <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                    <label class="text-gray-700 text-sm block" for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="input" id="password_confirmation" required value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="*********">
                                </div>
                               </div>

                               <div class="block md:flex justify-start my-5">
                                  <div class="w-full my-3 md:my-0 md:mx-5">
                                    <label class="text-gray-700 text-sm block" for="company">Company*</label>
                                    <input type="text" class="input" id="company" maxlength="100" name="company" required value="{{old('company')}}" placeholder="Google Inc.">
                                  </div>
                               </div>

                               <div class="block md:flex justify-start my-5">
                                  <div class="w-full my-3 md:my-0 md:mx-5">
                                    <label class="text-gray-700 text-sm block" for="company_summary">Company Summary*</label>
                                    <textarea class="input" name="company_summary" maxlength="500" required placeholder="summary information about your company or business">{{old('company_summary')}}</textarea>
                                </div>
                               </div>

                               <div class="block md:flex justify-start my-5">
                                  <div class="w-full my-3 md:my-0 md:mx-5">
                                    <button class="p-2 bg-purple-800 w-full text-white rounded-full" type="submit">Create Account</button>
                                  </div>
                                  @csrf
                               </div>

                               <div class="block md:flex justify-center my-5">
                                    <div class="my-3 md:my-0 md:mx-5 text-blue-800 text-center">
                                        <a href="{{route('login')}}" class="outline-none">have an account? Login</a>
                                    </div>
                               </div>


                           </form>
                       </div> 
                </div>

            </div>               
        </div>
   </div>
@endsection

@prepend('app_js')
  
@endprepend
