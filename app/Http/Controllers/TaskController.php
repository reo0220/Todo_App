<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /*一覧ページ*/
    public function index()
    {
       //作成されているタスクを全て取得
       $tasks = Task::all();
      
       // resources/views/posts/index.blade.phpをビューとして呼び出す
        return view('tasks.index',compact('tasks'));
    }

    /*新規作成ページ*/
    public function create()
    {
        return view('tasks.create');
    }

    /*新規作成処理*/
    public function store(Request $request)
    {
       //新しいTaskモデルのデータを作成    
        $task = new Task();
        
       // $requestに保存されているパラメータをTaskモデルのカラムごとに受け取る    
        $task->task = $request->input('task');
        $task->description = $request->input('description');
        
       //作成したモデルのデータを保存    
        $task->save();
        
       //メッセージとともに/tasksにリダイレクト
        return redirect()->route('tasks.index')->with('message','タスクが追加されました！');
    }

   
    /*編集ページ*/
    public function edit(Task $task)
    {
       // compact関数でビューにtaskという変数を渡す    
        return view('tasks.edit',compact('task'));
    }

    /*編集処理*/
    public function update(Request $request, Task $task)
    {
        $task->task = $request->input('task');
        $task->description = $request->input('description');
        $task->save();
        
        return redirect()->route('tasks.index')->with('message','タスクが編集されました！');
    }

    /*削除処理*/
    public function destroy(Task $task)
    {
        $task->delete();
        
        return redirect()->route('tasks.index')->with('message','タスクを完了しました！');
    }
}
