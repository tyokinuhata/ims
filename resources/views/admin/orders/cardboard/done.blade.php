@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ダンボール配送済み一覧</h1>
        <div>
            @if (count($cardboards) === 0)
                <p>該当レコードが見つかりませんでした。</p>
            @else
                <table class="table table-striped">
                    <tr>
                        <th>ユーザ名</th>
                        <th>ユーザID</th>
                        <th>サイズ</th>
                        <th>箱数</th>
                        <th>注文日</th>
                        <th>配送日</th>
                    </tr>
                    @foreach ($cardboards as $cardboard)
                        <tr>
                            <td>{{ $cardboard->user->username }}</td>
                            <td>{{ $cardboard->user->user_id }}</td>
                            <td>{{ $cardboard->cardboard->size }}</td>
                            <td>{{ $cardboard->number }}</td>
                            <td>{{ $cardboard->created_at }}</td>
                            <td>{{ $cardboard->updated_at }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $cardboards->links() }}
            @endif
        </div>
    </div>
@endsection