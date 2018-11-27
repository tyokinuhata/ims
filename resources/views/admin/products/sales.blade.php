@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">売上詳細</h1>
        <div class="mb-2">
            <p>工事中</p>
        </div>
        <div>
            <a href="{{ url('/admin/products') }}">< 戻る</a>
        </div>
    </div>
@endsection