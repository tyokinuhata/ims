@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品一覧</h1>
        <div>
            <form method="GET" action="{{ url('/admin/products') }}" class="mb-2">
                <select name="status" class="form-control d-inline col-md-2" autofocus required>
                    <option value="none">指定なし</option>
                    @foreach ($productStatuses as $productStatus)
                        <option value="{{ $productStatus->en_name }}">{{ $productStatus->name }}</option>
                    @endforeach
                </select>
                <select name="category" class="form-control d-inline col-md-2 mr-2" required>
                    <option value="none">指定なし</option>
                    @foreach ($productCategories as $productCategory)
                        <option value="{{ $productCategory->en_name }}">{{ $productCategory->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>

            <form method="GET" action="{{ url('/admin/products') }}">
                <input type="text" placeholder="商品ID または 商品名 を入力して下さい" name="keywords" class="form-control col-md-8 d-inline mb-4 mr-2" required>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>

            @if (isset($products) && count($products) !== 0)
                <p>検索結果: {{ count($products) }}件</p>
                @foreach ($products as $product)
                    <div class="row mb-4">
                        <div class="col-md-3 text-center mt-5">
                            <img src="{{ asset($product->img) }}" alt="" height="200">
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
                                    <th>カテゴリ</th>
                                    <td>{{ $product->productCategory->name }}</td>
                                </tr>
                                <tr>
                                    <th>ステータス</th>
                                    <td>{{ $product->productStatus->name }}</td>
                                </tr>
                                <tr>
                                    <th>操作</th>
                                    <td>
                                        <a href="{{ url("/admin/products/detail/{$product->id}") }}" class="mr-2" target="_blank">商品詳細</a>
                                        @admin(Auth::user()->type)
                                            <a href="{{ url("/admin/products/edit/{$product->id}") }}" class="mr-2" target="_blank">商品編集</a>
                                        @endadmin
                                        <a href="{{ url("/admin/products/sales/{$product->id}") }}" class="mr-2" target="_blank">売上詳細</a>
                                        @admin(Auth::user()->type)
                                            <a href="{{ url("/admin/products/status/{$product->id}") }}" class="mr-2" target="_blank">強制ステータス変更</a>
                                        @endadmin
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endforeach
                {{ $products->links() }}
            @else
                <p>該当商品が見つかりませんでした。</p>
            @endif
            <div>
                @admin(Auth::user()->type)
                    <a href="{{ url('/admin/products/add') }}">商品登録</a>
                @endadmin
            </div>
        </div>
    </div>
@endsection