@extends('template.template')

@section('page-title',$record->name)

@section('css')

<link rel="stylesheet" href="{{ asset('/css/frontpage/product/detail.css') }}">

@endsection


@section('main')
<main class="bgc-gray position-relative">
    <section class="w-100 product-detail d-lg-flex align-items-center">

        <div class="bgc-white-block"></div>
        <div class="bgc-white-block-down"></div>
        <div class="container-fluid row no-gutters detail-container mx-auto position-relative">
            <div class="product-logo">
                <img src="/img/frontpage/product/detail/logo.png" alt="">
            </div>
            <div class="col-lg-6 pr-lg-4 d-flex flex-column photo-area">
                <div
                    class="w-100 mb-3 product-title d-flex align-items-lg-end justify-content-lg-start align-items-center text-center justify-content-center">
                    {{ $record->name }}</div>
                <div class="w-100 row no-gutters product-img flex-column-reverse flex-lg-row">
                    <div class="col-lg-2 w-100 d-flex flex-lg-column-reverse flex-row img-small pr-lg-4 pt-3">
                        <div class="product-imgs  mt-lg-4 mr-2">
                            <div class="img-container">
                                <div class="mask"></div>
                                <img data-src="{{ $record->img }}" src="{{ $record->img }}" alt="">
                            </div>
                        </div>
                        @if ($record->photos)
                        @foreach ($record->photos as $photo)


                        <div class="product-imgs  mt-lg-4 mr-2">
                            <div class="img-container">
                                <div class="mask"></div>
                                <img data-src="{{ $photo->photo }}" src="{{ $photo->photo }}" alt="">
                            </div>
                        </div>
                        @endforeach
                        @endif



                    </div>
                    <div class="col-lg-10 w-100 img-big">

                        <img src="{{ $record->img }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-4 d-flex flex-column position-relative">

                <div class="product-type mb-2">{{ $record->type->type }}</div>
                <div>
                    <div class="title-area d-flex justify-content-center align-items-center">
                        NT$ {{ $record->price }} / {{ $record->unit }}
                    </div>
                    <div class="bgc-yellow-2 p-lg-5 p-4">
                        <p style="color: #333333;">
                            {{ $record->discript }}</p>
                    </div>
                    <div class="title-area d-flex justify-content-center align-items-center">
                        備註
                    </div>
                    <div class="bgc-yellow-2 p-lg-5 p-4 content " >
                        <div style="position: relative;z-index:60;">{!! $record->content !!}</div>

                    </div>
                    <div class="bar"></div>
                    <div class="bgc-yellow-2 p-4 d-flex justify-content-around align-items-center flex-wrap">
                        <div class="d-flex align-items-center"><label for="number-select"></label>
                            <p class="mr-2">數量</p>
                            </label>
                            <div class="select-div">
                                <select class="quantity-select" name="quantity" id="number-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                        </div>

                        <div data-id="{{ $record->id }}" class="d-flex align-items-center justify-content-center cart-btn py-1 px-4">
                            加入購物車 <i class="fas fa-chevron-right ml-2"></i>


                        </div>
                    </div>
                    <div class="time text-right mt-2">販售期間 :
                        @if ($record->type->type == '固定菜單')
                        無限期
                        @else
                        {{ $record->start_date }} ~ {{ $record->end_date }}
                        @endif

                    </div>


                </div>
            </div>
        </div>
    </section>

</main>
@endsection


@section('js')


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('/js/frontpage/product_detail.js') }}"></script>
<script>
    var cartBtn = document.querySelector('.cart-btn');
//加入購物車
cartBtn.onclick = function (e) {
    let productId = this.dataset.id;
    let formData = new FormData();
    let qty = document.querySelector('.quantity-select').value;
    let cartCheck = '<?php echo \Cart::get($record->id) ?>'
    formData.append('_token', '{{ csrf_token() }}');
    formData.append('productId', productId);
    formData.append('quantity', qty);
    if (cartCheck!='') {
        swal({
            title: "購物車內已經有此商品",
            text: "是否重新加入購物車？",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (!willDelete) {
                return swal("已取消！");
            } else {

                fetch('/cart/add', {
                    'method': 'post',
                    'body': formData,
                }).then(function (response) {
                    return response.text();
                }).then(
                    function (result) {
                        if (result == 'update-success') {
                            swal({
                                title: "更新成功！",
                                text: "已更新購物車內產品數量",
                                icon: "success",
                                button: "確認",
                            });
                        } else if (result == 'success') {
                            swal({
                                title: "加入成功！",
                                text: "已經放入購物車",
                                icon: "success",
                                button: "確認",
                            });
                        }else if (result == 'fail') {
                            swal({
                                title: "加入失敗！",
                                text: "並非此商品販售期間！",
                                icon: "warning",
                                button: "確認",
                            });
                }
                    }
                )
            }
        });
    } else {
        fetch('/cart/add', {
            'method': 'post',
            'body': formData,
        }).then(function (response) {
            return response.text();
        }).then(

            function (result) {
                if (result == 'update-success') {
                    swal({
                        title: "加入成功！",
                        text: "已更新購物車內產品數量",
                        icon: "success",
                        button: "確認",
                    });
                } else if (result == 'success') {
                    swal({
                        title: "加入成功！",
                        text: "已經放入購物車",
                        icon: "success",
                        button: "確認",
                    });
                }else if (result == 'fail') {
                    swal({
                        title: "加入失敗！",
                        text: "此商品並非販售期間！",
                        icon: "warning",
                        button: "確認",
                    });
                }
            }
        )

    }
}


</script>



@endsection
