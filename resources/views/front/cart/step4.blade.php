@extends('template.template')

@section('page-title','購物車-4')

@section('css')
<link rel="stylesheet" href="/css/frontpage/cart/cart-template.css">
<link rel="stylesheet" href="/css/frontpage/cart/cart.css">
<link rel="stylesheet" href="/css/frontpage/cart/cart_step4.css">
@endsection


@section('main')
<main class="bgc-gray">
    <section class="d-flex justify-content-center align-items-end pb-4" style="height: 338px;">
        <div class="container">

            <!-- 以下結帳進度條 -->
            <div class="progress-style d-flex justify-content-between align-items-start text-center">

                <div class="quarter-round">
                    <div class="round d-flex flex-column align-items-center w-100 justify-content-center">
                        <div class="roundcircle-style active mb-2 d-flex align-items-center justify-content-center">
                            1</div>
                        <span class="quarterround-text-pd">確認購物車</span>
                    </div>
                </div>
                <div class="quarter-round">
                    <div class="round d-flex flex-column align-items-center w-100 justify-content-center">
                        <div class="roundcircle-style mb-2 d-flex align-items-center justify-content-center active">
                            2</div>
                        <span class="quarterround-text-pd ">付款與運送方式</span>
                    </div>
                </div>
                <div class="quarter-round">
                    <div class="round d-flex flex-column align-items-center w-100 justify-content-center">
                        <div class="roundcircle-style mb-2 d-flex align-items-center justify-content-center  active">
                            3</div>
                        <span class="quarterround-text-pd ">填寫資料</span>
                    </div>
                </div>
                <div class="quarter-round">
                    <div class="round d-flex flex-column align-items-center w-100 justify-content-center">
                        <div class="roundcircle-style mb-2 d-flex align-items-center justify-content-center  active">
                            4</div>
                        <span class="quarterround-text-pd ">完成訂購</span>

                    </div>
                </div>


        </div>
        </div>
    </section>
    <section class="bgc-yellow py-5">
        <div class="container ">
            <div class="w-100 bgc-gray-3 cart-title d-flex justify-content-center align-items-center">
                您的訂單已成立！
            </div>
            <table class="cart-table bgc-yellow-2 w-100 ">
                <thead class="px-4" style="height: 70px;">
                    <tr class="position-relative">
                        <th scope="col" class="thead-img" style="border-top-left-radius:10px;"></th>
                        <th scope="col">品名</th>
                        <th scope="col">數量</th>
                        <th scope="col">單價</th>
                        <th scope="col">小計</th>
                        <th scope="col" style="border-top-right-radius:10px ;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderDetails as $orderDetail)
                    <?php
                    $product = json_decode($orderDetail->old_data)
                    ?>
                    <tr class="cart-products position-relative">
                        <td scope="row d-flex justify-content-center">
                            <div class="mx-auto cart-img"><img src="{{  $product->img }}" alt="">
                            </div>
                        </td>
                        <td class="text-center">{{  $product->name }}</td>
                        <td>1</td>
                        <td class="text-center">NT$ <span class="item-price">{{  $product->price }}</span></td>
                        <td class="text-center">NT$ <span class="item-total">{{  $product->price *  $orderDetail->quantity }}</span></td>

                    </tr>

                    @endforeach

                </tbody>

            </table>
            <div class="w-100 bgc-gray-3 cart-title d-flex justify-content-center align-items-center">
                訂購人資訊
            </div>
            <div class="bgc-yellow-2 info-area">
                <div class="row">
                    <div class="col-md-2 col-4">購買姓名</div>
                    <div class="col-md-10 col-8">{{ $order->name }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-4">連絡電話</div>
                    <div class="col-md-10 col-8">{{ $order->phone }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-4">連絡地址</div>
                    <div class="col-md-10 col-8">{{ $order->zipcode }} {{ $order->county }}{{ $order->district }}{{ $order->address }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-4">電子郵件</div>
                    <div class="col-md-10 col-8">{{ $order->email }}</div>
                </div>
            </div>
            <div class="w-100 bgc-gray-3 cart-title d-flex justify-content-center align-items-center">
                訂單明細
            </div>
            <div class="bgc-yellow-2 info-area">
                <div class="row">
                    <div class="col-md-2 col-4">數量</div>
                    <div class="col-md-10 col-8">{{ $totalQty }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-4">運費</div>
                    <div class="col-md-10 col-8">NT$ {{ $order->shipping_fee }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-4">小計</div>
                    <div class="col-md-10 col-8">NT$ {{ $order->price }}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-4">總計</div>
                    <div class="col-md-10 col-8">NT$ {{ $order->price +  $order->shipping_fee  }}</div>
                </div>
            </div>
            <div class="bgc-gray-3"
                style="height: 40px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;"></div>
            <div class="d-flex justify-content-end pt-4 pb-3 px-4">

                <a href="{{asset('/')}}">
                    <div class="next-btn  px-3 py-2 ">回首頁<i class="fas fa-chevron-right ml-2"></i></div>
                </a>
            </div>

        </div>
    </section>

</main>
@endsection


@section('js')
<script src="/js/frontpage/cart.js"></script>
@endsection
