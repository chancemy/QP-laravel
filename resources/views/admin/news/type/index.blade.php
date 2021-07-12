@extends('layouts.app')
@section('title','消息分類管理')
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
                        <li class="breadcrumb-item active" aria-current="page">消息分類管理</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">消息分類管理</h1>
                        <a href="{{ asset('/admin/news/type/create') }}" class="btn btn-lg btn-outline-primary m-3" >新增</a>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>分類</th>
                                    <th>筆數</th>
                                    <th style="width: 150px">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newsTypes as $newsType)
                                <tr>
                                    <td>{{ $newsType->type_name }}</td>
                                    <td>{{ count($newsType->news) }}</td>
                                    <td class="d-flex justify-content-center align-content-center">
                                        <a href="{{ asset('/admin/news/type/edit') }}/{{ $newsType->id }}"  class="btn btn-sm btn-outline-info ml-2">編輯</a>
                                        <form action="{{ asset('/admin/news/type/delete') }}/{{ $newsType->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger ml-2 delete-btn">刪除</button>
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

    var deleteBtn = document.querySelectorAll('.delete-btn');

    deleteBtn.forEach(element => element.addEventListener('click',function(e){
        e.preventDefault();
        let deleteForm = this.parentElement;

        let yes = confirm('確定刪除？');
        if(yes){
            deleteForm.submit();
        }else{
            alert('已取消')

        }
    }))
</script>
@endsection
