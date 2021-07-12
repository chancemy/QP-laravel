@extends('template.template')

@section('page-title','關於我們')

@section('css')
<link rel="stylesheet" href="/css/frontpage/aboutUs/aboutUs.css">
{{-- <link rel="stylesheet" href="/css/template.css"> --}}
<link rel="stylesheet" href="/font-cssstyle/font-style-guide.css">
@endsection


@section('main')
<main class="move-down">
    <div class="container-fluid p-0 ">
        <div class="block-a d-flex flex-wrap align-content-center justify-content-between section-about"
            style="background-color:#e6e3e0;">
            <div class="img p-0"></div>

            <div class="text-frame d-flex row">
                <div class="aaa " style="background-color: #f4f3ef;">
                    <h1 class="about col-12">About</h1>
                </div>
                <div class="content ">
                    <div class="row no-gutters">
                        <h1 class="us position-relative">Us
                            <p class="text2 position-absolute">
                                名字或許在時間的的罅隙中溜走、在語言的罅隙中溜走，迷人的風味卻牢牢鐫刻在記憶裡。
                            </p>
                        </h1>
                        <p class="col-11 text ">
                            名字或許在時間的的罅隙中溜走、在語言的罅隙中溜走，迷人的風味卻牢牢鐫刻在記憶裡。
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="mask">
                <div class="white"></div>
                <div class="gray"></div>
            </div> --}}
        </div>


        <div class="block-b" style=" background-color: #e6e3e0;">
            <div class="img"></div>
            <div class="content">
                <div class="title">
                    Lai 和 Jiou Jiou 在法國知名的斐杭迪廚藝學校相遇，因志同道合回台後聯手編織甜點夢。
                </div>
            </div>
            <div class="bg">
                <div class="title mx-auto">
                    Lai 和 Jiou Jiou 在法國知名的斐杭迪廚藝學校相遇，因志同道合回台後聯手編織甜點夢。
                </div>
                <h1 class="feature col-12">
                    Feature
                </h1>
                <div class="img-bs"></div>
                <div class="text-s-out">
                    <div class="text-s">
                        非必要絕不多加裝飾的簡練感，如絲綢般滑順閃耀的鏡面淋醬，比起華麗水果裝飾，散發出有如巴黎貴婦般迷人魅力。
                    </div>
                </div>
            </div>
            <div class="down ">
                <div class="img-bb  p-0"></div>
                <h1 class="feature2  p-0">Feature </h1>
                <div class="text-b">
                    非必要絕不多加裝飾的簡練感，如絲綢般滑順閃耀的鏡面淋醬，比起華麗水果裝飾，散發出有如巴黎貴婦般迷人魅力。
                </div>
            </div>

            {{-- <div class="img"></div>
            <div class="text">
                將台灣的茶融入甜點中，結合中西、展現創意。除了鐵觀音巧克力塔、葡萄柚東方美人等等，還有許多各種冒險性質意味濃厚的嘗試。
            </div> --}}
        </div>

        <div class="b-4">
            <div class="img"></div>
            <div class="text7">
                將台灣的茶融入甜點中，結合中西、展現創意。除了鐵觀音巧克力塔、葡萄柚東方美人等等，還有許多各種冒險性質意味濃厚的嘗試。
            </div>
        </div>
        {{-- <div class="bg2">
              <div class="row no-gutters">
                <div class="img"></div>
            </div>
        </div>
        <div class="text-frame">
            <div class="text">
                將台灣的茶融入甜點中，結合中西、展現創意。除了鐵觀音巧克力塔、葡萄柚東方美人等等，還有許多各種冒險性質意味濃厚的嘗試。
            </div>
        </div> --}}

        {{-- <h1 class="title2 col-12">
                Feature
                <div class="text4">
                    非必要絕不多加裝飾的簡練感，如絲綢般滑順閃耀的鏡面淋醬，比起華麗水果裝飾，散發出有如巴黎貴婦般迷人魅力。
                </div>
            </h1> --}}
    </div>
    {{-- <div class="img-bg">
            <div class="img3"></div>
            <div class="col-12">
                <div class="text2">非必要絕不多加裝飾的簡練感，如絲綢般滑順閃耀的鏡面淋醬，比起華麗水果裝飾，散發出有如巴黎貴婦般迷人魅力。</div>
            </div>
        </div> --}}
    </div>

    </div>
    {{-- <div class="block-c " style=" background-color: #e6e3e0;">
            <div class="triangle"></div>
            <div class="row no-gutters">
                <div class="col-12 col-lg-6 title-frame order-md-2">
                    <div class="row no-gutters ">
                        <div class="col-lg-12">
                            <h1 class="title">
                                Feature
                            </h1>
                        </div>
                        <div class="col-lg-12">
                            <div class="text">
                                非必要絕不多加裝飾的簡練感，如絲綢般滑順閃耀的鏡面淋醬，比起華麗水果裝飾，散發出有如巴黎貴婦般迷人魅力。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 img-frame order-md-1"style=" background-color: #e6e3e0;">
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
        </div> --}}
    <div class="block-d">
        {{-- <div class="row no-gutters">
                <div class="img"></div>
                <div class="text-frame">
                    <div class="text">
                        將台灣的茶融入甜點中，結合中西、展現創意。除了鐵觀音巧克力塔、葡萄柚東方美人等等，還有許多各種冒險性質意味濃厚的嘗試。
                    </div>
                </div>
                <div class="mask">
                    <div class="triangle"></div>
                </div>
            </div> --}}
    </div>
    </div>
</main>
@endsection


@section('js')

@endsection
