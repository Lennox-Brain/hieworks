@extends('layouts.wireframe')

@section('content-wrapper')
   <div>
        
            <div class="dashboard_ bg-white min-h-screen">
              {{-- tabs --}}
                  <div class="dashboard-menu">
                      <ul class="flex flex-wrap text-gray-700">
                        <li>
                            <div class="py-3 px-2 mr-1 md:mr-2">
                              <a href="{{route('user:account')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </span>
                                <span>ACCOUNT</span>
                              </a>
                            </div>
                        </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-2 active-tab">
                              <a href="{{route('user:jobs')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>                                
                                </span>
                                <span>JOBS</span>
                              </a>
                            </div>
                         </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('user:postjob')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>                                
                                </span>
                                  <span>NEW JOB</span>
                              </a>
                            </div>
                         </li>

                         <li>
                            <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('user:notifications')}}" class="flex items-center">
                                <span>
                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6 text-gray-600" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>                                
                                </span>
                                <span>NOTIFICATIONS</span>
                              </a>
                            </div>
                         </li>

                         <li>
                             <div class="bg-white py-3 px-2 mr-3 md:mr-6">
                              <a href="{{route('user:settings')}}" class="flex items-center block">
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
                  <div class="m-4">
                    <h3 class="text-gray-700 font-bold">Your Current Job Listings</h3>
                  </div>
                    <div class="w-full block md:flex">
                        <div class="w-full md:w-5/5 mx-auto overflow-x-auto">
                              <table class="w-full">
                             
                                        <thead class="font-bold bg-purple-800 text-white">
                                            <tr>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 uppercase tracking-wider">
                                                        Job Id
                                                </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 uppercase tracking-wider">
                                                        Title
                                                </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 uppercase tracking-wider">
                                                        Category
                                                </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 uppercase tracking-wider">
                                                        Experience
                                                </th>
                                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-sm leading-4 uppercase tracking-wider">
                                                        action
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="bg-white text-gray-600 font-bold">
                                               @forelse ($userjobs as $job)
                                                    <tr class="hover:bg-gray-200">
                                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <div class="text-sm leading-5">{{$job->job_id}}</div>
                                                       </td>

                                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <div class="text-sm leading-5">{{$job->job_title}}</div>
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <div class="text-sm leading-5">{{$job->job_category}}</div>
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <div class="text-sm leading-5">{{$job->job_experience}}</div>
                                                        </td>


                                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                            <div class="text-sm leading-5 text-gray-600 text-center flex justify-between">
                                                                <a href="{{route('edit:job', ['id'=> base64_encode($job->id)])}}" class="hover:text-gray-700" title="edit job post">
                                                                    <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                                    </svg>
                                                                </a>

                                                                <a href="{{route('user:applications', ['id'=>base64_encode($job->id), 'job_title'=> Str::slug($job->job_title, '-') ]) }}" title="applications" class="hover:text-gray-700">
                                                                  <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>                                                                </a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                               @empty
                                                    <tr>
                                                       <td colspan="5">
                                                            <div class="text-center p-6 text-gray-500">
                                                                <div class="w-1/2 mx-auto flex items-center justify-center">
                                                                <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="empty jobs">
                                                                </div>
                                                                <div>
                                                                    <h4>No Post Found</h4>
                                                                </div>
                                                            </div>
                                                       </td>
                                                   </tr>
                                               @endforelse
                                        </tbody>

                              </table>
                              <div class="pagination-container my-3">
                                    {{$userjobs->links()}}
                              </div>
                        </div>

                    </div>
                </section>

              </div>
                    
      </div>
  
@endsection