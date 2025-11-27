<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>To-do-List</title>
</head>
<body>
    <header id="top">
        <h1 class="text-center">ToDoリスト</h1>
    </header>
    <main>
        <div class="container">
            <a href="{{ route('todo.create') }}" class="btn btn-primary mb-3">
                新しいタスクを追加
            </a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($todos->isEmpty())
                <p>Nothing</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>状態</th>
                        <th>タイトル</th>
                        <th>期限</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>
                                <form method="POST" action="{{ route('todo.toggle', $todo->id) }}">
                                    @csrf
                                    <button class="btn btn-sm {{ $todo->is_done ? 'btn-success' : 'btn-outline-secondary' }}">
                                        {{ $todo->is_done ? '完了' : '未完了' }}
                                    </button>
                                </form>
                            </td>

                            <td>{{ $todo->title }}</td>

                            <td>
                                {{ $todo->due_date ? $todo->due_date->format('Y-m-d') : '-' }}
                            </td>

                            <td>
                                <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-sm btn-secondary">
                                    編集
                                </a>

                                <form method="POST"
                                      action="{{ route('todo.delete', $todo->id) }}"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('削除しますか？')">
                                        削除
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
    <footer class="mt-5 py-3 bg-white border-top">
        <div class="text-end">
            <a href="#top" class="btn btn-outline-secondary btn-sm">
                一番上へ戻る
            </a>
        </div>
        <div class="container text-center small text-muted">
            © 2025 林 騰 / エントリーシート
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>
