@extends('template.template')

@section('page-title','產品列表')

@section('css')
<link rel="stylesheet" href="/css/frontpage/product/product.css">
@endsection


@section('main')
<main class="bgc-yellow position-relative">
    <div class="position-absolute top-gray-block  bgc-gray-2"></div>
    <div class="position-absolute top-white-block"></div>
    <div class="container-fluid p-0">
        <div class="product-area bgc-yellow ">
            <div class="row no-gutters">
                <div class="col-12 d-flex justify-content-center position-relative" style="z-index: 10;">

                    <h1 class="text-center">Online Store</h1>
                </div>
                <div class="col-lg-3 position-relative type-area">
                    <div class="row no-gutters product-type">
                        <ul
                            class="d-flex flex-row flex-lg-column justify-content-between justify-content-lg-start w-100">
                            <li class="type-btn checked"><span>查看全部</span></li>
                            <li class="type-btn"><span>固定販售</span>
                                <ul class="item-btn hide">
                                    <li>冷藏小蛋糕</li>
                                    <li>法式常溫點心</li>
                                    <li>大尺吋蛋糕</li>
                                </ul>
                            </li>
                            <li class="type-btn"><span>期間限定</span>
                                <ul class="item-btn hide">
                                    <li>期間限定禮盒</li>
                                    <li>期間限定蛋糕</li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 w-100 product-list-area p-lg-3 p-0 d-flex flex-wrap">

                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>
                    <div class="p-sm-4 p-3 product-container mb-3">
                        <div class="img-container">
                            <img src="/img/frontpage/cart/sample.jpg" alt="">
                        </div>
                        <div><span class="mr-4">品名</span> / <span class="ml-4">NT $1280</span><i
                                class="ml-4 fas fa-chevron-right"></i>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</main>
@endsection


@section('js')
<script src="/js/frontpage/product.js"></script>
@endsection
