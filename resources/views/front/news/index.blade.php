@extends('template.template')

@section('page-title','最新消息')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="/css/frontpage/news/news.css">
@endsection


@section('main')
<main>
    <div class="container-fluid p-0">
        <div class="block-a">
            <div class="row no-gutters">
                <div class="col-12 news">
                    <div>News</div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="row no-gutters news-type">
                        <div class="col-2 col-md-12 type-frame ">
                            <div class="type checked border-checked">查看全部</div>
                        </div>
                        <div class="col-2 col-md-12 type-frame">
                            <div class="type ">活動預告</div>
                        </div>
                        <div class="col-2 col-md-12 type-frame">
                            <div class="type ">新品推出</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 swiper-frame">
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->

                            <div class="swiper-slide">
                                <div class="row no-gutters">
                                    @foreach ($news as $key => $new)
                                    <div class="col-6 col-md-4 news-frame">
                                        <div class="line-frame">
                                            <div class="description">
                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div class="type">{{ $new->type->type_name }}</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="title">{{ $new->title }}</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div data-summerNote="{{ $new->description }}"
                                                            class="content summer-note">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="photo"></div>
                                            <div class="top"></div>
                                            <div class="left"></div>
                                            <div class="">
                                                <div class="row no-gutters month">
                                                    <div class="col-4 month-text">
                                                        <span>APR</span>
                                                    </div>
                                                    <div class="col-3 date-text">
                                                        <span>30</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="pagination">
                        <div class="page-frame">
                            <div class="page-btn">1</div>
                            <div class="page-btn">2</div>
                            <div class="page-btn">3</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back-group">

            </div>
        </div>
    </div>
    <div class="back-group">
        <div class="white-div"></div>
    </div>
</main>
@endsection


@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/js/frontpage/news.js"></script>
<script>
    var summerNote = document.querySelector('.summer-note');
    var description =  summerNote.getAttribute('data-summerNote');
    cleanText = description.replace(/<\/?[^>]+(>|$)/g, "");
    console.log(cleanText);

</script>
@endsection

{{-- <div class="swiper-slide">
    <div class="row no-gutters">
        <div class="col-6 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="right"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="down"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="down"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="right"></div>
                <div class="down"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>10</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}

{{-- <div class="swiper-slide molble">
    <div class="row no-gutters center">
        <div class="col-12 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="right"></div>
                <div class="down"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="swiper-slide">
    <div class="row no-gutters center">
        <div class="col-12 col-md-4 news-frame">
            <div class="line-frame">
                <div class="description">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="type">活動預告</div>
                        </div>
                        <div class="col-12">
                            <div class="title">父親節限定蛋糕＿Longan</div>
                        </div>
                        <div class="col-12">
                            <div class="content">
                                這次父親節，特地選用了台南柴燒龍眼製作成慕斯，甘醇濃厚的紅水烏龍茶內餡，帶出淡淡的白蘭地酒香，多層次的口感在口中化開，嚥下後留下的是微微的龍眼甘甜，茶香味餘韻長存。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="photo"></div>
                <div class="top"></div>
                <div class="left"></div>
                <div class="right"></div>
                <div class="down"></div>
                <div class="">
                    <div class="row no-gutters month">
                        <div class="col-4 month-text">
                            <span>APR</span>
                        </div>
                        <div class="col-3 date-text">
                            <span>30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
