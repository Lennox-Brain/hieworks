<?php


use App\Category;
use Illuminate\Support\Carbon;

if(!function_exists('read_time')){
        function read_time($word){
            $rt = round(str_word_count($word) / 250 );
          
             if($rt < 1) return 'less than a minute';
             return $rt . 'mins read';
        }
    }

    if(!function_exists('category_name')){
        function category_name($id){
          return Category::findOrFail($id)->category;
        }
    }

    if(!function_exists('latest_badge')){
        function latest_badge($created_at){
             $time = Carbon::now()->diffInHours($created_at, true);
             return ( $time < 6 );
        }
    }

    if(!function_exists('post_views')){
       function post_views($views){
        if ($views >= 1000){
            return round(($views * (1/1000) ), PHP_ROUND_HALF_UP ) .'k';
         }
          return $views;
       }
    
    }



?>