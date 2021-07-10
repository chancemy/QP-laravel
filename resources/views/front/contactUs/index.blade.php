@extends('template.template')

@section('page-title','聯絡我們')

@section('css')
<link rel="stylesheet" href="/css/frontpage/contactUs/contactUs.css">
@endsection


@section('main')
<main class="bgc-gray position-relative">
    <section class="w-100 contactus-detail d-lg-flex align-items-center">

        <div class="bgc-white-block"></div>
        <div class="bgc-white-block-down"></div>
        <div class="container-fluid row no-gutters detail-container mx-auto position-relative">

            <div class="col-lg-6 pr-lg-4 d-flex flex-column m-lg-0 mb-4">
                <div
                    class="w-100 mb-3 contactus-title d-flex align-items-lg-end justify-content-lg-start align-items-center justify-content-center">
                    客製化商品
                </div>
                <div class="w-100 row no-gutters contactus-img flex-column-reverse flex-lg-row">
                    <div class="col-lg-11 w-100 img-big1"></div>
                    <div class="col-lg-11 w-100 img-big2"></div>
                </div>
            </div>


            <!-- 卡體 -->
            <div class="col-lg-6 pl-lg-4 d-flex flex-column m-lg-0 mt-4 position-relative">
                <div class="title-area d-flex justify-content-center align-items-center">
                    項目內容
                </div>
                <div class="bgc-yellow-2 p-lg-5 p-4 col-12">
                    <p style="color: #333333;">客製化商品包含外匯、造型聖多諾黑、婚禮禮盒及彌月禮盒。</p>
                </div>
                <div class="title-area d-flex justify-content-center align-items-center">
                    聯絡我們
                </div>
                <!-- 回饋 -->
                <form action="{{ asset('contactus/store') }}" method="POST"
                    class="introduce-container d-flex bg-white justify-content-end">
                    @csrf
                    <div class="bgc-yellow-2 p-lg-5 p-4 content col-12">
                        <!-- 姓名、電話 -->
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="mb-1">姓名</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="md-form mb-0">
                                    <label for="phone" class="mb-1">電話</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- 填入信箱 -->
                        <div class="row  mb-3">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="email" class="mb-1">信箱</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- 填入主旨 -->
                        <div class="row  mb-3">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="mb-1">主旨</label>
                                    <input type="text" id="subject" name="subject" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!--內文-->
                        <div class="row  mb-3">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message" class="mb-1">內文</label>
                                    <textarea type="text" id="message" name="message" rows="4"
                                        class="form-control md-textarea"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- 送出按鈕 -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3"
                            style=" background-color: #85a596;">
                            送出
                        </button>

                        <!-- 提醒 -->
                        <p class="fs-6" style="line-height: 1rem; margin-bottom: 0;color: rgb(103,111,123);">
                            請確認您的聯絡方式是否填寫正確。
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

@endsection


@section('js')

@endsection
