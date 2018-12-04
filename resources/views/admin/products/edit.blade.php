@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品編集</h1>
        <div class="mb-2">
            <div class="mb-4">
                <img src="{{ asset($product->img) }}" alt="">
            </div>
            <form method="POST" action="{{ url("/admin/products/edit/{$product->id}") }}" class="d-inline">
                @csrf
                <div>
                    <div class="row mb-2">
                        <label for="name" class="col-md-2">商品名</label>
                        <input type="text" id="name" name="name" class="form-control col-md-7 d-inline" value="{{ $product->name }}" maxlength="30" required autofocus>
                    </div>
                    @if ($errors->has('name'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="description" class="col-md-2">説明</label>
                        <textarea id="description" name="description" class="form-control col-md-7 d-inline" rows="10" maxlength="500" required>{{ $product->description }}</textarea>
                    </div>
                    @if ($errors->has('description'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="price" class="col-md-2">価格</label>
                        <input type="number" id="price" name="price" class="form-control col-md-7 d-inline" value="{{ $product->price }}" min="0" max="9999999" required>
                    </div>
                    @if ($errors->has('price'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('price') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="category" class="col-md-2">カテゴリ</label>
                        <select id="category" name="category" class="form-control col-md-7 d-inline" required>
                            @foreach ($productCategories as $category)
                                <option value="{{ $category->id }}" {{ $category->name === $product->productCategory->name ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('category'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('category') }}</div>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="row mb-2">
                        <label for="img" class="col-md-2">画像</label>
                        <input type="file" id="img" name="img" class="col-md-4 d-inline">
                    </div>
                </div>

                <input type="hidden" value="{{ $product->id }}" name="id">
                <button type="submit" class="btn btn-success">保存</button>
            </form>
            <form method="POST" action="{{ url('/admin/products/delete') }}" class="d-inline">
                <input type="hidden" value="{{ $product->id }}" name="id">
                <button type="submit" class="btn btn-danger">廃棄</button>
            </form>
        </div>
        <div>
            <a href="{{ url('/admin/products') }}">< 戻る</a>
        </div>
    </div>
@endsection