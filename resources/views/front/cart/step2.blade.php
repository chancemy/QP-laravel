@extends('template.template')

@section('page-title','購物車-2')

@section('css')
<link rel="stylesheet" href="/css/frontpage/cart/cart-template.css">

<!-- 已整理，可以留一個p.2 的css就好-->{{-- 我看不懂先照貼 --}}
<link rel="stylesheet" href="/css/frontpage/cart/cart.css">
<link rel="stylesheet" href="/css/frontpage/cart/cart_step2.css">
<link rel="stylesheet" href="/css/frontpage/cart/cart-2.css">
@endsection

@section('main')
<main class="bgc-gray">
    <section class="d-flex justify-content-center align-items-end" style="height: 338px;">
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
                            <div class="roundcircle-style active">
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

    <!-- 以下開始表單內容 -->
    <section class="bgc-yellow py-5">
        <div class="container">
            <form action="{{ asset('cart/payment_check') }}" class="bgc-yellow-2 w-100 cart-form" method="POST">
                @csrf
                @php
                $payment = Session::get('payment');
                $shipment = Session::get('shipment');
                @endphp
                <div class="w-100 bgc-gray-3 cart-title d-flex justify-content-center align-items-center">
                    付款方式
                </div>
                <div class="py-2">
                    <div class="input-area position-relative d-flex justify-content-start align-items-center"><input
                            type="radio" name="payment" id="ATM" value="ATM" @if ($payment == 'ATM') checked

                            @endif><label for="ATM">實體／網路ATM</label></div>
                    <div class="input-area position-relative  d-flex justify-content-start align-items-center">
                        <input type="radio" name="payment" id="on-delivery" value="on-delivery" @if ($payment == 'on-delivery') checked

                        @endif><label
                            for="on-delivery">貨到付款</label>
                    </div>
                    <div class="input-area position-relative  d-flex justify-content-start align-items-center">
                        <input type="radio" name="payment" id="credit-card" value="credit-card"  @if ($payment == 'credit-card') checked

                        @endif><label
                            for="credit-card">信用卡</label>
                    </div>
                </div>
                <div class="w-100 bgc-gray-3 cart-title d-flex justify-content-center align-items-center">
                    運送方式
                </div>
                <div class="py-2">
                    <div class="input-area position-relative d-flex justify-content-between align-items-center">
                        <div><input type="radio" name="shipment" id="store" value="store" data-price="60" @if ($shipment == 'store') checked

                        @endif><label
                                for="store">超商配送</label></div>
                        <div>60 元</div>

                    </div>
                    <div class="input-area position-relative  d-flex justify-content-between align-items-center">
                        <div>
                            <input type="radio" name="shipment" id="blackcat" value="blackcat" data-price="80" @if ($shipment == 'blackcat') checked

                            @endif><label
                                for="blackcat">黑貓宅配</label>
                        </div>
                        <div>80 元</div>
                    </div>
                    <div class="input-area position-relative  d-flex justify-content-between align-items-center">
                        <div>
                            <input type="radio" name="shipment" id="fedex" value="fedex" data-price="100" @if ($shipment == 'fedex') checked

                            @endif><label
                                for="fedex">順豐快遞</label>
                        </div>
                        <div>100 元</div>
                    </div>
                    <div hidden><input type="text" name="shipping_fee" id="shipping_fee"></div>
                </div>
                @php
                $numberCount = \Cart::getTotalQuantity();
                $subTotal = \Cart::getSubTotal();
                @endphp
                <button type="submit" hidden id="form-submit"></button>
                <!-- 以下表單內結帳部分 -->
                <div class="d-flex flex-column align-items-end justify-content-end  bgc-yellow-2 cart-bottom ">
                    <div style="width: 328px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class=" mr-2 ">數量</span>
                            <span id="qty-total">{{ $numberCount }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class=" mr-2 ">運費</span>
                            <span id="shipping">尚未選擇運送方式</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class=" mr-2 ">小計</span>
                            <span id="sub-total">NT$ {{ $subTotal }}</span>
                        </div>
                        <div class="w-100 py-2">
                            <div style="background-color: black;height:1px;"></div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="">訂單總計</span>
                            <span id="total">NT$ {{ $subTotal }}</span>
                        </div>

                    </div>
                </div>
            </form>


            <!-- 按鈕 -->
            <div class="bgc-gray-3"
                style="height: 40px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;"></div>

            <div class="d-flex justify-content-between pt-4 pb-3 px-4">
                <a href="{{asset('cart/step2')}}">
                    <div class="back-btn px-3 py-2"><i class="fas fa-chevron-left mr-2"></i>上一步</div>
                </a>


                <label for="form-submit">
                    <div class="next-btn px-3 py-2 ">下一步<i class="fas fa-chevron-right ml-2"></i></div>
                </label>

            </div>
        </div>
    </section>
</main>
@endsection


@section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
var shipmentCheck = document.querySelector('input[name="shipment"]:checked');
shipfeeCalculate();

function shipfeeCalculate(){
    if(shipmentCheck){
        let shipfee = shipmentCheck.dataset.price;
        const shipping = document.querySelector('#shipping');
        const subTotal = {{ $subTotal }};
        const Total = parseInt(subTotal) + parseInt(shipfee);
        shipping.innerHTML = 'NT$ '+ shipfee;
        total.innerHTML = 'NT$ ' + Total;
    }else{
        return
    }

}

var shipment = document.querySelectorAll('input[name="shipment"]');
shipment.forEach(element=>element.addEventListener('change',function(e){
    let shipfee = this.dataset.price;
    const shipping = document.querySelector('#shipping');
    const total = document.querySelector('#total');
    const subTotal = {{ $subTotal }};
    const Total = parseInt(subTotal) + parseInt(shipfee);
    shipping.innerHTML = 'NT$ '+ shipfee;
    total.innerHTML = 'NT$ ' + Total;

}))
const nextBtn = document.querySelector('.next-btn');
const form = document.querySelector('.cart-form');
const shippingFee = document.querySelector('#shipping-fee');
nextBtn.onclick = function(e){
    e.preventDefault();
    let shipmentCheck = document.querySelector('input[name="shipment"]:checked');
    let paymentCheck = document.querySelector('input[name="payment"]:checked');
    const shippingFee = document.querySelector('#shipping_fee');

    if (!shipmentCheck || !paymentCheck) {
        return swal({
            title: "請選擇付款或運送方式！",
            icon: "warning",
            button: "確認",
        });
    }else{
        shippingFee.value =  shipmentCheck.dataset.price;
        form.submit();
    }

}


</script>

@endsection
