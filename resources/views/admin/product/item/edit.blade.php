@extends('layouts.app')
@section('title','產品品項編輯')
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
                <li class="breadcrumb-item"><a href="{{ asset('admin/product/item') }}">產品編輯</a></li>
                <li class="breadcrumb-item active" aria-current="page">新增產品</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <h2>產品編輯</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/admin/product/item/update') }}/{{ $record->id }}" enctype="multipart/form-data"
                    class="w-75 mx-auto add-form">
                    @csrf
                    <div class="form-group">
                        <label for="type_id" class=" text-md-right">分類</label>

                        <div>
                            <select class="form-control" id="type" name="type_id">
                                @foreach ($types as $type)
                                <option @if ($record->type_id == $type->id) selected

                                    @endif value="{{ $type->id }}">{{ $type->type }}-{{ $type->type_name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="name" class="col-form-label text-md-right">品名</label>

                        <div>
                            <input id="name" type="text" class="form-control" name="name" required autofocus
                                value="{{ $record->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="price" class="col-form-label text-md-right">價錢</label>

                            <div>
                                <input id="price" type="number" class="form-control" name="price" required autofocus
                                    value="{{ $record->price }}">
                            </div>
                        </div>
                        <div class="col-6">

                            <label for="unit" class="col-form-label text-md-right">單位</label>

                            <div>
                                <input id="unit" type="text" class="form-control" name="unit" required autofocus
                                    placeholder="六吋、八吋、盒、個" value="{{ $record->unit }}">
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="start_date" class="col-form-label text-md-right">開始販售日期（固定菜單可不必填）</label>

                            <div>
                                <input id="start_date" type="date" class="form-control" name="start_date" autofocus
                                    value="{{ $record->start_date }}" required>
                            </div>

                        </div>
                        <div class="col-6">
                            <label for="end_date" class="col-form-label text-md-right">結束販售日期（固定菜單可不必填）</label>

                            <div>
                                <input id="end_date" type="date" class="form-control" name="end_date" autofocus
                                    value="{{ $record->end_date }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="img" class=" col-form-label text-md-right">產品主要圖片</label>

                        <div>
                            <input id="img" type="file" name="img">
                        </div>
                        <div>
                            <img src="{{ $record->img }}" alt="" style="width:100px ">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="photos[]" class=" col-form-label text-md-right">產品其他圖片</label>

                        <div>
                            <input id="photos[]" type="file" name="photos[]" multiple>
                        </div>
                    </div>
                    <div class="form-group row">
                        @foreach ($old_photos as $photo)
                        <div class="col-3 d-flex flex-column align-items-center">
                            <img src="{{ $photo->photo }}" alt="" class="mb-2" style="width: 100%;height: 200px;">
                            <div class="btn btn-outline-danger delete-btn"  data-id="{{ $photo->id }}">刪除圖片</div>
                        </div>

                        @endforeach
                    </div>
                    <div class="form-group ">
                        <label class="col-form-label text-md-right" for="discript">描述</label>
                        <textarea required class="w-100" name="discript" id="discript" cols="30"
                            rows="5">{{ $record->discript }}</textarea>
                    </div>
                    <div class="form-group ">
                        <label for="content" class=" col-form-label text-md-right">內容物</label>

                        <div>
                            <textarea required id="content" name="content">
                                {{ $record->content }}
                            </textarea>
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
<script>
    $('#content').summernote({
      placeholder: '所見及所得',
      tabsize: 2,
      height: 300
    });
    var delete_btn = document.querySelectorAll('.delete-btn');
    delete_btn.forEach(element => element.addEventListener('click',deleteImg));
    function deleteImg(e){
        let id = this.dataset.id;
        console.log(id);
        let parent_element = this.parentElement;
        console.log(parent_element);

        let yes = confirm('確定刪除圖片？')
        let formdata = new FormData();
        //前端要送資料到後端 必須用form表單
        //因此在這裡利用formdata的函式創出一個form來帶資料
        formdata.append('id',id);
        //必須要有加密的key
        formdata.append('_token','{{ csrf_token()}}')

        if(!yes){
            return
        }else{
            fetch('/admin/product/deleteImage',{
                'method':'post',
                'body': formdata,

            }).then(function(response){

            }).then(function(result){

                alert('刪除成功');
                parent_element.remove();
            });

        }
    }
    const addBtn = document.querySelector('.add-btn');
    const form = document.querySelector('.add-form');
    let typeSelect = document.querySelector('#type');


    addBtn.onclick = function(e){
        e.preventDefault();

        let startDate = document.querySelector('#start_date').value;
        let endDate = document.querySelector('#end_date').value;
        if(startDate > endDate){
            alert('開始販售日期不可比結束販售日期早！');
        }else{
            form.submit();
        }
    };
</script>

@endsection
