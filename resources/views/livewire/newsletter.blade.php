<div class="newsletter px-3 lg:px-12 py-8 bg-white w-full lg:w-2/5 rounded" x-show.transition="isSeen" @click.away="isSeen =! isSeen">
    <div class="text-right">
          <button type="button" class="outline-none" @click="isSeen =! isSeen">
            <svg fill="none" class="w-6 h-6 text-blue-800 outline-none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
          </button>
    </div>
        <form method="POST" action="{{route('newsletter')}}" wire:submit.prevent="subscribe">
          <div class="my-2 font-semibold text-gray-600 text-lg">Get Alerts of Latest Job Updates</div>
            <div>
               <input type="email" class=" bg-gray-300 w-full rounded-full py-2 px-3 @error('email') border border-red-500  @enderror" placeholder="Enter valid email addr."  wire:model="email" name="email" value="{{old('email')}}">
            </div>
            <div class="text-sm font-semibold text-green-500 pb-3">
                @if (session('info'))
                  <div>{{session('info')}}</div>
                @endif
            </div>
            @error('email')
                <span class=" text-xs text-red-500 font-semibold">{{$message}}</span>
            @enderror
           
            <div class="text-center">
              <button type="submit"  class="bg-purple-800 text-white px-4 w-full rounded-full py-2" wire:target="subscribe"  wire:loading.attr="disabled">
                  <span wire:loading wire:target="subscribe">please wait...</span>
                  <span wire:loading.remove wire:target="subscribe">Subscribe</span>
              </button>
            </div>
            @csrf
        </form>
  </div>