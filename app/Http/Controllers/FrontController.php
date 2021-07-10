<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsType;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //首頁
    public function index()
    {
        return view('front.index');
    }



    // 關於我們
    public function aboutUs()
    {
        return view('front.aboutUs.index');
    }



    // 最新消息
    public function newsIndex()
    {
        $newsTypes = NewsType::get();
        $news = News::with('type')->get();
        return view('front.news.index', compact('newsTypes', 'news'));
    }

    public function newsDetail()
    {
        return view('front.news.detail');
    }


    // 產品、線上商店
    public function product()
    {
        $todayDate = date('Y-m-d');

        $products = Product::where('start_date', '<=', $todayDate)->where('end_date', '>=', $todayDate)->get();
        $types = ProductType::TYPE;
        $product_types = ProductType::get();

        return view('front.product.index', compact('products', 'types', 'product_types'));
    }

    public function productDetail($id)
    {
        $record = Product::find($id);
        return view('front.product.detail', compact('record'));
    }

    public function add(Request $request)
    {

        $product = Product::find($request->productId);
        $todayDate = date('Y-m-d');
        if ($product->end_date <  $todayDate || $product->start_date >  $todayDate) {
            return 'fail';
        } else if (\Cart::get($product->id)) {
            \Cart::update($request->productId, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity,
                ),
            ));
            return 'update-success';
        } else {
            \Cart::add(array(
                'id' => $product->id, // inique row ID
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'img' => $product->img,
                )
            ));
            return 'success';
        }
    }
    public function update(Request $request)
    {
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            ),
        ));
        return 'success';
    }
    public function clear()
    {
        \Cart::clear();
        return '清空購物車';
    }
    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }


    // 購物車
    public function cartStep1()
    {
        $cart_products = \Cart::getContent()->sortKeys();
        return view('front.cart.step1', compact('cart_products'));
    }
    public function delete(Request $request){
        \Cart::remove($request->productId);
        return 'success';
    }


    public function cartStep2()
    {
        return view('front.cart.step2');
    }

    public function cartStep3()
    {
        return view('front.cart.step3');
    }

    public function cartStep4()
    {
        return view('front.cart.step4');
    }


    // 聯絡我們
    public function contactUs()
    {
        return view('front.contactUs.index');
    }
}
