
@extends('layouts.app')
@section('title','消息分類編輯')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">後臺管理首頁</a></li>
                        <li class="breadcrumb-item"><a href="{{ asset('admin/news/type') }}">消息分類管理</a></li>
                        <li class="breadcrumb-item active" aria-current="page">消息分類編輯</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">後臺管理首頁</h1>
                        <p class="card-text">歡迎</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ asset('admin/news') }}">編輯消息管理</a></li>
              <li class="breadcrumb-item active" aria-current="page">編輯最新消息</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>編輯消息</h2></div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/admin/news/type/update') }}/{{ $oldNewsType->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="type_name" class="col-md-1 col-form-label text-md-right" >分類</label>

                        <div class="col-md-10">
                            <input id="type_name" type="text" class="form-control" name="type_name"  value="{{ $oldNewsType->type_name }}"  required  autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                更新
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
