@extends('layouts.app')
@section('title','最新消息管理')
@section('css')

@endsection
@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">後臺管理首頁</a></li>
                        <li class="breadcrumb-item active" aria-current="page">最新消息管理</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">最新消息管理</h1>
                        <a href="{{ asset('/admin/news/item/create') }}" class="btn btn-lg btn-outline-primary m-3" >新增</a>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>至頂</th>
                                    <th>日期</th>
                                    <th>圖片</th>
                                    <th>標題</th>
                                    <th>備註</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $new)
                                @php
                                    $newDate = explode('-',$new->date);
                                    $month = $newDate[1];
                                    $date = $newDate[2];
                                @endphp
                                <tr>
                                    <td>{{ $new->is_display }}</td>
                                    <td>{{ $month.'-'.$date }}</td>
                                    <td>
                                        <img width="100px" src="{{ asset($new->img) }}" alt="">
                                    </td>
                                    <td>{{ $new->title }}</td>
                                    <td>{{ $new->remarks }}</td>
                                    <td class="d-flex justify-content-around align-content-center">
                                        <a href="{{ asset('/admin/news/item/edit') }}/{{ $new->id }}"  class="btn btn-sm btn-outline-info ml-2">編輯</a>
                                        <form action="{{ asset('/admin/news/item/delete') }}/{{ $new->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger ml-2">刪除</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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
