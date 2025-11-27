<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
<header></header>
<main>
    <div class="container mt-5" style="max-width: 400px;">
        <h1 class="mb-6 text-center">ログイン</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                {{--定义为 post, 指向 login.post --}}
                <form action="{{ route('login.post') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">メールアドレス</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">パスワード</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <button>送信</button>
                </form>
            </div>
        </div>
    </div>
</main>
<footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>
