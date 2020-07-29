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
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6">
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
                             <div class="bg-white py-3 px-2 mr-3 md:mr-6 active-tab">
                              <a href="{{route('show:jobcategories')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>                                
                                </span>
                                <span>CATEGORIES</span>
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
                   
                  <h1 class="text-xl text-blue-800 font-semibold my-3">Created Job Categories</h1>
                  <div class="w-full block md:flex">
                       <div class="w-full lg:w-3/5 bg-white">
                         <div class="w-full mx-auto overflow-x-auto">
                            <table class="table w-full">
                              <thead class="font-bold bg-gray-600 text-white">
                                <tr>
                                  <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 uppercase tracking-wider">
                                      Category Title
                                  </th>
                                  <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 uppercase tracking-wider">
                                      Category Slug
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                   @forelse ($jobCategories as $category)
                                   <tr class="hover:bg-gray-200 text-gray-600 font-semibold" x-data="{editing:false}" @dblclick="editing = !editing">
                                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                          <div x-show="!editing" class="text-sm leading-5">{{$category->title}}</div>
                                         <div class="w-full">
                                            <form x-show="editing" method="POST" action="{{route('update:jobcategory', ['id'=>base64_encode($category->id)])}}">
                                                <input value="{{$category->title, old('edit_jobcategory')}}" name="edit_jobcategory" class="w-full input text-blue-800">
                                                <div class="my-2 text-right">
                                                  <button type="submit" class="outline-none px-2 py-1 bg-blue-700 text-white rounded text-xs lg:text-base">Update</button>
                                                </div>
                                                @csrf
                                            </form>
                                         </div>
                                      </td>

                                      <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                          <div class="text-sm leading-5" x-show="!editing">{{$category->slug}}</div>
                                          <div x-show="editing">
                                            <a href="{{route('delete:jobcategory',['id'=> base64_encode($category->id)])}}" class="flex items-center w-24 justify-center outline-none px-2 py-1 bg-red-500 text-white rounded text-xs lg:text-base capitalize">
                                               <svg fill="currentColor" class="w-6 h-6" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                              Delete
                                            </a>
                                          </div>
                                      </td>
                                   </tr>
                                   @empty
                                       
                                   @endforelse
                              </tbody>
                            </table>
                            <div class="py-3">
                              {{$jobCategories->links()}}
                            </div>
                         </div>
                      </div>
                       <aside class="w-full lg:w-2/5 px-3 bg-white shadow h-48">
                          <div class="px-3 py-6">
                            <h2 class="text-blue-800 font-semibold text-xl">Add New Job Category</h2>

                            <div class="notifications">
                               @if($errors->has('newjob_category_error'))
                                          
                                                <div class="bg-gray-100 shadow border-red-400 border-t-2 text-red-dark pl-2 pr-1 py-3 w-full my-2 mx-auto flex justify-evenly" role="alert">
                                                    <strong class="font-bold mr-2 text-red-500">
                                                        <svg class="fill-current h-6 w-6 text-red-500 mr-4" viewBox="0 0 20 20">
                                                            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
                                                        </svg>                                
                                                    </strong>

                                                    <span class="block sm:inline text-sm w-4/5 font-semibold text-gray-700">{{$errors->first('newjob_category_error')}}</span>
                                                    <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
                                                        <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
                                                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                                                        </svg>
                                                    </span>
                                                </div>

                                          
                                      @endif 
                            </div>

                            <form class="w-full my-4" method="POST" action="{{route('add:jobcategory')}}">
                              
                              <div class="my-2">
                                <input type="text" class="input @error('category_title') border-red-400  @enderror" name="category_title" value="{{old('category_title')}}" placeholder="Category Name">
                                  @error('category_title')
                                      <span class="text-red-400 text-xs font-semibold">{{$message}}</span>
                                  @enderror
                              </div>
                              <div class="my-2 text-right">
                                <button class="px-3 py-1 bg-purple-700 text-white rounded">Submit</button>
                              </div>
                              @csrf
                            </form>
                          </div>
                       </aside>
                  </div>
                </section>

              </div>
                    
      </div>
  
@endsection

@prepend('app_js')

@endprepend