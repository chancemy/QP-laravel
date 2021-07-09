@extends('layouts.app')
@section('title','產品分類管理')
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
                        <li class="breadcrumb-item active" aria-current="page">產品品項管理</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">產品種類管理</h1>
                        <a href="{{ asset('/admin/product/item/create') }}"
                            class="btn btn-lg btn-outline-primary m-3">新增</a>
                        <table id="example" class="display" style="width:100%">
                            <thead>

                                <tr>
                                    <th>分類</th>
                                    <th>名稱</th>
                                    <th>價錢</th>
                                    <th>圖片</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                <tr>
                                    <td>{{ $item->type->type }}-{{ $item->type->type_name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}／{{ $item->unit }}</td>
                                    <td><img src="{{ $item->img }}" alt="" style="width:200px;"></td>
                                    <td>
                                        <form class="delete-form d-inline"
                                            action="{{ asset('/admin/product/item/delete') }}/{{ $item->id }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger delete-btn">刪除</button>
                                        </form>
                                        <a href="{{ asset('/admin/product/item/edit') }}/{{ $item->id }}"><button
                                                type="button" class="btn btn-outline-info">編輯</button>
                                    </td></a>

                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>分類</th>
                                    <th>名稱</th>
                                    <th>價錢</th>
                                    <th>圖片</th>
                                    <th></th>

                                </tr>
                            </tfoot>
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
