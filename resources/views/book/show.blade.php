<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>本の一覧</h3>
    <div>
        <div>
            @if (Cache::has('books'))
                <div>キャッシュにあるよ！</div>
            @endif
        </div>
        <ul style="list-style:none;">
        @foreach ($books as $book)
            <li>{{ $book->id }}:{{ $book->title }}</li>
        @endforeach
        </ul>
    </div>
</body>
</html>
