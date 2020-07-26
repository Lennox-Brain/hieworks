@extends('layouts.wireframe')
@prepend('app_css')
    <link rel="stylesheet" href="{{asset('assets/editor/skins/lightgray/skin.min.css')}}"/>
@endprepend

@section('page-title','Create new job post - hieworks.com')

@section('content-wrapper')
   <div>
       
        <div class="page container mx-auto px-2 sm:px-0 bg-white px-2 sm:px-4 py-4">
            
            <div class="flex flex-wrap">
                <div class="w-full sm:w-8/12">

                    <div x-data="{message: true}" x-cloak>

                        <h4 class="text-gray-600 text-center font-bold">Fill out form to complete job post</h4>
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

                        @if (session('postStatus'))
                                <div class="bg-teal-100 shadow border-teal-400 border-t-2 pl-2 pr-1 py-3 sm:w-4/5 my-2 mx-auto flex justify-evenly" role="alert" x-cloak>
                                    <strong class="font-bold mr-2 text-gray-500">
                                        <svg class="fill-current text-teal-400 h-6 w-6  mr-4" viewBox="0 0 20 20">
                                            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                        </svg>                                
                                    </strong>

                                    <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700 capitalize">{{session('postStatus')}}</span>
                                    <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                        <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                        </svg>
                                    </span>
                                </div>
                        @endif
                   

                          <div class="flex justify-center">
                                 <form method="POST" action="{{route('post:postjob')}}" class="border p-2 mt-4 w-full sm:w-4/5" x-data="utils()" enctype="multipart/form-data" id="postjobform">
                                    <div class="my-4 mx-2">
                                        <label class="text-gray-700 text-sm bold" for="job_title">Job title*</label>
                                        <input type="text" placeholder="enter job title" id="job_title" value="{{old('job_title')}}" required name="job_title" class="input">
                                    </div>

                                    <div class="block sm:flex justify-between flex-wrap">
                                        <div class="my-4 mx-2 sm:w-2/5">
                                            <label class="text-gray-700 text-sm bold block" for="job_category">Job Category*</label>
                                            <select class="input select" name="job_category" id="job_category" required>
                                                @if ( old('job_category') )
                                                   <option value="{{old('job_category')}}"> {{old('job_category')}}</option>
                                                   @else
                                                   <option value="">Job Category</option>
                                                @endif 
                                                @foreach ($job_categories as $category)
                                                    <option value="{{$category->title}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        
                                        
                                        <div class="my-4 mx-2 sm:w-2/5">
                                            <h4 class="text-gray-700 text-sm bold block">Job type*</h4>
                                            <span class="flex flex-wrap justify-between text-lg text-gray-600">
                                                <span class="inner-form-wrapper mx-2">
                                                    <input type="radio" name="job_type" {{( old('job_type') == 'full time') ? 'checked' : ''}} value="full time" id="full_time">
                                                    <label for="full_time" >Full time</label>
                                                </span>

                                                <span class="inner-form-wrapper mx-2">
                                                    <input type="radio" name="job_type" {{(old('job_type') == 'internship') ? 'checked' : ''}}  value="internship" id="internship">
                                                    <label for="internship">Internship</label>
                                                </span>

                                                <span class="inner-form-wrapper mx-2">
                                                    <input type="radio" name="job_type" {{(old('job_type') == 'part time') ? 'checked' : ''}}  value="part time" id="part_time">
                                                    <label for="part_time">Part time</label>
                                                </span>
                                                <span class="inner-form-wrapper mx-5 sm:mx-2 md:mx-0">
                                                    <input type="radio" name="job_type" {{(old('job_type') == 'contract') ? 'checked' : ''}}  value="contract" id="contract">
                                                    <label for="contract">contract</label>
                                                </span>
                                          
                                            </span>
                                        </div>
        
                                        
                                    </div>


                                    <div class="block sm:flex  flex-wrap justify-between">
                                        <div class="my-4 mx-2  sm:w-2/5">
                                            <label class="label" for="job_qualification">Qualification*</label>
                                            <select class="input select" name="job_qualification" id="job_qualification">
                                                @if ( old('job_qualification') )
                                                   <option value="{{old('job_qualification')}}"> {{old('job_qualification')}}</option>
                                                   @else
                                                   <option value="">Job qualification</option>
                                                @endif                                                
                                                <option value="Degree">Degree</option>
                                                <option value="Any qualification">Any qualification</option>
                                                <option value="MBA/MSC">MBA/MSC</option>
                                                <option value="MPhil/PhD">MPhil/PhD</option>
                                                <option value="HND">HND</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="High School">High School</option>
                                                <option value="Basic School">Basic School</option>
                                                <option value="No qualifications">No Qualification</option>
                                             </select>
                                        </div>
        
                                        <div class="my-4 mx-2  sm:w-1/2">
                                            <label class="text-gray-700 text-sm bold block" for="job_experience">Job Experience*</label>
                                            <select class="input select" name="job_experience" id="job_experience">
                                                @if ( old('job_experience') )
                                                   <option value="{{old('job_experience')}}"> {{old('job_experience')}}</option>
                                                   @else
                                                   <option value="">Job experience</option>
                                                @endif
                                                <option value="Any Level">Any level</option>
                                                <option value="Entry level">Entry level</option>
                                                <option value="Mid level">Mid level</option>
                                                <option value="Senior level">Senior level</option>
                                             </select>
                                        </div>
                                    </div>

                                    <div class="block sm:flex justify-start items-center" x-data="{toggle: '0'}">
                                        <div class="my-4 mx-2  sm:w-1/2">
                                                <span class="text-gray-700 text-sm bold block">Expected Salary</span>
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

                                        <div class="my-4 mx-2  sm:w-1/2" x-show="toggle==1">
                                               {{-- <label class="text-gray-700 text-sm bold block" for="job_location">Expected Salary*</label> --}}
                                               <input type="text" class="input" name="expected_salary" value="{{old('expected_salary')}}" placeholder="GHS1000 or GHS1500 - GHS2000">
                                        </div>
                                     </div>

                                    <div class="my-4 mx-2">
                                        <label class="text-gray-700 text-sm bold block" for="job_location">Job Location*</label>
                                            <select class="input select" name="job_location" id="job_location">
                                                @if ( old('job_location') )
                                                   <option value="{{old('job_location')}}"> {{old('job_location')}}</option>
                                                   @else  
                                                   <option value="">Select job location</option>
                                                @endif
                                              
                                                @foreach ($job_locations as $location)
                                                        <option value="{{$location}}">{{$location}}</option>
                                                @endforeach
                                            </select>
                                    </div>

                                    <div class="my-4 mx-2">
                                        <label class="text-gray-700 text-sm bold block" for="job_email">Job Email</label>
                                        <input type="email" placeholder="Enter job application email" name="job_email" value="{{old('job_email', auth()->user()->email)}}" id="job_email" class="input">
                                    </div>


                                    <div class="my-4 mx-2">
                                        <label class="text-gray-700 text-sm bold block" for="job_phone">Job Phone</label>
                                        <input type="text" placeholder="Enter job application contact" name="job_phone" value="{{old('job_phone', auth()->user()->contact)}}"  id="job_phone" class="input">
                                    </div>

                                    <div class="block sm:flex  flex-wrap justify-between">
                                        <div class="my-4 mx-2  sm:w-2/5">
                                            <label class="text-gray-700 text-sm bold block" for="job_company">Company Name</label>
                                            <input type="text" placeholder="Microsoft Inc." name="job_company" value="{{old('job_company', auth()->user()->company)}}"  id="job_company" class="input">
                                        </div>
        
                                        <div class="my-4 mx-2  sm:w-1/2">
                                            <label class="text-gray-700 text-sm bold block" for="application_url">Application url</label>
                                            <input type="text" placeholder="example.com/jobs/accountants-recruitment/3211." name="application_url" value="{{old('application_url')}}"  id="application_url" class="input">
                                        </div>
                                    </div>

                                    <div class="my-4 mx-2">
                                        <label class="text-gray-700 text-sm bold block" for="job_deadline">Deadline*</label>
                                        <input type="date" placeholder="Enter Job application email" name="job_deadline" id="job_deadline" min="{{date('Y-m-d')}}" value="{{old('job_deadline')}}" class="input datepicker-here">
                                    </div>

                                    <div class="my-4 mx-2">
                                        <label class="text-gray-700 text-sm bold block" for="description">Job Description*</label>
                                        <textarea placeholder="Full job description" rows="8" class="input text-left" name="job_description" id="description">{{old('job_description')}}</textarea>
                                    </div>
                                    <div>
                                        @csrf
                                        @method('POST')
                                    </div>
                                    
                                    <div class="my-4 mx-2  sm:w-1/2" x-data="{onsite:'1', modal:false}">
                                                <span role="button" class="text-gray-700 text-xs block font-bold flex items-center my-1" @click="modal = !modal">
                                                    Apply on hieworks 
                                                    <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                                <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
                                                :class="[onsite === '1' ? 'bg-green-400' : 'bg-gray-400']">
                                                <label for="onsite"
                                                    class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
                                                    :class="[onsite === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
                                                <input type="checkbox" checked id="onsite" name="onsite" 
                                                    class="appearance-none w-full h-full active:outline-none focus:outline-none"
                                                    @click="onsite === '0' ? onsite = '1' : onsite = '0'"/>
                                                </div>
                                                <div class="absolute bg-white z-50 shadow-lg border rounded-md -mt-6 p-2 ml-16 md:ml-24 text-xs text-gray-700 font-bold" x-show="modal" @click.away="modal = !modal">
                                                      when checked, applications will be <br> received into your <em>hieworks.com</em> account
                                                </div>
                                    </div>
                                   

                                    <div class="my-4 mx-2 flex flex-wrap justify-center items-center">
                                        <label for="company_logo" class="text-gray-300 text-sm bold block border rounded p-2 h-32 mx-auto text-center w-56 cursor-pointer">
                                              <svg fill="none" stroke-linecap="round" class="w-16 h-16 mx-auto" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                              </svg>
                                            <span class="text-gray-300">upload company logo</span>
                                            <span class="block text-purple-400 status"></span>
                                        </label>
                                        <input type="file" id="company_logo" name="company_logo" class="input hidden" accept="image/*">
                                    </div>
                                   
                                    <div class="my-4 mx-2 text-right">
                                            <button class="btn btn-primary">Publish</button>
                                    </div>

                                   
                            </form>
                          </div>                      


                    </div>
                </div>

               
                <div class="w-full sm:w-1/3 p-0 mt-3 sm:mt-8">
                        <div class="border p-4">
                            <h3>Summary</h3>
                            <div>
                                <strong class="text-gray-600"> Your Total is</strong> GHS 0.00 (Free)
                                <span class="px-3 py-2 bg-purple-800 w-full mt-2 text-white text-bold block"></span>
                            </div>
                        </div>
                </div>
            </div>           
        </div>
   </div>
@endsection

@prepend('app_js')
   <script src="{{ mix('/js/app_utils.js') }}" ></script>
   <script src="{{ mix('/js/tinymce.min.js') }}"></script>
   <script src="{{ mix('/js/init.js') }}"></script>
   <script src="{{ mix('/js/app.js') }}"></script>
@endprepend
