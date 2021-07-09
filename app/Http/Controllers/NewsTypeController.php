<?php

namespace App\Http\Controllers;

use App\newsType;
use Illuminate\Http\Request;

class NewsTypeController extends Controller
{
    public function type(){
        $newsTypes = NewsType::with('news')->get();
        return view('admin.news.type.index',compact('newsTypes'));
    }

    public function create(){
        return view('admin.news.type.create');
    }

    public function store(Request $request){
        // dd($request->all());
        // $recorde = $request->type_name;
        NewsType::create($request->all());
        return redirect('/admin/news/type')->with('message','新增成功') ;
    }

    public function edit($id){
        $oldNewsType  = newsType::find($id);
        return view('admin.news.type.edit',compact('oldNewsType'));
    }

    public function update(Request $request,$id){

        $oldNewsType  = newsType::find($id);
        $oldNewsType->type_name = $request->type_name;
        $oldNewsType->save();
        return redirect('/admin/news/type')->with('message','編輯成功') ;
    }

    public function delete($id){
        $oldNewsType = newsType::find($id);
        $oldNewsType->delete();
        return redirect('/admin/news/type')->with('message','刪除成功') ;
    }
}
