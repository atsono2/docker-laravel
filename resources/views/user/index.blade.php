<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index</h1>
    <table>
        @if (!empty($user))
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }} </td>
        </tr>
        @else
        <tr>
            <td>登録者はいません</td>
        </tr>
        @endif
    </table>
</body>
</html>
