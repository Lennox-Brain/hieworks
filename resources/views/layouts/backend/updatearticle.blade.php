@extends('layouts.backend.backmaster')

@prepend('app_css')
    <link rel="stylesheet" href="{{asset('assets/editor/skins/lightgray/skin.min.css')}}"/>
@endprepend

@section('content-wrapper')
   <div>
        
            <div class="dashboard_ bg-white min-h-screen">

              <div class="text-2xl text-blue-700 font-bold my-3 mx-4 text-center md:text-left">
                  Hieworks Portal
              </div>

              {{-- tabs --}}
                  <div class="dashboard-menu">
                      <ul class="flex flex-wrap text-gray-700">
                        <li>
                            <div class="py-3 px-2 mr-1 md:mr-2">
                              <a href="{{route('backend:account')}}" class="outline-none flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                                <span>ACCOUNT</span>
                              </a>
                            </div>
                        </li>

                        <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-2">
                              <a href="#" class="flex items-center outline-none">
                                <span>
                                  <svg fill="none" class="h-6 w-6 text-gray-600" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>                                </span>
                                <span>USERS</span>
                              </a>
                            </div>
                         </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-2">
                              <a href="#" class="flex items-center outline-none">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>                                
                                </span>
                                <span>JOBS</span>
                              </a>
                            </div>
                         </li>

                        
                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6 active-tab">
                              <a href="{{route('show:newArticle')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>                                </span>
                                <span>ARTICLES</span>
                              </a>
                            </div>
                         </li>

                         <li>
                             <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="#" class="flex items-center block">
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
                       
                        <div class="w-full">
                           <div class="bg-white p-4">

                                <div class="font-bold text-blue-700 text-xl flex justify-between">
                                    <div class="flex items-center">
                                        <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                                        Edit Article
                                    </div>
                                    <a href="{{route('show:newArticle')}}">
                                      <div class="flex items-center">
                                        <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path></svg>
                                        &nbsp;<span class="text">Back</span>
                                      </div>
                                    </a>
                                </div>

                                    <div class="notifications">
                                      @if($errors->has('creating_article_error'))
                                          
                                                <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert">
                                                    <strong class="font-bold mr-2 text-red-500">
                                                        <svg class="fill-current text-red-300 h-6 w-6 text-red-500 mr-4" viewBox="0 0 20 20">
                                                            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                                        </svg>                                
                                                    </strong>

                                                    <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{$errors->first('creating_article_error')}}</span>
                                                    <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                                        <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                                        </svg>
                                                    </span>
                                                </div>

                                          
                                      @endif 


                                      @if (session('new_article_success'))
                                            <div class="bg-teal-100 shadow border-teal-400 border-t-2 pl-2 pr-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert" x-cloak>
                                                <strong class="font-bold mr-2 text-gray-500">
                                                    <svg class="fill-current text-teal-400 h-6 w-6 text-gray-500 mr-4" viewBox="0 0 20 20">
                                                        <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                                    </svg>                                
                                                </strong>

                                                <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{session('new_article_success')}}</span>
                                                <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                                    <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                                    </svg>
                                                </span>
                                            </div>
                                      @endif
                                    </div>



                                <div>
                                    <form class="w-full" method="POST" action="{{route('backend:postUpdateArticle')}}">
                                        <div class="my-4">
                                            <label for="article_title" class="text-gray-600 font-semibold block">Title*</label>
                                            <input name="article_title" required maxlength="255" value="{{old('article_title', $article->article_title)}}" id="article_title" placeholder="Article Title" class="border bg-gray-100 w-full px-4 py-2 @error('article_title') border-red-400  @enderror">
                                            @error('article_title')
                                                <span class="text-red-400 text-sm font-semibold mt-4">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="my-3">
                                            <label for="article_category" class="text-gray-600 font-semibold block">Category*</label>
                                            
                                            <select class="input select @error('article_category') border-red-400  @enderror" id="article_category"  required name="article_category">
                                               <option value="{{$article->category->id}}">{{$article->category->category}}</option>
                                               @foreach($categories as $category)
                                                  <option value="{{$category->id}}">{{$category->category}}</option>
                                               @endforeach
                                            </select>

                                            @error('article_category')
                                                <span class="text-red-400 text-sm font-semibold mt-4">{{$message}}</span>
                                            @enderror
                                        </div>

                                      
                                        <div class="my-4">
                                            <label for="description" class="text-gray-600 font-semibold block">Description*</label>
                                            <textarea name="article_description" id="description" placeholder="Article Description" class="border bg-gray-100 w-full p-4 @error('article_description') border-red-400  @enderror" rows="12">{{old('article_description', $article->article_description)}}</textarea>
                                            @error('article_description')
                                                <span class="text-red-400 text-sm font-semibold mt-4">{{$message}}</span>
                                            @enderror
                                       </div>

                                       <div x-data="{featured:'{{$article->featured}}', modal:false}">
                                       
                                          <span role="button" class="text-gray-700 text-xs block font-bold flex items-center my-1" @click="modal = !modal">
                                              Feature post 
                                              <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 20 20">
                                                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                              </svg>
                                          </span>

                                          <div class="relative rounded-full w-12 h-6 transition duration-200 ease-linear"
                                          :class="[featured === '1' ? 'bg-green-400' : 'bg-gray-400']">
                                          <label for="featured"
                                              class="absolute left-0 bg-white border-2 mb-2 w-6 h-6 rounded-full transition transform duration-100 ease-linear cursor-pointer"
                                              :class="[featured === '1' ? 'translate-x-full border-green-400' : 'translate-x-0 border-gray-400']"></label>
                                          <input type="checkbox" {{($article->featured) ? 'checked': ''}} id="featured" name="featured" 
                                              class="appearance-none w-full h-full active:outline-none focus:outline-none"
                                              @click="featured === '0' ? featured = '1' : featured = '0'"/>
                                          </div>
                                          
                                          <div class="absolute bg-white z-50 shadow-lg border rounded-md -mt-6 p-2 ml-16 md:ml-24 text-xs text-gray-700 font-bold" x-show="modal" @click.away="modal = !modal">
                                                when checked, the article will be <br> displayed on <em>the featured</em> section
                                          </div>
                                          <div>
                                            <input type="hidden" value="{{ base64_encode($article->id) }}" name="_id">
                                          </div>
                                      </div>

                                        
                                        <div class="text-right my-3">
                                          <button type="submit" class="bg-purple-700 text-white px-4 py-1 rounded-full">save changes</button>
                                        </div>
                                        <div>
                                          @csrf
                                        </div>
                                    </form>
                                </div>
                           </div>

                           {{-- created articles  --}}
                          <div class="my-4">
                           
                            
                          </div>
                          {{-- created articles end  --}}

                        </div>

                        {{-- side bar begins  --}}
                        <aside class="w-full md:w-2/5 text-gray-700">
                          
                        </aside>
                      {{-- ends  --}}

                    </div>
                </section>

              </div>
                    
      </div>
  
@endsection

@prepend('app_js')
   {{-- <script src="{{ mix('/js/app_utils.js') }}" ></script> --}}
   <script src="{{ mix('/js/tinymce.min.js') }}"></script>
   <script src="{{ mix('/js/init.js') }}"></script>
@endprepend