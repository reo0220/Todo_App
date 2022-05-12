<h1>タスク一覧</h1>
<a href="/tasks/create">新規作成</a>

<!-- 受け取った$taskをforeachで展開 -->
@foreach($tasks as $task)
     <a href="/tasks/{{ $task->id }}/edit">編集</a>
     
     <!--タスク削除リンク-->
     <form action="/tasks/{{ $task->id }}" method="POST" onsubmit="if(confirm('タスクを完了しましたか？')) { return true } else {return false };">
         <input type="hidden" name="_method" value="DELETE">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <button type="submit">タスク完了</button>
     </form>
@endforeach     
     
     