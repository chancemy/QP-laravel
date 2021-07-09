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
            <form method="POST" action="{{ asset('/admin/news/edit') }}/{{ $oldNewsData->id }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="type" class="col-md-1 col-form-label text-md-right">分類</label>

                    <div class="col-md-10">
                        <select class="form-control" id="type" name="type">
                            @foreach ($news as $key => $item)
                                <option @if ($item == $oldNewsData->type) selected @endif>{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-1 col-form-label text-md-right" >標題</label>

                    <div class="col-md-10">
                        <input id="title" type="text" class="form-control" name="title"  value="{{ $oldNewsData->title }}"  required autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="img" class="col-md-1 col-form-label text-md-right">圖片</label>

                    <div class="col-md-10">
                        <img width="200px" src="{{ $oldNewsData->img }}" alt="">
                        <input type="file" name="img" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-md-1 col-form-label text-md-right">內容</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="content" name="content" rows="3" required>{{ $oldNewsData->content }}</textarea>
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
