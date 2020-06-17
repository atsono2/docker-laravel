<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h3>
        こんにちは、{{ Auth::user()->name }}さん！
    </h3>
    @can('admin')
        <div id="user">adminユーザーですよ！</div>
    @else
        <div id="user">adminではないですよ！</div>
    @endcan
    <br>

    <div>
        <a href={{ route('search') }}>照会処理</a><br />

        @can('admin')
            <a href={{ route('update') }}>更新処理</a>

        @endcan
    </div>
    <br>

    <div>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <script>
        const adminUser = document.getElementById('user');
        adminUser.style.fontWeight = 'bold';
    </script>
</body>
</html>
