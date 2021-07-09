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
                            <li class="type-btn checked" data-type="0"><span>查看全部</span></li>
                            @foreach ($types as $type)
                            <li class="type-btn" data-type="{{ $type }}"><span>{{ $type }}</span>
                                <ul class="item-btn hide">
                                    @foreach ($product_types as $product_type)
                                    @if ($product_type->type == $type)
                                    <li class="catagory-btn" data-id="{{ $product_type->id }}">
                                        {{ $product_type->type_name }}</li>
                                    @endif
                                    @endforeach


                                </ul>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 w-100 product-list-area p-lg-3 p-0 d-flex flex-wrap">
                    @foreach ($products as $product)
                    <div class="p-sm-4 p-3 product-container mb-3" data-type="{{ $product->type->type }}" data-typeid="{{ $product->type_id }}">
                        <a href="{{ asset('/product/detail') }}/{{ $product->id }}">
                            <div class="img-container">
                                <img src="{{ $product->img }}" alt="">
                            </div>
                            <div><span class="mr-4">{{ $product->name }}</span> / <span class="ml-4">NT
                                    ${{ $product->price }}</span><i class="ml-4 fas fa-chevron-right"></i>

                            </div>
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
</main>
@endsection


@section('js')
<script src={{ asset("/js/frontpage/product.js") }}></script>

@endsection
