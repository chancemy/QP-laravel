<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.product.type.index';
        $this->edit = 'admin.product.type.edit';
        $this->create = 'admin.product.type.create';

    }
    public function index(){
        $product_types = ProductType::get();
        return view($this->index,compact('product_types'));
    }
    public function create(){
        $types = ProductType::TYPE;
        return view($this->create,compact('types'));

    }
    public function store(Request $request){
        ProductType::create($request->all());
        return redirect('/admin/product/type')->with('message', '新增成功');

    }
    public function edit($id){
        $record = ProductType::find($id);
        $types = ProductType::TYPE;
        return view($this->edit,compact('record','types'));
    }
    public function update(Request $request,$id){
        $old_record = ProductType::find($id);
        $old_record->type = $request->type;
        $old_record->type_name = $request->type_name;
        $old_record->save();
        return redirect('/admin/product/type')->with('message', '編輯成功');

    }
    public function delete($id)
    {
        $old_record = ProductType::find($id);
        if($old_record->products->count()!=0){
            return redirect('/admin/product/type')->with('message', '仍有 '.$old_record->products->count().' 筆商品，無法刪除該產品種類。');
        }
        $old_record->delete();

        return redirect('/admin/product/type')->with('message', '刪除成功');
    }
}
