<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>
            @yield('title')
        </title>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="text-center mt-5">
                <h1 class="h1">
                    @yield('content')
                </h1>
                @if (Auth::check())
                    @if (Auth::user()->type === 'admin')
                        <a href="{{ url('/admin/products') }}">ホームへ戻る</a>
                    @elseif (Auth::user()->type === 'seller')
                        <a href="{{ url('/seller/products') }}">ホームへ戻る</a>
                    @elseif (Auth::user()->type === 'customer')
                        <a href="{{ url('/customer/products') }}">ホームへ戻る</a>
                    @endif
                @else
                    <a href="{{ url('/') }}">トップへ戻る</a>
                @endif
            </div>
        </div>
    </body>
</html>