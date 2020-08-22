@extends('layouts.wireframe')
    @section('page-title', 'Login - hieworks.com')
    @section('page-description', 'Login to your hieworks account and make unlimited job posts and manage your recruitment process.')


@prepend('app_css')

@endprepend

@section('content-wrapper')
   <div>
        <div class="page container mx-auto bg-white px-2 md:px-4 py-4 min-h-screen">
            <div class="p-2 md:p-10 md:w-3/5 mx-auto border">
                <div class="p-4 md:w-full lg:w-3/5 mx-auto">
                  <h1 class="text-blue-700 font-bold flex items-center align-middle">
                      <span>
                          <svg fill="none" class="h-8 w-8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
                          </svg>
                      </span>
                      <span>Signin</span>
                  </h1>
                  <form method="POST" action="{{route('auth')}}" class="pt-6 pb-2 my-2" x-data={toggle:0}>
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2 text-gray-600" for="email">
                            Email Address
                        </label>
                        <input class="appearance-none border rounded w-full py-1 px-3 text-gray-600" value="{{old('email')}}" id="email" type="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-bold mb-2 text-gray-600" for="password">
                            Password
                        </label>
                        <input name="password" value="{{old('password')}}" class="appearance-none border rounded w-full py-1 px-3 text-gray-600 mb-3" id="password" :type="toggle == 0 ? 'password': 'text'" placeholder="**** **** ****">
                    </div>

                    <div class="mb-6">
                        <div>
                            @if ($errors->any())
                          
                                @foreach ($errors->all() as $error)
                                    <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3  my-2 mx-auto flex justify-evenly" role="alert">
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


                    <div class="mb-6 flex items-center align-middle">
                       <div class="mr-2 text-gray-500">show password</div>
                       <div>
                          <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
                          :class="[toggle === '1' ? 'bg-green-400' : 'bg-gray-400']">
                          <label for="toggle"
                              class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
                              :class="[toggle === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
                          <input type="checkbox" id="toggle" name="toggle"
                              class="appearance-none w-full h-full active:outline-none focus:outline-none"
                              @click="toggle === '0' ? toggle = '1' : toggle = '0'"/>
                          </div>
                       </div>
                    </div>


                    <div class="block md:flex items-center justify-between">
                        <div>
                            <button class="bg-purple-700 hover:bg-purple-800 text-white py-1 px-4 rounded-full w-full outline-none" type="submit">
                                Sign In
                            </button>
                            @csrf
                         
                        </div>

                        <div class="mt-4 md:mt-0 text-blue-700">
                            <a href="{{route('forgotpassword')}}" class="no-underline">Forgot Password?</a>
                        </div>

                    </div>
                    <div class="text-sm mt-4 text-blue-700">
                        <a href="{{route('register')}}">don't have an account, sign up</a>
                    </div>
                </form>
                </div>
            </div>               
        </div>
   </div>
@endsection

@prepend('app_js')
  
@endprepend
