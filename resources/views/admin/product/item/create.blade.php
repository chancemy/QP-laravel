@extends('layouts.app')
@section('title','後臺管理首頁')
@section('css')
<style>
    .form-area {
        width: 75%;

    }

    @media(max-width:768px) {
        .form-area {
            width: 100%;
        }
    }
</style>

@endsection
@section('content')
<main>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('admin/product/item') }}">產品類別管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">新增產品</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <h2>新增產品</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/admin/product/item/store') }}" enctype="multipart/form-data"
                    class="w-75 mx-auto">
                    @csrf
                    <div class="form-group">
                        <label for="type_id" class=" text-md-right">分類</label>

                        <div>
                            <select class="form-control" id="type" name="type_id">
                                @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->type }}-{{ $type->type_name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-form-label text-md-right">品名</label>

                        <div>
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="price" class="col-form-label text-md-right">價錢</label>

                            <div>
                                <input id="price" type="number" class="form-control" name="price" required autofocus>
                            </div>
                        </div>
                        <div class="col-6">

                            <label for="unit" class="col-form-label text-md-right">單位</label>

                            <div>
                                <input id="unit" type="text" class="form-control" name="unit" required autofocus placeholder="六吋、八吋、盒、個">
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="start_date" class="col-form-label text-md-right">開始販售日期</label>

                            <div>
                                <input id="start_date" type="date" class="form-control" name="start_date" autofocus>
                            </div>

                        </div>
                        <div class="col-6">
                            <label for="end_date" class="col-form-label text-md-right">結束販售日期</label>

                            <div>
                                <input id="end_date" type="date" class="form-control" name="end_date" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="img" class=" col-form-label text-md-right">產品主要圖片</label>

                        <div>
                            <input id="img" type="file" name="img" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="photos[]" class=" col-form-label text-md-right">產品其他圖片</label>

                        <div>
                            <input id="photos[]" type="file" name="photos[]"  multiple>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-form-label text-md-right" for="discript">描述</label>
                        <textarea required class="w-100" name="discript" id="discript" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="content" class=" col-form-label text-md-right">內容物</label>

                        <div>
                            <textarea required id="content" name="content"></textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                新增
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
@section('js')
{{-- summernote --}}
<script>
    $('#content').summernote({
      placeholder: '所見及所得',
      tabsize: 2,
      height: 300
    });
</script>

@endsection
