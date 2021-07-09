<?php

namespace App\Http\Controllers;

use App\NewsType;
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
        return view('front.news.index');
    }

    public function newsDetail()
    {
        return view('front.news.detail');
    }


    // 產品、線上商店
    public function product()
    {
        return view('front.product.index');
    }
    public function productDetail()
    {
        return view('front.product.detail');
    }


    // 購物車
    public function cartStep1()
    {
        return view('front.cart.step1');
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
