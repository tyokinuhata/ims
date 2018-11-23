@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">チャージ</h1>
        <div>
            <form method="POST" action="">
                <input type="text" class="form-control d-inline col-md-6 mr-2" placeholder="プリペイドIDを入力してください">
                <button type="submit" class="btn btn-success">登録</button>
            </form>
        </div>
    </div>
@endsection