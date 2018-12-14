<div class="container-fluid" style="height: 90%">
    <div class="row h-100">
        <nav class="col-md-2 d-none d-md-block sidebar mt-3 border-right">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    @if ((Auth::user()->type === 'admin') || (Auth::user()->type === 'employee'))
                        <li class="nav-item">ユーザ系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/user') }}">ユーザ情報</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/admin/user/operate') }}">ユーザ操作</a>
                        </li>
                        <li class="nav-item">商品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/products') }}">商品一覧</a>
                        </li>
                        <li class="nav-item">発注・入庫系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/cardboard') }}">ダンボール一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/unapproved') }}">承認待ち一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/container') }}">コンテナ待ち一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/back') }}">返送待ち一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/disposal') }}">廃棄処分待ち一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/stock') }}">在庫検索</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/orders/status') }}">強制ステータス変更</a>
                        </li>
                        <li class="nav-item">納品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/delivery/yet') }}">未納品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/delivery/done') }}">納品済み一覧</a>
                        </li>
                    @endif
                    @seller(Auth::user()->type)
                        <li class="nav-item">ユーザ系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/user') }}">ユーザ情報</a>
                        </li>
                        <li class="nav-item">商品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/products') }}">商品一覧</a>
                        </li>
                        <li class="nav-item">納品系</li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/yet') }}">未納品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/seller/delivery/done') }}">納品済み一覧</a>
                        </li>
                    @endseller
                    @customer(Auth::user()->type))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/user') }}">ユーザ情報</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/user/charge') }}">チャージ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/products') }}">商品一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/products/cart') }}">カート</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer/products/history') }}">購入履歴</a>
                        </li>
                    @endcustomer
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>