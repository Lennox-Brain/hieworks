@extends('layouts.wireframe')

@section('page-title', 'Latest Blog Posts '. date('Y'). ' - Hieworks')
@section('page-description', 'Latest Jobs in Ghana recruitments and vacancies website with information in career tips, hr services and employment opportunities.')


@section('content-wrapper')
   <div>
     
        <div class="my-4 border bg-gray-200">
            <div class="container mx-auto p-12">
                 <div class="text-center">
                   <h1 class="text-2xl md:text-4xl font-bold  pb-4 text-blue-600"><a href="{{route('blog')}}">Blog</a></h1>
                   <h3 class="text-blue-700 font-semibold">Career tips and General Information</h3>
                 </div>
            </div>
        </div>
        <div class="container mx-auto px-2 sm:px-0">
          <div>
              <ul class=" text-gray-600">
                <li>
                  <a href="{{route('blog')}}" class="text-blue-700">Blog</a> &raquo;
                  @if(isset($category) && isset($category_id))
                     <a href="{{route('blog:category', ['category' =>Str::slug($category, '-'), 'id'=> base64_encode($category_id)])}}" class=" text-blue-700">{{$category}}</a> &raquo;
                  @endif
                </li>
              </ul>
          </div>
          <div class="block md:flex">
                <div class="w-full md:w-4/5">
                    @forelse ($blogPosts as $article)
                        <div class="block md:flex items-center bg-white text-gray-700 p-3 border my-2">
                                    <div class="w-full md:w-1/5">
                                      <img class="object-contain h-40 w-full" src="{{asset('assets/icons/blog_file.svg')}}" alt="article-thumbnail" title="article image">
                                    </div>
                                    <div class="w-full md:4/5">
                                      <div class="md:pl-4 my-3 text-blue-700">
                                        <a href="{{route('bloginfo', ['title' => Str::slug($article->article_title, '-'),'id' => base64_encode($article->id)])}}" class="outline-none">{{$article->article_title}}</a>
                                      </div>
                                     
                                      <div class="md:pl-4 article_description text-sm">
                                        {!! substr($article->article_description, 0, 300) !!} 
                                        <a href="{{route('bloginfo', ['title' => Str::slug($article->article_title, '-'),'id' => base64_encode($article->id)])}}" class="read-more outline-none rounded-full">read more...</a>
                                      
                                      </div>
                                      <div class="text-right my-2 flex md:justify-end flex-wrap">
                                            <div class="bg-pink-200 text-sm px-3 py-1 m-2 rounded-full text-gray-600"><a href="{{route('blog:category', ['category' =>Str::slug(category_name($article->category_id), '-'), 'id'=> base64_encode($article->category_id)])}}">{{category_name($article->category_id)}}</a></div>
                                            <div class="bg-teal-200 text-sm px-3 py-1 m-2 rounded-full text-gray-600">{{read_time($article->article_description)}}</div>
                                            {{-- <div class="text-sm text-gray-500 font-semibold">{{($article->featured) ? 'featured' : ''}}</div> --}}
                                            <div class="flex items-center px-3 m-2 py-1 text-gray-500 text-xs font-semibold rounded-full">
                                                <div>
                                                    <svg fill="none" class="w-5 h-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                </div>
                                                <div>{{ $article->created_at->diffForHumans() }}</div>
                                            </div> 
                                      </div>
                                    </div>
                        </div>
                    @empty
                         <div class="text-center p-6 text-gray-500">
                                    <div class="w-1/2 mx-auto flex items-center justify-center">
                                      <img src="{{asset('/assets/images/empty.png')}}" loading="lazy"  alt="hieworks empty jobs icon">
                                    </div>
                                    <div>
                                        <h4>No Post Found</h4>
                                    </div>
                          </div>
                    @endforelse
                    <div class="my-12">
                        {{$blogPosts->links()}}
                    </div>
                </div>
                <aside class="p-2 w-full md:w-1/4 bg-white">
                          <div class="flex justify-center my-4 pb-3">
                             <span class="bg-blue-200 text-blue-700 text-center font-semibold text-lg w-full px-6 py-3"><a href="{{route('jobs')}}" class="outline-none block">view latest jobs today</a></span>
                          </div>

                      <div class="border rounded-md mb-6">
                        <div class="text-center font-bold text-gray-600 text-sm bg-gray-100 p-4">
                          Featured Posts
                        </div>
                        

                        {{-- @dump($blogPosts->where('featured', 1)->toArray()) --}}
                        @forelse ($featuredPosts as $featured)
                            <a href="{{route('bloginfo', ['title' => Str::slug($featured->article_title, '-'),'id' => base64_encode($featured->id)])}}" class="outline-none">
                              <div class="text-sm text-gray-700 py-3 px-4 border-t hover:bg-purple-700 hover:text-white">
                                &raquo; {{$featured->article_title}}
                              </div>
                            </a>
                        @empty
                          <div class="text-gray-300 text-center mx-auto px-6 py-3">no post found</div>
                        @endforelse
                      </div>

                      <div class="border rounded-md mb-6">
                        <div class="text-center font-bold text-gray-600 text-sm bg-gray-100 p-4">
                           Blog Categories
                        </div>
                        @forelse ($categories as $category)
                      
                            <a href="{{route('blog:category', ['category' =>Str::slug($category->category, '-'), 'id'=> base64_encode($category->id)])}}" class="outline-none">
                              <div class="text-sm text-gray-700 py-3 px-4 border-t hover:bg-purple-700 hover:text-white">
                                &raquo; {{$category->category}}
                              </div>
                              
                            </a>
                            
                        @empty
                            <div class="text-gray-300 text-center mx-auto px-6 py-3">no post found</div>
                        @endforelse
                     
                      </div>


                      
                </aside>
            </div>
        </div>
   </div>
@endsection

@prepend('app_js')
    <script type="application/ld+json">
      {
          "@context": "https://schema.org",
            "@type": "ItemList",
            "url": "{{config('app.url')}}",
            "name": "Current Jobs in Ghana and Remote Careers",
            "numberOfItems": 8,
            "itemListElement": [
               @foreach ($blogPosts as $post)
                  {
                    "@type": "ListItem",
                    "position": {{$loop->iteration}},
                    "name": "{{$post->article_title}}",
                    "url": "{{route('bloginfo', ['title' => Str::slug($post->article_title, '-'),'id' => base64_encode($post->id)])}}"
                    }{{ ($loop->last) ? '' : ','}}
               @endforeach
            ]
      }
    </script>

@endprepend