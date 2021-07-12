@extends('template.template')

@section('page-title','產品細節')

@section('css')
<link rel="stylesheet" href="/css/frontpage/news/news_detail.css">
@endsection


@section('main')
<main class="bgc-gray position-relative">
    <div class="btm-gray-block bgc-yellow"></div>
    <div class="top-gray-block"></div>
    <section class="news-detail w-100">
        <div class="container-fluid p-0 detail-container row mx-auto no-gutters">
            <div class="col-12 news-title-area">
                <div class="news-type">{{ $new->type->type_name }}</div>
                <div class="news-title">{{ $new->title }}</div>
            </div>
            <div class="col-xl-8 col-lg-6 news-img w-100">
                <a href="{{ asset($new->img) }}" data-lightbox="news-img"
                   ><img src="{{ asset($new->img) }}" alt=""></a>


            </div>
            <div class="col-xl-4 col-lg-6 news-text pl-lg-5 px-lg-0 px-3 d-flex flex-column justify-content-around">
                <div class="time">時間：<Span>{{ $new->date }}</Span></div>
                <div class="discript">{!! $new->description !!}</div>
               <div class="price text-right">{{ $new->remarks }}</div>

            </div>

        </div>

    </section>

</main>
@endsection


@section('js')
@endsection
