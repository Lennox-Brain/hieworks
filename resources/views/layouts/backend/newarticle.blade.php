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
                              <a href="#" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round"  class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>                                
                                </span>
                                <span>SETTINGS</span>
                              </a>
                            </div>
                         </li>

                           <li>
                             <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('backend:reports')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>                                </span>
                                <span>REPORTS</span>
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

                                <div class=" font-bold text-blue-700 text-xl flex items-center">
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                                  Compose Article
                                </div>

                                    <div class="notifications">
                                      @if($errors->has('creating_article_error'))
                                          
                                                <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert">
                                                    <strong class="font-bold mr-2 text-red-500">
                                                        <svg class="fill-current h-6 w-6 text-red-500 mr-4" viewBox="0 0 20 20">
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
                                                    <svg class="fill-current text-teal-400 h-6 w-6  mr-4" viewBox="0 0 20 20">
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
                                    <form class="w-full" method="POST" action="{{route('backend:postArticle')}}">
                                        <div class="my-4">
                                            <label for="article_title" class="text-gray-600 font-semibold block">Title*</label>
                                            <input name="article_title" required maxlength="255" value="{{old('article_title')}}" id="article_title" placeholder="Article Title" class="border bg-gray-100 w-full px-4 py-2 @error('article_title') border-red-400  @enderror">
                                            @error('article_title')
                                                <span class="text-red-400 text-sm font-semibold mt-4">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="my-3">
                                            <label for="article_category" class="text-gray-600 font-semibold block">Category*</label>
                                            <select class="input select @error('article_category') border-red-400  @enderror" id="article_category"  required name="article_category">
                                               <option value="">select category</option>
                                               @foreach ($categories as $category)
                                                  <option value="{{$category->id}}">{{$category->category}}</option>
                                               @endforeach
                                            </select>

                                            @error('article_category')
                                                <span class="text-red-400 text-sm font-semibold mt-4">{{$message}}</span>
                                            @enderror
                                        </div>

                                      
                                        <div class="my-4">
                                            <label for="description" class="text-gray-600 font-semibold block">Description*</label>
                                            <textarea name="article_description" id="description" placeholder="Article Description" class="border bg-gray-100 w-full p-4 @error('article_description') border-red-400  @enderror"" rows="12">{{old('article_description')}}</textarea>
                                            @error('article_description')
                                                <span class="text-red-400 text-sm font-semibold mt-4">{{$message}}</span>
                                            @enderror
                                       </div>

                                       <div x-data="{featured:'0', modal:false}">
                                       
                                          <span role="button" class="text-gray-700 text-xs font-bold flex items-center my-1" @click="modal = !modal">
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
                                          <input type="checkbox" id="featured" name="featured" 
                                              class="appearance-none w-full h-full active:outline-none focus:outline-none"
                                              @click="featured === '0' ? featured = '1' : featured = '0'"/>
                                          </div>
                                          <div class="absolute bg-white z-50 shadow-lg border rounded-md -mt-6 p-2 ml-16 md:ml-24 text-xs text-gray-700 font-bold" x-show="modal" @click.away="modal = !modal">
                                                when checked, the article will be <br> displayed on <em>the featured</em> section
                                          </div>
                                      </div>

                                        
                                        <div class="text-right my-3">
                                          <button type="submit" class="bg-purple-700 text-white px-4 py-1 rounded-full">publish article</button>
                                        </div>
                                        <div>
                                          @csrf
                                        </div>
                                    </form>
                                </div>
                           </div>

                           {{-- created articles  --}}
                          <div class="my-4">
                           
                             @forelse ($articles as $article)
                                 <div class="block md:flex items-center bg-white text-gray-700 text-sm p-3 border my-2">
                                    {{-- <div class="w-32 overflow-hidden">thumbnail</div> --}}
                                    <div>
                                      <div class="my-3 font-bold text-blue-700">
                                        {{$article->article_title}}
                                      </div>
                                     
                                     
                                      <div class="article_description">
                                        {!! substr($article->article_description, 0, 300) !!} 
                                        
                                        <br><a href="{{route('bloginfo', ['title' => Str::slug($article->article_title, '-'),'id' => base64_encode($article->id)])}}" class="read-more text-blue-700">read more...</a>
                                      </div>
                                     
                                      <div class="text-right my-2 flex items-center flex-wrap justify-around">
                                       
                                            <span class="text-orange-500 text-xs font-bold">{{read_time($article->article_description)}}</span>
                                            <span class="text-teal-500 text-xs font-bold">{{($article->views)}}</span>
                                            @if($article->featured)
                                               <span class="text-sm font-semibold bg-orange-300 text-orange-600 px-4 py-1 rounded-full mx-4">featured</span>
                                            @endif
                                            <span class=" text-sm px-4 py-1 text-gray-500 font-semibold rounded-full">{{ $article->category->category }}</span>
                                            <span class=" text-sm px-4 py-1 bg-teal-400 font-semibold text-teal-700 rounded-full"><a href="{{route('backend:updateArticle', ['id' => base64_encode($article->id)])}}">Edit</a></span>
                                            <span class=" text-sm px-4 py-1 bg-red-300 text-red-700 font-semibold rounded-full"><a href="{{route('backend:deleteArticle', ['id' => base64_encode($article->id)])}}">Delete</a></span>
                                            <span class=" text-sm px-4 py-1 text-gray-500 rounded-full">{{ $article->created_at->diffForHumans() }}</span>
 
                                      </div>
                                    </div>
                                 </div>
                             @empty
                                 
                             @endforelse
                             <div class="text-center">
                                  {{$articles->links()}}
                             </div>
                          </div>
                          {{-- created articles end  --}}

                        </div>

                        {{-- side bar begins  --}}
                        <aside class="w-full md:w-2/5 text-gray-700">
                          <div class="bg-white sm:ml-3 p-3">
                            
                              <div class="notifications">
                                @if (session('new_category_success'))
                                    <div class="bg-teal-100 shadow border-teal-400 border-t-2 pl-2 pr-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert" x-cloak>
                                        <strong class="font-bold mr-2 text-gray-500">
                                            <svg class="fill-current text-teal-400 h-6 w-6 mr-4" viewBox="0 0 20 20">
                                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                            </svg>                                
                                        </strong>

                                        <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{session('new_category_success')}}</span>
                                        <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                            <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                            </svg>
                                        </span>
                                    </div>
                                @endif

                                @if ($errors->has('creating_category_error'))
                                      <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert">
                                        <strong class="font-bold mr-2 text-red-500">
                                            <svg class="fill-current text-red-300 h-6 w-6 mr-4" viewBox="0 0 20 20">
                                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                            </svg>                                
                                        </strong>

                                        <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{$errors->first('creating_category_error')}}</span>
                                        <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                            <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                            </svg>
                                        </span>
                                      </div>
                                @endif

                              </div>




                                 <form method="POST" action="{{route('backend:newArticleCategory')}}">
                                    <div class="my-4 text-center">
                                      <input type="text" name="new_category" value="{{old('new_category')}}" required class="bg-gray-200 px-3 py-2 rounded-full w-full @error('new_category') border border-red-400  @enderror" maxlength="200" placeholder="category name">
                                        @error('new_category')
                                          <span class="text-red-400 text-sm font-semibold mt-4">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="my-4 text-center">
                                      <button type="submit" class="bg-purple-700 py-2 px-4 mx-auto rounded-full text-white flex items-center justify-around text-sm font-bold">add category &nbsp;
                                          <svg fill="none" stroke-linecap="round" class="h-5 w-5" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 4v16m8-8H4"></path></svg>
                                      </button>
                                    </div>
                                    @csrf
                                 </form>
                              </div>

                              <div class="border my-4 border-dashed"></div>
                             
                              <div class="sm:ml-3 overflow-y-auto" style="height: 60vh">
                                <div>
                                  <div class="text-blue-700 font-bold text-xl">Categories</div>
                                </div>
                                <div>
                                  <div class="my-6">
                                     @error('category_title')
                                                <span class="text-xs font-semibold text-red-500 italic">{{$message}}</span>
                                     @enderror
                                  </div>
                                   @forelse ($categories as $category)
                                       <div class="bg-white my-4 py-4 px-2 rounded shadow text-blue-600 font-semibold" x-data="{active:false}">
                                          <div x-show="!active">{{$category->category}}</div>
                                          <div x-show="active">
                                            <form method="POST" action="{{route('backend:updateCategory')}}">
                                              <div class="my-2">
                                                 <input type="text" class="px-3 py-1 bg-gray-200" name="category_title" value="{{$category->category}}">
                                                 <input type="hidden" name="id" value="{{base64_encode($category->id)}}">
                                                 <button class=" px-3 py-1 bg-orange-600 text-white">save</button>
                                              </div>
                                              @csrf
                                            </form>
                                           
                                          </div>

                                          <div class="option flex justify-evenly">
                                            
                                            <div role="button" @click="active = !active">
                                              <svg fill="none" stroke-linecap="round" class="h-5 w-5 text-purple-800" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                            </div>

                                            <div>
                                              <a href="{{route('delete_category', ['id' => base64_encode($category->id)])}}">
                                                <svg fill="none" stroke-linecap="round" class="h-5 w-5 text-red-500" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                              </a>
                                            </div>
                                         </div>
                                         <div class="text-sm text-gray-400 text-right">{{$category->created_at->diffForHumans()}}</div>
                                       </div>
                                   @empty
                                       
                                   @endforelse
                                </div>
                             </div>


                          </div>
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