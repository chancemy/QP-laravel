<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileCroller extends Controller
{
    public static function newsImgUpload($file){
        if($file ){
            if(!is_dir('upload/')){
                mkdir('upload/');
            }
            if(!is_dir('news/')){
                mkdir('news/');
            }
            $extenstion = $file ->getclientoriginalextension();
            $filename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/news/'.$filename;
            move_uploaded_file($file,public_path().$path);
        }
        return $path;
    }
}