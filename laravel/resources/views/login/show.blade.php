<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<h1>ログイン画面</h1>

{{--定义为 post, 指向 login.post --}}
<form action="{{ route('login.post') }}" method="post">
    @csrf
    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email">
    <label for="password">パスワード</label>
    <input type="password" id="password" name="password">
    <button>送信</button>
</form>
</body>
</html>
