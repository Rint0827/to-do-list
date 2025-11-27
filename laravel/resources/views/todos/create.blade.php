<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>タスク作成</title>
</head>
<body>
    <header></header>
    <main>
        <div class="container mt-5" style="max-width: 600px;">
            <h1 class="mb-4 text-center">タスクを作成</h1>
            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST" action="{{ route('todo.store') }}">
                        @csrf

                        {{-- タイトル --}}
                        <div class="mb-3">
                            <label class="form-label">タイトル</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        {{-- 詳細 --}}
                        <div class="mb-3">
                            <label class="form-label">詳細</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>

                        {{-- 期限 --}}
                        <div class="mb-3">
                            <label class="form-label">期限</label>
                            <input type="date" name="due_date" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">保存</button>
                        <a href="{{ route('todo.index') }}" class="btn btn-secondary ms-2">戻る</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="mt-5 py-3 bg-white border-top">
        <div class="container text-center small text-muted">
            © 2025 林 騰 / エントリーシート
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>
