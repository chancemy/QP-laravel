@extends('layouts.app')
@section('title','新增最新消息')
@section('css')

@endsection
@section('content')
<main>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">後臺管理首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('admin/news') }}">最新消息管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">新增最新消息</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <h2>新增消息</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/admin/news/item/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="type" class="col-md-2 col-form-label text-md-right">分類</label>

                        <div class="col-md-10">
                            <select class="form-control" id="type_name" name="type_id">
                                @foreach ($newsTypes as $newsType)
                                <option value="{{  $newsType->id }}">{{ $newsType->type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label text-md-right">日期</label>

                        <div class="col-md-10">
                            <input id="date" type="date" class="form-control" name="date" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-right">標題</label>

                        <div class="col-md-10">
                            <input id="title" type="text" class="form-control" name="title" required >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img" class="col-md-2 col-form-label text-md-right">圖片</label>

                        <div class="col-md-10">
                            <input type="file" name="img" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="summernote" class="col-md-2 col-form-label text-md-right">描述</label>

                        <div class="col-md-10">
                            <textarea id="summernote" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="remarks" class="col-md-2 col-form-label text-md-right">備註</label>

                        <div class="col-md-10">
                            <textarea class="form-control" id="remarks" name="remarks" rows="2" required></textarea>
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
{{-- dataTable --}}
<script>
    $(document).ready(function() {
            $('#example').DataTable();
        } );
</script>
{{-- summernote --}}
<script>
    $('#summernote').summernote({
      placeholder: '所見及所得',
      tabsize: 2,
      height: 300
    });
</script>

@endsection
