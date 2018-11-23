@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品編集</h1>
        <div class="mb-2">
            <div class="mb-2">
                <img src="http://placehold.it/200x200&text=icon" alt="">
            </div>
            <form method="POST" action="">
                @csrf
                <div class="row mb-2">
                    <label for="product_name" class="col-md-2">商品名</label>
                    <input type="text" id="product_name" name="product_name" class="form-control col-md-7 d-inline" required>
                </div>
                <div class="row mb-2">
                    <label for="description" class="col-md-2">説明</label>
                    <textarea id="description" name="description" class="form-control col-md-7 d-inline" rows="10" required></textarea>
                </div>
                <div class="row mb-2">
                    <label for="price" class="col-md-2">価格</label>
                    <input type="number" id="price" name="price" class="form-control col-md-7 d-inline" required>
                </div>
                <div class="row mb-2">
                    <label for="category" class="col-md-2">カテゴリー</label>
                    <select id="category" name="category" class="form-control col-md-7 d-inline" required>
                        <option value="錠剤">錠剤</option>
                        <option value="トローチ">トローチ</option>
                    </select>
                </div>
                <div class="row mb-2">
                    <label for="img" class="col-md-2">画像</label>
                    <input type="file" id="img" name="img" class="col-md-4 d-inline">
                </div>
                <button type="submit" class="btn btn-success">保存</button>
            </form>
        </div>
        <div>
            <a href="{{ url('/seller/products') }}">< 戻る</a>
        </div>
    </div>
@endsection