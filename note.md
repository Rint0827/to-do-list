## about user
- login in
- login out

## about to-do
- listを表示する
- add new list
- Todoを編集する
- 完成と未完成の状態切り替え
- 削除機能

## database
users(1) to todos(n)

---
## doing
1. php artisan make:migration create_todos_table
   - 创建一个todo的迁移文件（用于建立todo的数据库）
2. php artisan migrate
   - 建立数据库
3. php artisan make:migration update_todos_table_add_fields 
   - 建立没修改table就建立了数据库，所以重新建立一个迁移文件修改
   - 注意点：public function up 内是添加字段,相反 public function down 是用来删除字段，用命令 php artisan migrate:rollback
4. php artisan migrate
   - 这里再执行的话，就可以添加上后写的迁移文件里的字段
5. php artisan make:model Model/Todo
   - 建立一个模型，实现 users(1) to todos(n)
   - 在 \$fillable 定义 Todo 允许一次性批量写入的字段，在 \$casts 定义特定值，最后在function 里关联上 User (belongsTo)
6. php artisan make:model Model/Todo
   - 在 function 里关联上 Todo (hasMany)
7. php artisan make:controller TodoController
   - 建立 TodoController 文件
8. 编辑 web.php 
   - Route::middleware('auth') 后加上一系列定义，意思是要认证后才能启用
9. 编辑 TodoController.php
   - 对 web.php 中使用的工具进行编辑 
10. 在resources/views中建立.blade.php文件，编辑前端文件
    - 在 resources/views 里创建一个layouts/app.blade.php做所有的前端页面的总体的布局。
    - 在别的页面用 @extends('layouts.app') 来引用