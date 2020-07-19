@extends('layouts.wireframe')
    @section('page-title','Confirm account password reset- hieworks.com')

@prepend('app_css')

@endprepend

@section('content-wrapper')
   <div>
        <div class="page container mx-auto px-2 md:px-0 bg-white px-2 md:px-4 py-4 min-h-screen">
            <div class="p-2 md:p-10 md:w-3/5 mx-auto border">
                <div class="p-4 md:w-full lg:w-3/5 mx-auto">
                  <h4 class="text-gray-500 font-bold items-center">
            
                      <span>Confirm Password Reset</span>
                  </h4>
                  <form method="POST" action="{{route('reset:password')}}" class="pt-6 pb-2 my-2" x-data={toggle:0}>
                         @if (session('ResetStatus'))
                                <div class="bg-teal-100 shadow border-teal-400 border-t-2 px-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert">
                                    <strong>
                                        <svg class="fill-current text-teal-400 h-6 w-6 text-gray-500 mr-2" viewBox="0 0 20 20">
                                            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                        </svg>                                
                                    </strong>

                                    <span class="sm:inline text-sm font-semibold text-gray-700">{{session('ResetStatus')}}</span>
                                    <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                        <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                        </svg>
                                    </span>
                                </div>
                        @endif

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2 text-gray-600" for="password">
                            New Password
                        </label>
                        <input class="appearance-none border rounded w-full py-1 px-3 text-gray-600" id="password" type="password" value="{{old('password')}}" required name="password" placeholder="New Password">
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2 text-gray-600" for="password_confirmation">
                            Confrm Password
                        </label>
                        <input class="appearance-none border rounded w-full py-1 px-3 text-gray-600" id="password_confirmation" type="password" value="{{old('password_confirmation')}}" required name="password_confirmation" placeholder="Confirm Password ">
                    </div>

                    <div>
                        @csrf
                        <input type="hidden" name="_key" value="{{$user_id}}">
                    </div>
                   

                    <div class="mb-6">
                        <div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3  my-2 mx-auto flex justify-evenly" role="alert">
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
                    </div>


                    


                    <div>
                        <div class="text-right">
                            <button class="bg-purple-700 hover:bg-purple-800 text-white py-2 px-4 rounded-full w-full outline-none" type="submit">
                              confirm reset
                            </button>
                        </div>
                    </div>
                   
                </form>
                </div>
            </div>               
        </div>
   </div>
@endsection

@prepend('app_js')
  
@endprepend
