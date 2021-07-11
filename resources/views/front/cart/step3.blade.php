@extends('template.template')

@section('page-title','購物車-3')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/frontpage/cart/cart-template.css') }}">

<link rel="stylesheet" href="{{ asset('/css/frontpage/cart/cart.css') }}">
<link rel="stylesheet" href="{{ asset('/css/frontpage/cart/cart_step3.css') }}">
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
                        <div class="roundcircle-style mb-2 d-flex align-items-center justify-content-center active">
                            3</div>
                        <span class="quarterround-text-pd ">填寫資料</span>
                    </div>
                </div>
                <div class="quarter-round">
                    <div class="round d-flex flex-column align-items-center w-100 justify-content-center">
                        <div class="roundcircle-style mb-2 d-flex align-items-center justify-content-center">
                            4</div>
                        <span class="quarterround-text-pd ">完成訂購</span>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--  以下表單內容  -->
    <section class="bgc-yellow py-5">
        <div class="container">
            <form action="{{ asset('/cart/shipment_check') }}" class="bgc-yellow-2 w-100 cart-form " method="POST">
                @csrf
                <div class=" bgc-gray-3 cart-title first d-flex justify-content-center align-items-center ">
                    訂購人資訊
                </div>
                <div class=" text-center py-3"><span> * 務必正確輸入訂購人姓名電話及地址以確保正確送達</span></div>
                <div class="row mx-auto py-3 form-group3">
                    <div class="col-6   d-flex flex-column">
                        <label for="name">姓名</label>
                        <input required id="name" type="text" name="name" placeholder="請輸入訂購人姓名">
                    </div>
                    <div class="col-6  d-flex flex-column">
                        <label for="phone">電話</label>
                        <input required id="phone" type="text" name="phone" placeholder="請輸入訂購人電話">
                    </div>
                </div>
                <div class="row mx-auto py-3 form-group3">
                    <div class="col-12 d-flex flex-column">
                        <label for="address">地址</label>
                        <div class="city-selector-set row">
                            <div class="col-4 d-flex">
                                <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                                <input class="zipcode w-100" name="zipcode" type="text" size="3" readonly required
                                    placeholder="郵遞區號">
                            </div>
                            <div class="col-4 d-flex">
                                <!-- 縣市選單 -->
                                <select name="county" required class="county w-100"></select>
                            </div>
                            <div class="col-4 d-flex">
                                <!-- 區域選單 -->
                                <select required class="district w-100" name="district"></select>
                            </div>
                            <div class="col-12 d-flex mt-3">
                                <!-- 區域選單 -->
                                <input class="w-100" type="text" name="address" required placeholder="地址">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row mx-auto py-3 form-group3">
                    <div class="col-12 d-flex flex-column">
                        <label for="email">信箱</label>
                        <input id="email" type="email" required name="email" placeholder="請輸入電子郵件">
                    </div>
                    <div class="col-12"><span>*我們會將您的通知信寄送至此</span></div>
                </div>
                @php
                $numberCount = \Cart::getTotalQuantity();
                $subTotal = \Cart::getSubTotal();
                $shipping_fee = Session::get('shipping_fee');
                @endphp
                <button type="submit" hidden id="form-submit"></button><!-- 表單內結帳資訊 -->
                <div class="d-flex flex-column align-items-end justify-content-end  bgc-yellow-2  cart-bottom  ">
                    <div style="width: 328px;max-width:100%">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class=" mr-2 ">數量</span>
                            <span id="qty-total">{{  $numberCount }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class=" mr-2 ">運費</span>
                            <span id="shipping">NT$ {{ $shipping_fee }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class=" mr-2 ">小計</span>
                            <span id="sub-total">NT$ {{$subTotal }}</span>
                        </div>
                        <div class="w-100 py-2">
                            <div style="background-color: black;height:1px;"></div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="">訂單總計</span>
                            <span id="total">NT$ {{$subTotal+  $shipping_fee }}</span>
                        </div>
                    </div>
                </div>
                <div class="bgc-gray-3"
                    style="height: 40px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                </div>
            </form>


            <div class="d-flex justify-content-between pt-4 pb-3 px-4">
                <a href="{{ asset('cart/step2') }}">
                    <div class="back-btn px-3 py-2"><i class="fas fa-chevron-left mr-2"></i>上一步</div>
                </a>

                <label for="form-submit">
                    <div class="next-btn  px-3 py-2 ">下一步<i class="fas fa-chevron-right ml-2"></i></div>
                </label>
            </div>
        </div>
    </section>
</main>

@endsection


@section('js')
<script src="/js/frontpage/tw-city-selector.js"></script>
<script>
    new TwCitySelector({
            el: '.city-selector-set',
            elCounty: '.county', // 在 el 裡查找 element
            elDistrict: '.district', // 在 el 裡查找 element
            elZipcode: '.zipcode' // 在 el 裡查找 element
        });
</script>
@endsection
