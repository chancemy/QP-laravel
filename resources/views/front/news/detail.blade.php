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
                <div class="news-type">活動預告</div>
                <div class="news-title">期間限定＿草莓紫蘇聖多諾黑</div>
            </div>
            <div class="col-xl-8 col-lg-6 news-img w-100">
                <a href="/img/frontpage/news/detail/2021-04-24_010728.jpg" data-lightbox="news-img"
                   ><img src="/img/frontpage/news/detail/2021-04-24_010728.jpg" alt=""></a>


            </div>
            <div class="col-xl-4 col-lg-6 news-text pl-lg-5 px-lg-0 px-3 d-flex flex-column justify-content-around">
                <div class="time">販售期間：22/01/01 ~ 22/02/21</div>
                <div class="discript">趁著草莓季，讓蛋糕櫃沐浴著草莓香，咬下一口，會驚艷草莓與紫蘇原來如此契合，淡淡的紫蘇提味卻不搶草莓風采。</div>
               <div class="price text-right">NT$ 260</div>

            </div>

        </div>

    </section>

</main>
@endsection


@section('js')

@endsection
