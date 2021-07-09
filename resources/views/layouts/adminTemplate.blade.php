@extends('layouts.app')
@section('title','後臺管理首頁')
@section('css')

@endsection
@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">後臺管理首頁</a></li>
                        <li class="breadcrumb-item active" aria-current="page">最新消息管理</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">最新消息管理</h1>
                        <button type="button" class="btn btn-lg btn-outline-primary m-3" >新增</button>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>至頂</th>
                                    <th>日期</th>
                                    <th>圖片</th>
                                    <th>標題</th>
                                    <th>內文</th>
                                    <th>價格</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td class="d-flex justify-content-around align-content-center">
                                        <button type="button" class="btn btn-sm btn-outline-info">編輯</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">刪除</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@section('js')
<script>
     $(document).ready(function() {
            $('#example').DataTable();
        } );
</script>
@endsection
