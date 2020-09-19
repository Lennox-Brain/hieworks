<div 
    class="
    {{ $attributes->merge(['class' => '']) }}
     shadow 
     border-t-2 text-red-dark pl-2 pr-1
     py-3 my-2 mx-auto flex justify-evenly
        @if($type == 'success')
            bg-teal-100  border-teal-400 
        @elseif($type == 'warning')
            bg-orange-400
        @elseif($type == 'error')
            bg-gray-100 border-red-400
        @endif
     "
     role="alert">
    <strong class="font-bold mr-2
       
        @if($type == 'success')
          text-teal-400
        @elseif($type == 'warning')
            
        @elseif($type == 'error')
            text-red-500
        @endif
     ">
        <svg 
          class="
          fill-current h-6 w-6 mr-4
            @if($type == 'success')
                
            @elseif($type == 'warning')
                
            @elseif($type == 'error')
                text-red-500
            @endif
           "
          viewBox="0 0 20 20">
            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"></path>
        </svg>                                
    </strong>

    <span class="block sm:inline text-sm font-semibold text-gray-700">{{$message}}</span>
    <span class="text-right" role="button" @click="$event.target.closest('div').style.display = 'none'">
        <svg class="h-6 w-6 text-gray-700 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title>
            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
        </svg>
    </span>
</div>