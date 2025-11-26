<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>タスクを作成</title>
</head>
<body>
    <header>
        <h1 class="mb-4 text-center">タスクを作成</h1>
    </header>
    <main>
        <form action="{{ route('todo.store') }}" method="post">
            @csrf
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email">
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password">
            <button>送信</button>
        </form>
    </main>
    <footer class="mt-5 py-3 bg-white border-top">
        <div class="container text-center small text-muted">
            © 2025 林 騰 / エントリーシート
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>
