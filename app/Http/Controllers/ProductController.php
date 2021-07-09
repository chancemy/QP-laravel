<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use Illuminate\Http\Request;

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
            if (!is_dir('upload/')) {
                //創造一個上傳檔案的資料夾
                mkdir('upload/');
            }
            $extension = $file->getClientOriginalExtension();
            $filename = md5((uniqid(rand()))) . '.' . $extension;
            $path = '/upload/' . $filename;

            move_uploaded_file($file, public_path() . $path);
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

                if (!is_dir('upload/')) {
                    //創造一個上傳檔案的資料夾
                    mkdir('upload/');
                }

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


        return redirect('/admin/product/item')->with('message', '新增成功');
    }
}
