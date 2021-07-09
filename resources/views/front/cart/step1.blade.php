@extends('template.template')

@section('page-title','購物車-1')

@section('css')
<link rel="stylesheet" href="/css/frontpage/cart/cart-template.css">
<link rel="stylesheet" href="/css/frontpage/cart/cart.css">
<link rel="stylesheet" href="/css/frontpage/cart/cart_step1.css">
@endsection


@section('main')
<main class="bgc-gray">
    <section class="d-flex justify-content-center align-items-end pb-4" style="height: 338px;">
        <div class="container">

            <!-- 以下結帳進度條 -->
            <div class="col-lg-12 progress-style d-flex flex-column justify-content-between">
                <div class="d-flex">
                    <div class="quarter-round">
                        <div class="round">
                            <div class="roundcircle-style-line active">
                                1</div>
                        </div>
                    </div>
                    <div class="quarter-round">
                        <div class="round">
                            <div class="roundcircle-style">
                                2</div>
                        </div>
                    </div>
                    <div class="quarter-round">
                        <div class="round">
                            <div class="roundcircle-style">
                                3</div>
                        </div>
                    </div>
                    <div class="quarter-round">
                        <div class="round">
                            <div class="roundcircle-style">
                                4</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex p-0">
                    <div class="w-100 mt-2 d-flex justify-content-around">
                        <p class="quarterround-text-pd mr_1 active">確認購物車</p>
                        <p class="quarterround-text-pd mr_2 active">付款與運送方式</p>
                        <p class="quarterround-text-pd mr_3">填寫資料</p>
                        <p class="quarterround-text-pd mr_4">完成訂購</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bgc-yellow py-5">
        <div class="container">
            <table class="cart-table bgc-yellow-2 w-100 ">
                <thead class="bgc-gray-3 px-4" style="color: white;height: 70px;">
                    <tr >
                        <th scope="col" style="width:180px;border-top-left-radius:10px ;"></th>
                        <th scope="col">品名</th>
                        <th scope="col">數量</th>
                        <th scope="col">單價</th>
                        <th scope="col">小計</th>
                        <th scope="col" style="border-top-right-radius:10px ;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height: 130px;position: relative;" class="cart-products">
                        <td scope="row d-flex justify-content-center">
                            <div class="mx-auto cart-img"><img
                                    src="/img/frontpage/cart/sample.jpg" alt="">
                            </div>
                        </td>
                        <td class="text-center">十四松</td>
                        <td><select class="qty-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select></td>
                        <td class="text-center">NT$ <span class="item-price" data-price="200">200</span></td>
                        <td class="text-center">NT$ <span class="item-total">100</span></td>
                        <td class="text-center">
                            <div class="delete-btn"><i class="far fa-trash-alt"></i></div>
                        </td>
                    </tr>
                    <tr style="height: 130px;position: relative;" class="cart-products">
                        <td scope="row d-flex justify-content-center">
                            <div class="mx-auto cart-img" style="width: 120px;height: 72px;"><img
                                    src="/img/frontpage/cart/sample.jpg" alt="">
                            </div>
                        </td>
                        <td class="text-center">十四松</td>
                        <td><select  class="qty-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select></td>
                        <td class="text-center">NT$<span class="item-price" data-price="100">100</span></td>
                        <td class="text-center">NT$<span class="item-total">100</span></td>
                        <td class="text-center">
                            <div class="delete-btn"><i class="far fa-trash-alt"></i></div>
                        </td>
                    </tr>
                </tbody>

            </table>
            <div class="d-flex flex-column align-items-end justify-content-end  bgc-yellow-2 cart-bottom ">
                <div style="width: 328px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class=" mr-2 ">數量</span>
                        <span id="qty-total">3</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class=" mr-2 ">小計</span>
                        <span id="sub-total">NT$ 31.5</span>
                    </div>
                    <div class="w-100 py-2">
                        <div style="background-color: black;height:1px;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <span class="">訂單總計</span>
                        <span id="total" class="position-relative">NT$ 56.4</span>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">

                        <span>（不含運）</span>
                    </div>
                </div>
            </div>
            <div class="bgc-gray-3"
                style="height: 40px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;"></div>
            <div class="d-flex justify-content-between pt-4 pb-3 px-4">
                <a href="{{asset('product')}}" >
                    <div class="back-btn px-3 py-2">繼續選購</div>
                </a>
                <a href="{{asset('cart/step2')}}">
                    <div class="next-btn  px-3 py-2 ">下一步<i class="fas fa-chevron-right ml-2"></i></div>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection


@section('js')
<script src="/js/frontpage/cart.js"></script>
@endsection
