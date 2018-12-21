@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">強制ステータス変更</h1>
        <div class="mb-2">
            <form method="POST" action="{{ url("/admin/products/status/{$product->id}") }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}" required>
                <select name="status" class="form-control d-inline col-md-2" required autofocus>
                    @foreach ($productStatuses as $productStatus)
                        <option value="{{ $productStatus->id }}" {{ $product->product_status_id == $productStatus->id ? 'selected' : '' }}>{{ $productStatus->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-danger">強制変更</button>
            </form>
        </div>
        <div>
            <a href="{{ url('/admin/products') }}">< 戻る</a>
        </div>
    </div>
@endsection