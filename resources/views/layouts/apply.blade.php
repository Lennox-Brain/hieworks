@extends('layouts.wireframe')

@section('page-title', 'apply for job online '. date('M Y'). ' - hieworks.com')

@section('content-wrapper')
   <div>
        <div class="container mx-auto px-2 sm:px-0">
              @include('partials.search')

            
          {{-- content  --}}
            <div class="my-8">
                <div class="bg-white border  sm:w-3/5 mx-auto p-1 sm:p-2">
                        <h3 class="flex items-center">
                            <svg fill="none" class="h-8 w-8 text-gray-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <span class=" font-bold text-gray-700">apply online now</span>
                        </h3>

                        <div class="alerts">
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
                        </div>

                    <form method="POST" action="{{route('confirm:application')}}" autocomplete="off" enctype="multipart/form-data">
                        <div class="block md:flex my-5 justify-center">
                            <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                <label class="text-gray-700 text-sm block" for="firstname">First name*</label>
                                <input type="text" class="input" id="firstname" max="100" name="firstname" required value="{{old('firstname')}}" placeholder="First name">
                            </div>

                            <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                <label class="text-gray-700 text-sm block" for="lastname">Last name*</label>
                                <input type="text" class="input" id="lastname" max="100" name="lastname" required value="{{old('lastname')}}" placeholder="Last name">
                            </div>
                        </div>

                        <div class="block md:flex my-5 justify-center">
                            <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                <label class="text-gray-700 text-sm block" for="email">Email*</label>
                                <input type="text" class="input" id="email" max="100" name="email" required value="{{old('email')}}" placeholder="example@example">
                            </div>

                            <div class="w-full md:w-4/5 my-3 md:my-0 md:mx-5">
                                <label class="text-gray-700 text-sm block" for="contact">Contact*</label>
                                <input type="text" class="input" id="contact"  maxlength="10" name="contact" required value="{{old('contact')}}" placeholder="000 0000 000">
                            </div>
                        </div>

                        <div class="my-4 mx-2 flex flex-wrap justify-center items-center">
                            <label for="employee_cv" class="text-gray-300 text-sm bold block border rounded p-2 h-32 mx-auto text-center w-56 cursor-pointer">
                                <svg fill="none" stroke-linecap="round" class="h-12 w-12 mx-auto" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M8 17a5 5 0 01-.916-9.916 5.002 5.002 0 019.832 0A5.002 5.002 0 0116 17m-7-5l3-3m0 0l3 3m-3-3v12"></path>
                                </svg>
                                <span class="text-gray-300">click to upload cv</span>
                                <span class="block text-purple-400 status"></span>
                            </label>
                            <input type="file" id="employee_cv" accept=".doc,.docx,.pdf" name="employee_cv" class="input hidden" accept="image/*">
                        </div>

                        <div class="block sm:flex justify-start items-center" x-data="{toggle: '0'}">
                            <div class="my-4 mx-2  sm:w-48">
                                    <span class="text-gray-600 text-sm font-bold block">add cover letter</span>
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
                            @csrf
                            <input type="hidden" name="job_token" value="{{ base64_encode($job_id)}}">

                            <div class="my-4 mx-2  sm:w-1/2" x-show="toggle==1">
                                   {{-- <label class="text-gray-700 text-sm bold block" for="job_location">Expected Salary*</label> --}}
                                   <input type="file" class="input" name="cover_letter" accept=".doc,.docx,.pdf" value="{{old('cover_letter')}}" placeholder="GHS1000 or GHS1500 - GHS2000">
                            </div>
                         </div>
                         <div class="text-right">
                             <button type="submit" class="btn btn-primary">apply now</button>
                         </div>

                    </form>
                </div>
                    
            </div>
      
        </div>
   </div>
@endsection