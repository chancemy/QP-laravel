<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsType;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        $news = News::with('news')->get();
        return view('admin.news.item.index',compact('news'));
    }

    public function create(){
        $newsTypes = NewsType::get();
        return view('admin.news.item.create',compact('newsTypes'));
    }

    public function store(Request $request){
        News::create($request->all());
        return redirect('/admin/news/item')->with('message','新增成功') ;
    }

    public function edit($id){
        $oldNews  = News::find($id);
        return view('admin.news.type.edit',compact('oldNews'));
    }

    public function update(Request $request,$id){

        $oldNews  = News::find($id);
        $oldNews->type_id = $request->type_id;
        $oldNews->title = $request->title;
        $oldNews->img = $request->img;
        $oldNews->date = $request->date;
        $oldNews->description = $request->description;
        $oldNews->remarks = $request->remarks;
        $oldNews->is_display = $request->is_display;
        $oldNews->save();
        return redirect('/admin/news/item')->with('message','編輯成功') ;
    }

    public function delete($id){
        $oldNews = News::find($id);
        $oldNews->delete();
        return redirect('/admin/news/item')->with('message','刪除成功') ;
    }
}
