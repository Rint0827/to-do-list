<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Todo;

class TodoController extends Controller
{
    // Todoの一覧画面
    public function index()
    {
        $todos = Todo::where('user_id', auth()->id())
            ->orderBy('is_done')
            ->orderByDesc('created_at')
            ->get();

        return view('todos.index', compact('todos'));
    }

    // Todoの作成画面
    public function create()
    {
        return view('todos.create');
    }

    // Todoの作成機能
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'due_date'    => 'nullable|date',
        ]);

        $data['user_id'] = auth()->id();
        $data['is_done'] = false;

        Todo::create($data);

        return redirect()->route('todo.index')->with('status', 'タスクを追加しました。');
    }

    // Todoの編集画面
    public function edit($id)
    {
        $todo = Todo::where('user_id', auth()->id())
            ->where('id', $id)
            ->firstOrFail();

        return view('todos.edit', compact('todo'));
    }

    // Todoの編集機能
    public function update(Request $request, $id)
    {
        $todo = Todo::where('user_id', auth()->id())
            ->where('id', $id)
            ->firstOrFail();

        $data = $request->validate([
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'due_date'    => 'nullable|date',
        ]);

        $data['is_done'] = $request->has('is_done');

        $todo->update($data);

        return redirect()->route('todo.index')->with('status', 'タスクを更新しました。');
    }

    // Todoの削除機能
    public function destroy($id)
    {
        $todo = Todo::where('user_id', auth()->id())
            ->where('id', $id)
            ->firstOrFail();

        $todo->delete();

        return redirect()->route('todo.index')->with('status', 'タスクを削除しました。');
    }

    // Todoの状態の切り替えの機能
    public function toggle($id)
    {
        $todo = Todo::where('user_id', auth()->id())
            ->where('id', $id)
            ->firstOrFail();

        $todo->is_done = ! $todo->is_done;
        $todo->save();

        return redirect()->route('todo.index');
    }
}
