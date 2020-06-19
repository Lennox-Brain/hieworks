<?php

namespace App\Http\Controllers\Blog;


use App\Article;
use App\Category;
use App\Hieworks\Validators;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    public function updateArticleCategory(Request $request){
        $data  = Validator::make($request->except('_token'),[
            'category_title' => 'required|max:180',
            'id'=>'',
        ])->validate();
         $id = base64_decode($data['id']);
        Category::find($id)->update(['category' => $data['category_title']]);
        return redirect()->back();
    }

    public function updateArticle($id){
         $id = base64_decode($id);
         $article = Article::findOrFail($id);

           $categories = Category::orderBy('created_at', 'desc')
                               ->get(['category', 'id', 'created_at']);
        return view('layouts.backend.updatearticle', ['article' =>$article, 'categories'=> $categories]);
    }

    public function postUpdateArticle(Request $request){
        $data = Validators::validateArticle($request->except(['_token', '_id']))
                            ->validate();
        $featured = false;
        $id = base64_decode($request->_id);  
        if($request->has('featured')){
           $featured = true;
        }
        // return $data;
        $changes = [
            'article_title' => $data['article_title'],
            'article_description' => $data['article_description'],
            'category_id' =>$data['article_category'],
            'featured' => $featured
        ];
       $status = Article::findOrFail($id)->update($changes);   
       if(!$status) return redirect()->back()->withInput()->withErrors(['creating_article_error'=> 'service unvailable now']);
       return redirect()->back()->with('new_article_success', 'changes successfully');                                   
    }

}
