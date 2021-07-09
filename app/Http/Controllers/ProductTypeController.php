<?php

namespace App\Http\Controllers;

use App\productType;
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
        $product_types = productType::get();
        return view($this->index,compact('product_types'));
    }
    public function create(){
        $types = productType::TYPE;
        return view($this->create,compact('types'));

    }
    public function store(Request $request){
        productType::create($request->all());
        return redirect('/admin/product/type')->with('message', '新增成功');

    }
    public function edit($id){
        $record = productType::find($id);
        $types = productType::TYPE;
        return view($this->edit,compact('record','types'));
    }
    public function update(Request $request,$id){
        $old_record = productType::find($id);
        $old_record->type = $request->type;
        $old_record->type_name = $request->type_name;
        $old_record->save();
        return redirect('/admin/product/type')->with('message', '編輯成功');

    }
    public function delete($id)
    {
        $old_record = productType::find($id);
        $old_record->delete();

        return redirect('/admin/product/type')->with('message', '刪除成功');
    }
}
