@extends('template.template')

@section('page-title','產品細節')


@section('css')
<link rel="stylesheet" href="/css/frontpage/product/detail.css">
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
            <div class="col-lg-6 pr-lg-4 d-flex flex-column m-lg-0 mb-4">
                <div
                    class="w-100 mb-3 product-title d-flex align-items-lg-end justify-content-lg-start align-items-center justify-content-center">
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
            <div class="col-lg-6 pl-lg-4 d-flex flex-column m-lg-0 mt-4 position-relative">

                <div class="product-type pb-2">{{ $record->type->type }}</div>
                <div>
                    <div class="title-area d-flex justify-content-center align-items-center">
                        NT$ {{ $record->price }} / {{ $record->unit }}
                    </div>
                    <div class="bgc-yellow-2 p-lg-5 p-4">
                        <p style="color: #333333;">
                            {{ $record->discript }}</p>
                    </div>
                    <div class="title-area d-flex justify-content-center align-items-center">

                        內容物
                    </div>
                    <div class="bgc-yellow-2 p-lg-5 p-4 content">
                        {!! $record->content !!}
                    </div>
                    <div class="bar"></div>
                    <div class="bgc-yellow-2 p-4 d-flex justify-content-around">
                        <div class="d-flex"><label for="number-select"></label>
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
                        <div class="cart-btn py-1 px-4">
                            加入購物車 <i class="fas fa-chevron-right"></i>


                        </div>
                    </div>
                    <div class="time text-right">販售期間 :
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
<script src="/js/frontpage/product_detail.js"></script>
@endsection
