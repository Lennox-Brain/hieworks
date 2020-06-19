<?php

namespace App\Http\Controllers\Blog;


use App\Job;
use App\Article;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class GetController extends Controller
{
    public function showArticleForm(){
        $categories = Category::orderBy('created_at', 'desc')
                               ->get(['category', 'id', 'created_at']);

       $articles = Article::orderBy('created_at', 'desc')
                           ->simplePaginate(5);

       return view('layouts.backend.newarticle', ['articles' =>$articles, 'categories'=> $categories]);
   }
  

    public function featuredArticles()
    {
        return Article::where('featured', true)->orderBy('created_at', 'desc')->get(['id', 'article_title']);
    } 

    public function blogPosts()
    {
        
        $blogPosts = Article::orderBy('created_at', 'desc')
                             ->simplePaginate(5);
        $categories = Category::orderBy('created_at', 'desc')->get();
      
        return view('layouts.blog', ['blogPosts' => $blogPosts, 'categories' =>$categories, 'featuredPosts' => $this->featuredArticles() ]);
    }

    public function blogInfo(Request $request, $title, $id)
    {
        // return $title .' '. $id;
           $id = base64_decode($id);
           $blog_id = 'blog_'.$id;
          
            if(session()->has($blog_id) == false){
                Article::findOrFail($id)->increment('views', 1);
                session()->put($blog_id, $blog_id);
            }      

        
          $recentJobs =  Job::where(['status'=> true])
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
           $postInfo =  Article::findOrFail($id);
           $categories = Category::orderBy('created_at', 'desc')->get();
           return view('layouts.bloginfo', ['blogInfo' => $postInfo, 'categories' => $categories, 'featuredPosts' => $this->featuredArticles(), 'recentJobs' => $recentJobs ]);
    }

    public function postByCategory($category, $category_id){
      
        $id =  base64_decode($category_id);
        $categories = Category::orderBy('created_at', 'desc')->get();

        $blogPosts = Article::where('category_id', $id)
                              ->where('status', true)
                              ->orderBy('created_at', 'desc')
                              ->simplePaginate(5);
        $category = Str::slug($category, ' ');                    
        return view('layouts.blog', 
            ['blogPosts' => $blogPosts,
             'categories' =>$categories,
             'featuredPosts' => $this->featuredArticles(),
             'category' =>$category,
             'category_id' => $id
             ]);

    }
     

}
