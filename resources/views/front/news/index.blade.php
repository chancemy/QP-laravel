@extends('template.template')

@section('page-title','產品細節')

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
                        @foreach ($newsTypes as $newsType)
                        <div class="col-2 col-md-12 type-frame ">
                            <div class="type  border-checked">{{ $newsType->type_name }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-9 swiper-frame">
                    <!-- Slider main container -->
                    @php
                        $sliderQty = ceil(count($news)/6) ;
                        $newsLength = count($news);
                        $newsKey = 0;
                    @endphp
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @for ($sliderNo = 0; $sliderNo < $sliderQty; $sliderNo++)
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="row no-gutters">
                                @if ($sliderNo == 1)
                                @endif
                                @for ($key = $newsKey; $key < ($key+6) ; $key++)
                                    @if ($key> (5 +(($sliderNo)*6)))
                                        @php
                                            $newsKey = 6 + (($sliderNo)*6);
                                        @endphp
                                        @break
                                    @endif
                                    <div class="col-6 col-md-4 news-frame">
                                        @if ($key<$newsLength)
                                            <div class="line-frame">
                                                <div class="description">
                                                    <div class="row no-gutters">
                                                        <div class="col-12">
                                                            <div class="type">{{ $news[$key]->type->type_name??'' }}</div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="title">{{ $key??'' }}</div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div data-summerNote="{{ $news[$key]->description??'' }}"
                                                                class="content summer-note">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($key == (2+($sliderNo)*6))
                                                <div class="right"></div>
                                                @endif
                                                @if ($key == (3+($sliderNo)*6) || $key == (4+($sliderNo)*6))
                                                <div class="down"></div>
                                                @endif
                                                @if ($key == (5+($sliderNo)*6) )
                                                <div class="right"></div>
                                                <div class="down"></div>
                                                @endif
                                                <div class="photo" style="background-image: url('{{ $news[$key]->img??'' }}')">
                                                </div>
                                                <div class="top"></div>
                                                <div class="left"></div>
                                                <div class="">
                                                    @php
                                                    $date = explode('-',$news[$key]->date);
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
                                        @else
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
                                            @if ($key == (2+($sliderNo)*6))
                                            <div class="right"></div>
                                            @endif
                                            @if ($key == (3+($sliderNo)*6) || $key == (4+($sliderNo)*6))
                                            <div class="down"></div>
                                            @endif
                                            @if ($key == (5+($sliderNo)*6) )
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
                                        @endif
                                    </div>
                                @endfor
                                </div>
                            </div>
                            @endfor
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
