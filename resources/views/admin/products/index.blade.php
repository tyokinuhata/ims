@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品一覧</h1>
        <div>
            <form method="GET" action="{{ url('/admin/products') }}">
                <input type="text" placeholder="商品ID または 商品名 を入力して下さい" name="keywords" class="form-control col-md-8 d-inline mb-4 mr-2" autofocus required>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
            @isset ($products)
                @foreach($products as $product)
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <img src="{{ asset($product->img) }}" alt="" width="200">
                        </div>
                        <div class="col-md-9 mt-2">
                            <table class="table d-inline">
                                <tr>
                                    <th>商品ID</th>
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <th>商品名</th>
                                    <td>{{ $product->name }}</td>
                                </tr>
                                <tr>
                                    <th>価格</th>
                                    <td>¥{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <th>操作</th>
                                    <td>
                                        <a href="{{ url("/admin/products/detail/{$product->id}") }}" class="mr-2" target="_blank">商品詳細</a>
                                        @admin(Auth::user()->type)
                                            <a href="{{ url("/admin/products/edit/{$product->id}") }}" class="mr-2" target="_blank">商品編集</a>
                                        @endadmin
                                        <a href="{{ url("/admin/products/sales/{$product->id}") }}" class="mr-2" target="_blank">売上詳細</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endforeach
                {{ $products->links() }}
            @else
                <p>該当商品が見つかりませんでした。</p>
            @endisset
            <div>
                @admin(Auth::user()->type)
                    <a href="{{ url('/admin/products/add') }}">商品登録</a>
                @endadmin
            </div>
        </div>
    </div>
@endsection