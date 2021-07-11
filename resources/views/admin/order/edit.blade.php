@extends('layouts.app')
@section('title','訂單編輯查看')
@section('css')
<style>
    .form-area {
        width: 75%;

    }

    img {
        display: block;
        object-position: center;
        object-fit: cover;

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
                <li class="breadcrumb-item"><a href="{{ asset('admin/order') }}">查看訂單</a></li>
                <li class="breadcrumb-item active" aria-current="page">訂單編輯</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <h2>訂單編輯</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/admin/order/update') }}/{{ $record->id }}"
                    enctype="multipart/form-data" class="w-75 mx-auto add-form">
                    @csrf
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="order_no" class="col-form-label text-md-right">訂單編號</label>

                            <div>
                                <input id="order_no" type="text" class="form-control" name="order_no" readonly autofocus
                                    value="{{ $record->order_no }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="name" class="col-form-label text-md-right">訂購者姓名</label>

                            <div>
                                <input id="name" type="text" class="form-control" name="name" required autofocus
                                    readonly value="{{ $record->name }}">
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <label for="phone" class="col-form-label text-md-right">電話</label>

                            <div>
                                <input id="phone" class="form-control" name="phone" required autofocus readonly
                                    value="{{ $record->phone }}">
                            </div>
                        </div>
                        <div class="col-6">

                            <label for="email" class="col-form-label text-md-right">信箱</label>

                            <div>
                                <input id="email" type="text" class="form-control" name="email" required autofocus
                                    readonly value="{{ $record->email }}">
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <label for="shipment" class="col-form-label text-md-right">寄送方式</label>

                            <div>
                                <select name="shipment" disabled class="form-control" id="shipment">
                                    <option value="blackcat" @if ($record->shipment == 'blackcat') selected @endif>黑貓宅配
                                    </option>
                                    <option value="store" @if ($record->shipment == 'store') selected @endif>超商配送
                                    </option>
                                    <option value="fedex" @if ($record->shipment == 'fedex') selected @endif>順豐快遞
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="col-6">

                            <label for="payment" class="col-form-label text-md-right">付款方式</label>

                            <div>
                                <select name="payment" disabled class="form-control" id="payment">
                                    <option value="ATM" @if ($record->payment == 'ATM') selected @endif>實體／網路ATM
                                    </option>
                                    <option value="on-delivery" @if ($record->payment == 'on-delivery') selected
                                        @endif>貨到付款
                                    </option>
                                    <option value="credit-card" @if ($record->payment == 'credit-card') selected
                                        @endif>信用卡
                                    </option>

                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label for="is_paid" class="col-form-label text-md-right">付款狀態</label>

                            <div>
                                <select name="is_paid" class="form-control" id="is_paid">
                                    <option value="0" @if ($record->is_paid == '0') selected @endif>尚未付款
                                    </option>
                                    <option value="1" @if ($record->is_paid == '1') selected @endif>已付款
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">

                            <label for="shipping_status_id" class="col-form-label text-md-right">寄送狀態</label>
                            <select name="shipping_status_id" class="form-control" id="shipping_status_id">
                                <option value="0" @if ($record->shipping_status_id == '0') selected @endif>尚未出貨
                                </option>
                                <option value="1" @if ($record->shipping_status_id == '1') selected @endif>出貨準備中
                                </option>
                                <option value="2" @if ($record->shipping_status_id == '2') selected @endif>已出貨
                                </option>
                                <option value="3" @if ($record->shipping_status_id == '3') selected @endif>缺貨中
                                </option>
                            </select>
                        </div>
                        <div class="col-4">

                            <label for="order_status_id" class="col-form-label text-md-right">訂單狀態</label>
                            <select name="order_status_id" class="form-control" id="order_status_id">
                                <option value="0" @if ($record->order_status_id == '0') selected @endif>尚未付款
                                </option>
                                <option value="1" @if ($record->order_status_id == '1') selected @endif>已付款尚未出貨
                                </option>
                                <option value="2" @if ($record->order_status_id == '2') selected @endif>已出貨
                                </option>
                                <option value="3" @if ($record->order_status_id == '3') selected @endif>已完成訂單
                                </option>
                                <option value="4" @if ($record->order_status_id == '4') selected @endif>已取消交易
                                </option>
                            </select>
                            <div>

                            </div>

                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-4">
                            <label for="price" class="col-form-label text-md-right">訂單金額</label>

                            <div>
                                <input id="price" class="form-control" name="price" required autofocus readonly
                                    value="{{ $record->price }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="shipping_fee" class="col-form-label text-md-right">運費</label>

                            <div>
                                <input id="shipping_fee" class="form-control" name="shipping_fee" required autofocus
                                    readonly value="{{ $record->shipping_fee }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <label class="col-form-label text-md-right">總金額</label>

                            <div>
                                <input autofocus readonly class="form-control"
                                    value="{{ $record->shipping_fee +  $record->price}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label text-md-right">訂購內容</label>
                    </div>
                    <div class="form-group row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">商品編號</th>
                                    <th scope="col">品名</th>
                                    <th scope="col">價錢</th>
                                    <th scope="col">數量</th>
                                    <th scope="col">小計</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record->details as $detail)
                                @php
                                $product = json_decode($detail->old_data)
                                @endphp


                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <th>{{ $product->name }}</th>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $detail->quantity }}</td>
                                    <td>{{ $product->price * $detail->quantity }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                    <div class="form-group row">
                        <label class="col-12">寄送地址</label>

                        <div class="row col-12">
                            <input id="zipcode" type="text" class="form-control col-4" name="zipcode" required autofocus
                                readonly value="{{ $record->zipcode }}">
                            <input id="county" type="text" class="form-control col-4" name="county" required autofocus
                                readonly value="{{ $record->county }}">
                            <input id="district" type="text" class="form-control col-4" name="district" required
                                autofocus readonly value="{{ $record->district }}">
                            <input id="address" type="text" class="form-control col-12" name="address" required
                                autofocus readonly value="{{ $record->address }}">

                        </div>
                    </div>





                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-2">
                            <button type="submit" class="btn btn-primary add-btn">
                                編輯完成
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
@endsection
