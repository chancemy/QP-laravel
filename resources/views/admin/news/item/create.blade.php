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
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
