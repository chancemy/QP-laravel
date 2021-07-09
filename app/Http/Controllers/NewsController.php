<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function news(){
        $news = News::with('type')->get();
        return view('admin.news.item.index',compact('news'));
    }

    public function create(){
        $newsTypes = NewsType::get();
        return view('admin.news.item.create',compact('newsTypes'));
    }

    public function store(Request $request){
        // $newDate = explode('-',$request->date);
        // dd($newDate);
        $file = $request->file('img');
        $path = FileController::newsImgUpload($file);
        News::create([
            'type_id' => $request->type_id,
            'title' => $request->title,
            'img' => $path,
            'date' => $request->date,
            'description' => $request->description,
            'remarks' => $request->remarks,
            'is_display' => $request->is_display,
            'is_display' => '1'
        ]);
        return redirect('/admin/news/item')->with('message','新增成功') ;
    }

    public function edit($id){
        $oldNews  = News::with('type')->find($id);
        $newsTypes = NewsType::get();
        return view('admin.news.item.edit',compact('oldNews','newsTypes'));
    }

    public function update(Request $request,$id){
        $oldNews  = News::find($id);
        $file = $request->file('img');
        if($file){
            File::delete(\public_path().$oldNews->img);
            $path = FileController::newsImgUpload($file);
        }
        $oldNews->type_id = $request->type_id;
        $oldNews->title = $request->title;
        $oldNews->img = $path;
        $oldNews->date = $request->date;
        $oldNews->description = $request->description;
        $oldNews->remarks = $request->remarks;
        $oldNews->is_display = "1";
        $oldNews->save();
        return redirect('/admin/news/item')->with('message','編輯成功') ;
    }

    public function delete($id){
        $oldNews = News::find($id);
        File::delete(\public_path().$oldNews->img);
        $oldNews->delete();
        return redirect('/admin/news/item')->with('message','刪除成功') ;
    }
}
