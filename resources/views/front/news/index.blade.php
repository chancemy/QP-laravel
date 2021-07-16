@extends('template.template')

@section('page-title','最新消息')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="/css/frontpage/news/news.css">
@endsection


@section('main')
<body class="loading-news">
    <div class="loading"></div>
    <main>
        <div class="container-fluid p-0">
            <div class="block-a">
                <div class="row no-gutters">
                    <div class="col-12 news">
                        <div>News</div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="row no-gutters news-type">
                            <div class="col-4 col-sm-2 col-md-12 type-frame ">
                                <a  href="{{ asset('/newsIndex?type_id=') }}{{ 0 }}"
                                {{ $typeId }}
                                class="current @if ($typeId ==  0)checked border-checked @endif type  ">查看全部</a>
                            </div>
                            @foreach ($newsTypes as $newsType)
                            @if (count($newsType->news) != 0)
                                <div class="col-4 col-sm-2 col-md-12 type-frame ">
                                    <a  href="{{ asset('/newsIndex?type_id=') }}{{ $newsType->id }}"
                                    class="current type @if ($typeId ==  $newsType->id )checked border-checked @endif">{{ $newsType->type_name }}</a>
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-9 swiper-frame" id="tag-swiper">
                        <!-- Slider main container -->
                        @php
                            $newsLength = count($news); // 計算最新消息資料長度
                            $sliderQty = ceil($newsLength/6) ; // 計算電腦版 slide 數量
                            $newsKey = 0; // 最新消息索引值
                            $pcSlide = 0; // 電腦版 slide 計算
                            $mobileSlide = 0; //手機板 slide 計算
                        @endphp
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @foreach ($news as $new)
                                    <!-- Slides -->
                                    @php
                                        $mod =  $newsKey % 6;
                                    @endphp
                                    @if ($mod == 0)
                                    <div class="swiper-slide pc-slide ">
                                        <div class="row no-gutters">
                                    @endif
                                            <div class="col-6 col-md-4 news-frame">
                                                <a class="current" href="{{ asset('/newsdetail') }}/{{ $new->id }}">
                                                    <div class="line-frame">
                                                        <div class="description">
                                                            <div class="row no-gutters">
                                                                <div class="col-12">
                                                                    <div class="type">{{ $new->type->type_name??'' }}</div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="title">{{ $new->title??'' }}</div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div data-summerNote="{{ $new->description??'' }}"
                                                                        class="content summer-note">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($newsKey == (2+($pcSlide)*6))
                                                        <div class="right"></div>
                                                        @endif
                                                        @if ($newsKey == (3+($pcSlide)*6) || $newsKey == (4+($pcSlide)*6))
                                                        <div class="down"></div>
                                                        @endif
                                                        @if ($newsKey == (5+($pcSlide)*6) )
                                                        <div class="right"></div>
                                                        <div class="down"></div>
                                                        @endif
                                                        <div class="photo" style="background-image: url('{{ $new->img??'' }}')">
                                                        </div>
                                                        <div class="top"></div>
                                                        <div class="left"></div>
                                                        <div class="">
                                                            @php
                                                            $date = explode('-',$new->date);
                                                            $mm = $date[1];
                                                            $dd = $date[2];
                                                            $Month_Englesh = array(
                                                            '01' => "JAN",
                                                            '02' => "FEB",
                                                            '03' => "MAR",
                                                            '04' => "APR",
                                                            '05' => "MAY",
                                                            '06' => "JUN",
                                                            '07' => "JUL",
                                                            '08' => "AUG",
                                                            '09' => "SEP",
                                                            '10' => "OCT",
                                                            '11' => "NOV",
                                                            '12' => "DEC");
                                                            @endphp
                                                            <div class="row no-gutters month">
                                                                <div class="col-4 month-text">
                                                                    <span>{{ $Month_Englesh[$mm]??'' }}</span>
                                                                </div>
                                                                <div class="col-3 date-text">
                                                                    <span>{{ $dd??'' }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @if ($newsKey + 1 == $newsLength)
                                                @for ($i = $newsKey + 1; $i <= 5 + ($pcSlide*6); $i++)
                                                <div class="col-6 col-md-4 news-frame">
                                                    <div class="line-frame">
                                                        <div class="description">
                                                            <div class="row no-gutters">
                                                                <div class="col-12">
                                                                    <div class="type"></div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="title"></div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div data-summerNote=""
                                                                        class="content summer-note">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($i == (2+($pcSlide)*6))
                                                        <div class="right"></div>
                                                        @endif
                                                        @if ($i == (3+($pcSlide)*6) || $i == (4+($pcSlide)*6))
                                                        <div class="down"></div>
                                                        @endif
                                                        @if ($i == (5+($pcSlide)*6) )
                                                        <div class="right"></div>
                                                        <div class="down"></div>
                                                        @endif
                                                        <div class="photo" style="background-image: url('')">
                                                        </div>
                                                        <div class="top"></div>
                                                        <div class="left"></div>
                                                        <div class="">
                                                            <div class="row no-gutters month">
                                                                <div class="col-4 month-text">
                                                                    <span></span>
                                                                </div>
                                                                <div class="col-3 date-text">
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endfor
                                            @endif
                                    @if ($newsKey == 5 + ($pcSlide * 6) || $newsKey + 1 == $newsLength)
                                        </div>
                                    </div>
                                    @php
                                        $pcSlide ++;
                                    @endphp
                                    @endif
                                    @php
                                        $newsKey ++ ;
                                    @endphp
                                @endforeach
                                @foreach ($news as $new)
                                <!-- Slides -->
                                @php
                                    $mobileSlide ++;
                                @endphp
                                <div class="swiper-slide mobile-slide">
                                    <div class="row no-gutters center">
                                        <div class="col-12 col-md-4 news-frame">
                                            <a class="current" href="{{ asset('/newsdetail') }}/{{ $new->id }}">
                                                <div  class="line-frame">
                                                    <div class="description">
                                                        <div class="row no-gutters">
                                                            <div class="col-12">
                                                                <div class="type">{{ $new->type->type_name }}</div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="title">{{ $new->title }}</div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div data-summerNote="{{ $new->description??'' }}"
                                                                    class="content summer-note">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="photo" style="background-image: url({{ $new->img }})"></div>
                                                    <div class="top"></div>
                                                    <div class="left"></div>
                                                    <div class="right"></div>
                                                    <div class="down"></div>
                                                    <div class="">
                                                        @php
                                                        $date = explode('-',$new->date);
                                                        $mm = $date[1];
                                                        $dd = $date[2];
                                                        $Month_Englesh = array(
                                                        '01' => "JAN",
                                                        '02' => "FEB",
                                                        '03' => "MAR",
                                                        '04' => "APR",
                                                        '05' => "MAY",
                                                        '06' => "JUN",
                                                        '07' => "JUL",
                                                        '08' => "AUG",
                                                        '09' => "SEP",
                                                        '10' => "OCT",
                                                        '11' => "NOV",
                                                        '12' => "DEC");
                                                        @endphp
                                                        <div class="row no-gutters month">
                                                            <div class="col-4 month-text">
                                                                <span>{{ $Month_Englesh[$mm]??'' }}</span>
                                                            </div>
                                                            <div class="col-3 date-text">
                                                                <span>{{ $dd??'' }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination">
                            <div class="page-frame" data-slideQty="{{ $sliderQty }}">
                            </div>
                            <div class="mobile-page-frame" data-mobileSlide="{{  $mobileSlide }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="back-group">
            <div class="white-div"></div>
        </div>
    </main>
</body>
@endsection


@section('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/js/frontpage/news.js"></script>
    <script>
        //去除summernote的標籤
    var summerNotes = document.querySelectorAll('.summer-note');
    summerNotes.forEach(function(summerNote){
        let description =  summerNote.getAttribute('data-summerNote');
        let cleanText = description.replace(/<[^>]+>/ig, '');
        cleanText = cleanText.replace(/[ ]|[&nbsp;]/g, '',"");
        summerNote.innerHTML = cleanText ;
    });
    </script>
@endsection
