@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ダンボール送付待ち一覧</h1>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>ユーザ名</th>
                    <th>ユーザID</th>
                    <th>サイズ</th>
                    <th>箱数</th>
                    <th>&nbsp;</th>
                </tr>
                @foreach ($cardboards as $cardboard)
                    <tr>
                        <td>{{ $cardboard->user->username }}</td>
                        <td>{{ $cardboard->user->user_id }}</td>
                        <td>{{ $cardboard->cardboard->size }}</td>
                        <td>{{ $cardboard->number }}</td>
                        <td>
                            <form method="POST" action="{{ url('/admin/orders/cardboard') }}">
                                @csrf
                                <input type="hidden" name="cardboard_id" value="{{ $cardboard->id }}">
                                <button type="submit" class="btn btn-danger">送付</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection