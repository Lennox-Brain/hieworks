<div class="container mx-auto px-2 sm:px-0 my-4 py-3">
    <div class="search-container">
         <form method="GET" action="{{route('search')}}" class="flex justify-center">
            <input type="text" class="bg-gray-200 rounded-l-md w-full sm:w-1/3 p-2 focus:bg-white border" name="q" placeholder="Job title, type or category ">
            <button class="bg-purple-800 text-white p-2 rounded-r-md focus:outline-none">
               <svg fill="none" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-8" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
               </svg>
                </button>
         </form>
</div>
</div>