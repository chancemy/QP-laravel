@extends('layouts.app')

@section('title','訂單管理')


@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">後臺管理首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">訂單管理</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>訂單管理</h2>
                </div>


                <div class="card-body">
                    <table id="my-datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>訂單編號</th>
                                <th>姓名</th>
                                <th>信箱</th>
                                <th>電話</th>
                                <th>訂單狀態</th>
                                <th>下單時間</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            @php
                            $order_status_id = $item->order_status_id;

                            if($order_status_id==0){
                            $order_status = '尚未付款';
                            }elseif ($order_status_id==1) {
                            $order_status = '已付款尚未出貨';
                            }elseif ($order_status_id==2) {
                            $order_status = '已出貨';
                            }elseif ($order_status_id==3) {
                            $order_status = '已完成訂單';
                            }elseif ($order_status_id==4) {
                            $order_status = '已取消交易';
                            };
                            @endphp
                            <tr>
                                <th>{{ $item->order_no }}</th>
                                <th>{{ $item->name }}</th>
                                <th>{{ $item->email }}</th>
                                <th>{{ $item->phone }}</th>
                                <th>{{ $order_status }}</th>
                                <th>{{ $item->created_at }}</th>
                                <th> <a href="{{ asset('/admin/order/edit') }}/{{ $item->id }}"><button type="button"
                                            class="btn btn-outline-info d-inline">編輯查看</button></a>
                                    <form class="delete-form d-inline"
                                        action="{{ asset('/admin/order/delete') }}/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger delete-btn">刪除</button>
                                    </form>
                                    </td>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>訂單編號</th>
                                <th>姓名</th>
                                <th>信箱</th>
                                <th>電話</th>
                                <th>付款狀態</th>
                                <th>下單時間</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#my-datatable').DataTable();
    });
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
