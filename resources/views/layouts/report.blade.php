@extends('layouts.wireframe')

@section('page-title', 'Report Abuse | hieworks.com')
@section('page-description', 'Report Fraudulent Jobs')

@section('service-scripts')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0&appId=250776776263089&autoLogAppEvents=1"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
    
@endsection

@section('content-wrapper')


        <div class="container mx-auto px-2 sm:px-0">
            @include('partials.search')
            

          {{-- content  --}}
            <div class="my-8">
                <div class="job_ bg-white mx-auto py-4 block md:flex ">
                  
                    <div class="w-full md:w-3/6 mx-auto sm:p-4 shadow">
                        <div class="notifications">
                            @if ($errors->first('report_error'))
                                
                            <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert">
                                <strong class="font-bold mr-2 text-red-500">
                                    <svg class="fill-current text-red-300 h-6 w-6 mr-4" viewBox="0 0 20 20">
                                        <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                    </svg>                                
                                </strong>

                                <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{$errors->first('report_error')}}</span>
                                <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                    <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                    </svg>
                                </span>
                              </div>
                            
                            @endif
                        </div>

                            <div class="bg-purple-800 text-white">
                                <h1 class="px-3 py-2 font-bold flex items-center">
                                    <svg fill="none" stroke-linecap="round" class="w-5 h-5" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg> 
                                    Report Job Abuse
                                </h1>
                            </div>
                            <div class="border-b py-4 text-gray-600 px-1">
                                    Complete Form to Report Job Post
                            </div>
                            <div class="py-4">
                                <form method="POST" action="{{route('post:report')}}">
                                    <div class="flex flex-wrap md:flex-no-wrap justify-around">
                                        <div class="w-full md:w-3/5 px-3 my-1">
                                            <label class="text-gray-700 text-sm font-semibold block">Full Name*</label>
                                            <input type="text" value="{{old('fullname')}}" class="input @error('fullname') border border-red-400  @enderror" required name="fullname"  placeholder="Full name">
                                            @error('fullname')
                                                <span class="text-red-400 text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full md:w-3/5 px-3 my-1">
                                            <label class="text-gray-700 text-sm font-semibold block">Contact (Optional)</label>
                                            <input type="text" value="{{old('contact')}}" class="input  @error('contact') border border-red-400  @enderror"  name="contact" placeholder="000 0000 000">
                                            @error('contact')
                                                <span class="text-red-400 text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="my-3 px-3">
                                        <label class="text-gray-700 text-sm font-semibold block">Subject*</label>
                                        <select class="input select  @error('subject') border border-red-400  @enderror" required name="subject">
                                            @if (old('subject'))
                                                <option value="{{old('subject')}}">{{old('subject')}}</option>
                                            @endif
                                            <option value="">Select Option</option>
                                            <option value="Fraudulent">Fraudulent</option>
                                            <option value="Employer Asked For Money">Employer Asked For Money</option>
                                            <option value="No longer Available">No longer Available</option>
                                            <option value="Other Reasons">Other Reasons</option>
                                        </select>
                                          @error('subject')
                                                <span class="text-red-400 text-xs">{{$message}}</span>
                                          @enderror
                                    </div>
                                    <div>
                                        <input type="hidden" name="job_id" value="{{ base64_encode($job_id) }}">
                                    </div>

                                    <div class="my-3 px-3">
                                        <label class="text-gray-700 text-sm font-semibold block">Comment*</label>
                                        <textarea class="input @error('comment') border border-red-400  @enderror" name="comment" placeholder="300 Max Characters" required maxlength="300">{{old('comment')}}</textarea>
                                        @error('comment')
                                                <span class="text-red-400 text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                  
                                    <div class="flex justify-between my-3 px-3">
                                        <a href="{{URL::previous()}}" class=" bg-blue-800 text-white px-3 py-1 rounded">Go Back</a>
                                        <button type="submit" class=" bg-orange-600 text-white px-3 py-1 font-semibold rounded">Submit Report</button>
                                    </div>
                                    @csrf

                                </form>
                            </div>
                    </div>
                          
                </div>
                    
            </div>

            
           

        </div>
  
@endsection