@extends('template.template')

@section('page-title','最新消息')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="/css/frontpage/news/news.css">
@endsection


@section('main')

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
<<<<<<< Updated upstream
                $sliderQty = ceil(count($news)/6) ;
                $newsLength = count($news);
                $newsKey = 0;
                // dd( $sliderQty);
                // $news[$key]->title
=======
                    $sliderQty = ceil(count($news)/6) ;
                    $newsLength = count($news);
                    $newsKey = 0;
>>>>>>> Stashed changes
                @endphp
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" data-newsLength="{{ count($news) }}" data-newsKey="">
                        <!-- Slides -->
<<<<<<< Updated upstream
                        <div class="swiper-slide">
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
=======
                        @for ($i = 0; $i < $sliderQty; $i++)
                        <div class="swiper-slide">
                            <div class="row no-gutters">
                                @for ($key = $newsKey; $key < $newsLength ; $key++)
                                    @if ($key > (5 +(($sliderQty-2)*6))&&($sliderQty>1))
                                        @php
                                            $newsKey = 6 + (($sliderQty-2)*6);
                                        @endphp
                                        @break
                                    @endif
                                    <div class="col-6 col-md-4 news-frame" data-newsKey="{{ $newsKey }}">
                                        <div class="line-frame">
                                            <div class="description">
                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div class="type">{{ $news[$key]->type->type_name }}</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="title">{{ $key }}</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div data-summerNote="{{ $news[$key]->description }}"
                                                            class="content summer-note">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($key == 2)
                                            <div class="right"></div>
                                            @endif
                                            @if ($key == 3 || $key == 4)
                                            <div class="down"></div>
                                            @endif
                                            @if ($key == 5 )
                                            <div class="right"></div>
                                            <div class="down"></div>
                                            @endif
                                            <div class="photo" style="background-image: url('{{ $news[$key]->img }}')">
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
                                                        <span>{{ $Month_Englesh[$mm] }}</span>
                                                    </div>
                                                    <div class="col-3 date-text">
                                                        <span>{{ $dd }}</span>
                                                    </div>
>>>>>>> Stashed changes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<<<<<<< Updated upstream
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
                        </div>
=======
                                    @endfor
                            </div>
                        </div>
                        @endfor
>>>>>>> Stashed changes
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
@endsection


@section('js')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<<<<<<< Updated upstream
<script src="/js/frontpage/news.js"></script>
<script>
=======

<script>
    // var mySwiper = document.querySelector('.swiper-wrapper');
    // var newsLength = mySwiper.getAttribute('data-newsLength');
    // console.log(newsLength);
    // var sliderQty =  Math.ceil(newsLength/6);
    // console.log(sliderQty);
    // for (let slider = 0; slider < sliderQty; slider++) {
    //     mySwiper.innerHTML +=
    //     `
    //     <div class="swiper-slide">
    //         <div class="row no-gutters">
    //             @php
    //                 if($newsKey != 0){
    //                     dd($newsKey);
    //                 }
    //             @endphp
    //             @for ($key = $newsKey; $key < $newsLength ; $key++)
    //                 @if ($key > (5 +(($sliderQty-2)*6))&&($sliderQty>1))
    //                     @php
    //                         $newsKey = 6 + (($sliderQty-2)*6);
    //                     @endphp
    //                     @break
    //                 @endif
    //                 <div class="col-6 col-md-4 news-frame" data-newsKey="{{ $newsKey }}">
    //                     <div class="line-frame">
    //                         <div class="description">
    //                             <div class="row no-gutters">
    //                                 <div class="col-12">
    //                                     <div class="type">{{ $news[$key]->type->type_name }}</div>
    //                                 </div>
    //                                 <div class="col-12">
    //                                     <div class="title">{{ $key }}</div>
    //                                 </div>
    //                                 <div class="col-12">
    //                                     <div data-summerNote="{{ $news[$key]->description }}"
    //                                         class="content summer-note">
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                         @if ($key == 2)
    //                         <div class="right"></div>
    //                         @endif
    //                         @if ($key == 3 || $key == 4)
    //                         <div class="down"></div>
    //                         @endif
    //                         @if ($key == 5 )
    //                         <div class="right"></div>
    //                         <div class="down"></div>
    //                         @endif
    //                         <div class="photo" style="background-image: url('{{ $news[$key]->img }}')">
    //                         </div>
    //                         <div class="top"></div>
    //                         <div class="left"></div>
    //                         <div class="">
    //                             @php
    //                             $date = explode('-',$news[$key]->date);
    //                             $mm = $date[1];
    //                             $dd = $date[2];
    //                             $Month_Englesh = array(
    //                             '01' => "JAN",
    //                             '02' => "FEB",
    //                             '03' => "MAR",
    //                             '04' => "APR",
    //                             '05' => "MAY",
    //                             '06' => "JUN",
    //                             '07' => "JUL",
    //                             '08' => "AUG",
    //                             '09' => "SEP",
    //                             '10' => "OCT",
    //                             '11' => "NOV",
    //                             '12' => "DEC");
    //                             @endphp
    //                             <div class="row no-gutters month">
    //                                 <div class="col-4 month-text">
    //                                     <span>{{ $Month_Englesh[$mm] }}</span>
    //                                 </div>
    //                                 <div class="col-3 date-text">
    //                                     <span>{{ $dd }}</span>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 @endfor
    //         </div>
    //     </div>
    //     `

    // }
>>>>>>> Stashed changes
    //去除summernote的標籤
    var summerNotes = document.querySelectorAll('.summer-note');
    summerNotes.forEach(function(summerNote){
        let description =  summerNote.getAttribute('data-summerNote');
        let cleanText = description.replace(/<[^>]+>/ig, '');
        cleanText = cleanText.replace(/[ ]|[&nbsp;]/g, '',"");
        summerNote.innerHTML = cleanText ;
    });

</script>
<<<<<<< Updated upstream
=======
<script src="/js/frontpage/news.js"></script>
>>>>>>> Stashed changes

@endsection



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
{{-- <div class="swiper-slide">
    <div class="row no-gutters">
        @php
            if($newsKey != 0){
                dd($newsKey);
            }
        @endphp
        @for ($key = $newsKey; $key < $newsLength ; $key++)
            @if ($key > (5 +(($sliderQty-2)*6))&&($sliderQty>1))
                @php
                    $newsKey = 6 + (($sliderQty-2)*6);
                @endphp
                @break
            @endif
            <div class="col-6 col-md-4 news-frame" data-newsKey="{{ $newsKey }}">
                <div class="line-frame">
                    <div class="description">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="type">{{ $news[$key]->type->type_name }}</div>
                            </div>
                            <div class="col-12">
                                <div class="title">{{ $key }}</div>
                            </div>
                            <div class="col-12">
                                <div data-summerNote="{{ $news[$key]->description }}"
                                    class="content summer-note">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($key == 2)
                    <div class="right"></div>
                    @endif
                    @if ($key == 3 || $key == 4)
                    <div class="down"></div>
                    @endif
                    @if ($key == 5 )
                    <div class="right"></div>
                    <div class="down"></div>
                    @endif
                    <div class="photo" style="background-image: url('{{ $news[$key]->img }}')">
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
                                <span>{{ $Month_Englesh[$mm] }}</span>
                            </div>
                            <div class="col-3 date-text">
                                <span>{{ $dd }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
    </div>
</div> --}}
