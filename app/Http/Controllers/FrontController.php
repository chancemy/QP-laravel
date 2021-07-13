<?php

namespace App\Http\Controllers;

use Session;
use App\News;
use App\Order;
use App\Product;
use App\NewsType;
use App\OrderDetail;
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
    public function newsIndex(Request $request)
    {
        $newsTypes = NewsType::with('news')->get();
        $typeId = $request->type_id;
        if($typeId && $typeId != 0){
            $news = News::with('type')->where([['type_id',$typeId],['is_display',1]])->get()->sortByDesc('date');
            foreach ($news as $key => $new) {
                // dd($news[5]->date);
            }
        }else{
            $typeId = 0;
            $news = News::with('type')->where('is_display',1)->get()->sortByDesc('date');
            // dd($news);


        }

        return view('front.news.index', compact('newsTypes', 'news','typeId'));
    }

    public function newsDetail($id)
    {
        $new = News::find($id);

        return view('front.news.detail', compact('new'));
    }


    // 產品、線上商店
    public function product()
    {
        $todayDate = date('Y-m-d');

        $products = Product::where('start_date', '<=', $todayDate)->where('end_date', '>=', $todayDate)->get()->sortBy('end_date');
        $types = ProductType::TYPE;
        $all_product_types = ProductType::get();
        $product_types = collect([]);
        foreach ($all_product_types as $product_type) {
            if ($product_type->products->count() != 0) {
                $product_types->push($product_type);
            }
        };
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
    public function delete(Request $request)
    {
        \Cart::remove($request->productId);
        return 'success';
    }

    public function cartStep2()
    {

        return view('front.cart.step2');
    }
    public function paymentCheck(Request $request)
    {
        Session::put('payment', $request->payment);
        Session::put('shipment', $request->shipment);
        Session::put('shipping_fee', $request->shipping_fee);
        return redirect('cart/step3');
    }
    public function cartStep3()
    {
        if (Session::has('payment') && Session::has('shipment')) {
            return view('front.cart.step3');
        } else {
            return redirect('cart/step2');
        }
    }
    public function shipmentCheck(Request $request)
    {


        $cartProducts = \Cart::getContent();
        $order = Order::create([
            'order_no' => 'DP' . time() . rand(1, 999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'price' => 999999999,
            'payment' => Session::get('payment'),
            'shipment' => Session::get('shipment'),
            'shipping_fee' => Session::get('shipping_fee'),
            'shipping_status_id' => 0,
            'order_status_id' => 0,
        ]);
        $totalPrice = 0;
        $totalQty = 0;
        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->price * $cartProduct->quantity;
            $totalQty += $cartProduct->quantity;
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $cartProduct->quantity,
                'old_data' => json_encode($product),
            ]);
        }
        $order->update([
            'price' => $totalPrice,

        ]);
        Session::forget('payment');
        Session::forget('shipment');
        Session::forget('shipping_fee');
        \Cart::clear();

        return redirect('cart/step4')->with('order', $order);
    }

    public function cartStep4()
    {
        if (Session::has('order')) {

            $order = Session::get('order');
            $orderDetails = $order->details;
            $totalQty = 0;
            foreach ($orderDetails as $orderDetail) {
                $totalQty += $orderDetail->quantity;
            }
            return view('front.cart.step4', compact('order', 'orderDetails', 'totalQty'));
        } else {
            return redirect('/');
        }
    }


    // 聯絡我們
    public function contactUs()
    {
        return view('front.contactUs.index');
    }
}
