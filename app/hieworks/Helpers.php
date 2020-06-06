<?php
namespace App\Hieworks;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Helpers{
    const FILES_PATH = '/storage/uploads/';

    public static function uploadFile($file, $path){
        $imageName = substr(md5($file->getClientOriginalName()), 1, 15).'.'.$file->getClientOriginalExtension();
         $file->move(public_path($path), $imageName);
         return $imageName;
         
      }

    public static function jobId(){
         $random  = str_shuffle('1234567889012345678900987654321112233445566778899002444666668888888');
         $sub = substr($random, 0,15);
         $date = date('dmyhms') ;
        return substr(str_shuffle($date.$sub),2,5);
    }
    
    public static function comparePassword($oldPassword){
       return Hash::check($oldPassword, Auth::user()->getAuthPassword());
    }

    public static function getModel($model, $id){
        return $model::where(['id'=>$id]);
    }

    public static function deleteFile($filename, $path = '/storage/uploads/'){
      
        if(file_exists(public_path().$path.$filename) ){
            return unlink(public_path().$path.$filename);
        }
      
        return false;
    }

    
    
}