@extends('layouts.app')
@section('title','後臺管理首頁')
@section('css')

@endsection
@section('content')
<main>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ asset('admin/news/type/create') }}">消息分類管理</a></li>
              <li class="breadcrumb-item active" aria-current="page">新增消息分類</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>新增分類</h2></div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/admin/news/type/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="type_name"  class="col-md-2 col-form-label text-md-right">分類</label>
                        <div class="col-md-10">
                            <input id="type_name" type="text" class="form-control" name="type_name" required autofocus>
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
