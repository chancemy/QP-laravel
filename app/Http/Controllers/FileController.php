<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public static function newsImgUpload($file)
    {
        if ($file) {
            if (!is_dir('upload/')) {
                mkdir('upload/');
            }
            if (!is_dir('upload/news/')) {
                mkdir('upload/news/');
            }
            $extenstion = $file->getclientoriginalextension();
            $filename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/news/' . $filename;
            move_uploaded_file($file, public_path() . $path);
        }
        return $path;
    }
    public static function productImgUpload($file)
    {
        if (!is_dir('upload/')) {
            //創造一個上傳檔案的資料夾
            mkdir('upload/');
        }
        if (!is_dir('upload/product/')) {
            mkdir('upload/product/');
        }
        $extension = $file->getClientOriginalExtension();
        $filename = md5((uniqid(rand()))) . '.' . $extension;
        $path = '/upload/product/' . $filename;

        move_uploaded_file($file, public_path() . $path);
        return $path;
    }
}
