<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.product.item.index';
        $this->edit = 'admin.product.item.edit';
        $this->create = 'admin.product.item.create';
    }
    public function index()
    {
        $products = Product::with('type')->get();
        return view($this->index, compact('products'));
    }
    public function create()
    {
        $types = ProductType::get();
        return view($this->create, compact('types'));
    }
    public function store(Request $request)
    {

        if ($request->img) {

            $file = $request->file('img');
            $path = FileController::productImgUpload($file);
        }
        $old_record = Product::create(
            [
                'type_id' => $request->type_id,
                'name' => $request->name,
                'price' => $request->price,
                'unit' => $request->unit,
                "start_date" => $request->start_date ?? '1999-01-01',
                "end_date" => $request->end_date ?? '9999-12-31',
                'discript' => $request->discript,
                'content' => $request->content,
                'img' => $path,

            ]

        );
        if ($request->photos) {

            foreach ($request->photos as $photo) {
                $file = $photo;

                $path = FileController::productImgUpload($file);

                ProductImg::create([
                    'product_id' => $old_record->id,
                    'photo' => $path,
                ]);
            }
        }


        return redirect('/admin/product/item')->with('message', '新增成功');
    }
    public function edit($id)
    {
        $record = Product::find($id);
        $old_photos = $record->photos;
        $types = ProductType::get();
        return view($this->edit, compact('record', 'old_photos', 'types'));
    }
    public function deleteImage(Request $request)
    {
        $old_record = ProductImg::find($request->id);
        if ($old_record) {
            File::delete(public_path() . $old_record->photo);
            $old_record->delete();
        }
    }
    public function update(Request $request, $id)
    {
        $old_record = Product::find($id);
        if ($request->img) {
            File::delete(public_path() . $old_record->img);
            $file = $request->file('img');
            $path = FileController::productImgUpload($file);
            $old_record->img = $path;
        }

        $old_record->type_id = $request->type_id;
        $old_record->name = $request->name;
        $old_record->price = $request->price;
        $old_record->unit = $request->unit;
        $old_record->start_date = $request->start_date??'1999-01-01';
        $old_record->end_date = $request->end_date??'9999-12-31';
        $old_record->discript = $request->discript;
        $old_record->content = $request->content;

        $old_record->save();

        if ($request->photos) {
            foreach ($request->photos as $photo) {
                $file = $photo;

                $extension = $file->getClientOriginalExtension();
                $filename = md5((uniqid(rand()))) . '.' . $extension;
                $path = '/upload/' . $filename;

                move_uploaded_file($file, public_path() . $path);

                ProductImg::create([
                    'product_id' => $old_record->id,
                    'photo' => $path,
                ]);
            }
        }

        return redirect('/admin/product/item')->with('message', '編輯成功');
    }
    public function delete($id)
    {
        $old_record = Product::find($id);
        $old_Product_img = ProductImg::where('product_id', $old_record->id)->get();

        foreach ($old_Product_img as $old_img) {
            File::delete(public_path() . $old_img->photo);
            $old_img->delete();
        }
        File::delete(public_path() . $old_record->img);

        $old_record->delete();

        return redirect('/admin/product/item')->with('message', '刪除成功');
    }
}
