@extends('template.template')

@section('page-title','關於我們')

@section('css')
<link rel="stylesheet" href="/css/frontpage/aboutUs/aboutUs.css">
<link rel="stylesheet" href="/font-cssstyle/font-style-guide.css">
@endsection


@section('main')
<main class="move-down">
    <div class="container-fluid p-0">
        <div class="block-a">
            <div class="img"></div>
            <div class="text-frame">
                <div class="about">About</div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-3 col-md-5 us">Us</div>
                        <div class="col-2 "></div>
                        <div class="col-6 col-md-12 text">
                            名字或許在時間的的罅隙中溜走、在語言的罅隙中溜走，迷人的風味卻牢牢鐫刻在記憶裡。
                        </div>
                    </div>
                </div>
            </div>
            <div class="mask">
                <div class="white"></div>
                <div class="gray"></div>
            </div>
        </div>
        <div class="block-b">
            <div class="img"></div>
            <div class="content">
                <div class="title">
                    Lai 和 Jiou Jiou 在法國知名的斐杭迪廚藝學校相遇，因志同道合回台後聯手編織甜點夢。
                </div>
                <div class="mask">
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
        <div class="block-c">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 title-frame order-md-2">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="title">
                                Feature
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text">
                                非必要絕不多加裝飾的簡練感，如絲綢般滑順閃耀的鏡面淋醬，比起華麗水果裝飾，散發出有如巴黎貴婦般迷人魅力。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 img-frame order-md-1">
                    <div class="img"></div>
                </div>
                <div class="col-12 content">
                    <div class="text-frame">
                        <div class="text">
                            非必要絕不多加裝飾的簡練感，如絲綢般滑順閃耀的鏡面淋醬，比起華麗水果裝飾，散發出有如巴黎貴婦般迷人魅力。
                        </div>
                    </div>
                    <div class="mask">
                        <div class="triangle"></div>
                    </div>
                </div>
                <div class="mask">
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
        <div class="block-d">
            <div class="row no-gutters">
                <div class="img"></div>
                <div class="text-frame">
                    <div class="text">
                        將台灣的茶融入甜點中，結合中西、展現創意。除了鐵觀音巧克力塔、葡萄柚東方美人等等，還有許多各種冒險性質意味濃厚的嘗試。
                    </div>
                </div>
                <div class="mask">
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@section('js')

@endsection
