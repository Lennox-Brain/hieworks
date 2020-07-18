@extends('layouts.backend.backmaster')

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
                    <div class="w-full">
                       <div class="w-full md:w-5/6 mx-auto bg-blue-100 md:px-4">
                        <h1 class="text-xl uppercase my-4 text-blue-800 font-bold py-3">Job Reports</h1>
                            
                            @forelse ($reports as $report)
                                <div class="my-8 shadow py-4 px-2 text-gray-700 text-sm md:text-base" x-data="{visible:false}">
                                    <div>
                                        <h3 class="text-blue-700 font-bold">{{$report->subject}}</h3>
                                    </div>
                                    <div class="flex flex-wrap justify-between">
                                        <div>
                                            {{$report->fullname}}
                                        </div>
                                        <div class="flex flex-col text-xs text-gray-600 font-semibold">
                                            <span>{{$report->contact?? 'confidential'}}</span>
                                            <span>{{$report->created_at->diffForHumans()}}</span>
                                            <span>{{$report->job->status ? 'Active' : 'Inactive'}}</span>
                                        </div>
                                    </div>

                                    <div class="flex justify-between">
                                        <div>
                                            {{$report->job->job_title}}
                                        </div>
                                        <div class="mt-2">
                                            {{$report->job->job_id}}
                                            <button class="bg-blue-700 text-white px-3 py-1 rounded text-xs" @click="visible = !visible"><template x-if="visible"><div>Hide</div></template><template x-if="!visible"><div>View</div></template></button>
                                        </div>
                                    </div>

                                    <div x-show="visible">
                                            <p class="bg-gray-300 p-2 my-2">{{$report->comment}}</p>
                                            <div class="my-3 flex">
                                                <a href="{{route('suspend:job', ['id' => base64_encode($report->job->id)]) }}" class="bg-red-200 px-2 py-1 rounded font-semibold text-sm text-red-500 m-3">Suspend</a>
                                                <a href="{{route('jobinfo', ['title'=>Str::slug($report->job->job_title,'-'), 'id'=> base64_encode($report->job->id)])}}" class="bg-green-300 px-2 text-sm py-1 rounded text-green-700 font-semibold m-3">View Job</a>
                                            </div>
                                    </div>
                                </div>
                            @empty
                                 <div class="text-center p-6 text-gray-500">
                                    <div class="w-1/2 mx-auto flex items-center justify-center">
                                      <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="empty jobs">
                                    </div>
                                    <div>
                                        <h4>No Report Found</h4>
                                    </div>
                                </div>

                            @endforelse
                       </div>
                       
                       <div>
                           {{$reports->links()}}
                       </div>

                    </div>
                </section>

              </div>
                    
      </div>
  
@endsection