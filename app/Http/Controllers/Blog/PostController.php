<?php

namespace App\Http\Controllers\Blog;


use App\Article;
use App\Category;
use App\Hieworks\Validators;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function postArticle(Request $request){
      
        $data = Validators::validateArticle($request->except('_token'))
                            ->validate();
         $featured = false;                   
        if($request->has('featured')) $featured = true;
    
        $status = Article::create([
            'article_title' => $data['article_title'],
            'article_description' => $data['article_description'],
            'featured' => $featured,
            'category_id' => $data['article_category']
        ]);

        if(!$status) return redirect()->back()->withInput()->withErrors(['creating_article_error'=> 'service unvailable now']);
        return redirect()->back()->with('new_article_success', 'article published successfully');  

        
    }


    public function newArticleCategory(Request $request){
      
        $data = Validator::make($request->except('_token'), [
            'new_category' => 'required|max:200'
        ])->validate();

       $status = Category::create([
           'category' => strip_tags($data['new_category'])
       ]);
      
        if(!$status) return redirect()->back()->withInput()->withErrors(['creating_category_error'=> 'service unvailable now']);
             return redirect()->back()->with('new_category_success', 'new category added');   
    
    }


}
