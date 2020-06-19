@if ($paginator->hasPages())
    <nav>
        <ul class="pagination flex items-center justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled bg-purple-600 px-3 py-1 text-white mx-8" style="cursor:not-allowed" aria-disabled="true">
                <span>
                    <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                </span>
                </li>
            @else
                <li class="mx-8 bg-purple-800 text-white px-3 py-1">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <svg fill="none" stroke-linecap="round" class="h-6 w-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                </a>
              </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="mx-8 bg-purple-800 text-white px-3 py-1">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <svg fill="none" stroke-linecap="round" class="w-6 h-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </li>
            @else
                <li class="disabled bg-purple-600 px-3 py-1 text-white mx-8" style="cursor:not-allowed" aria-disabled="true">
                  <span>
                    <svg fill="none" stroke-linecap="round" class="w-6 h-6" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                  </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
