<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // 一覧画面
    Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
    // 作成画面
    Route::get('/todos/create', [TodoController::class, 'create'])->name('todo.create');
    // 作成機能
    Route::post('/todos', [TodoController::class, 'store'])->name('todo.store');
    // 編集画面
    Route::get('/todos/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
    // 編集機能
    Route::post('/todos/{id}', [TodoController::class, 'update'])->name('todo.update');
    // 削除機能
    Route::delete('/todos/{id}', [TodoController::class, 'destroy'])->name('todo.delete');
    // 状態切り替え機能
    Route::post('/todos/{id}/toggle', [TodoController::class, 'toggle'])->name('todo.toggle');
});
