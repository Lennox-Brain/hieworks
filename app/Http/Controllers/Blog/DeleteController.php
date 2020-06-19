<?php

namespace App\Http\Controllers\Blog;


use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DeleteController extends Controller
{
    public function deleteCategory($id){
      $id = base64_decode($id);
      Category::findOrFail($id)->delete();
      return redirect()->back();
    }

    public function deleteArticle($id){
        $id = base64_decode($id);
        Article::findOrFail($id)->delete();
        return redirect()->back();
    }

}
