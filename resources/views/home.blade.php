@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('')}}" class="btn btn-primary w-100 mb-2">Thêm danh mục bài viết</a>
                    <a href="" class="btn btn-success w-100 mb-2">Thêm bài viết</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
