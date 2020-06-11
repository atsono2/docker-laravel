<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <a href={{ route('search') }}>照会処理</a><br />
    <a href={{ route('update') }}>更新処理</a>

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
</body>
</html>
