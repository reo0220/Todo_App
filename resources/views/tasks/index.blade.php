@extends('layouts.layouts')

@section('title','タスク一覧')

@section('content')

<div class="hoge d-flex justify-content-between pt-5">
   <h1>タスク一覧</h1>
   <a href="/tasks/create" class="btn btn-outline-primary mb-5">新規作成</a>
</div>   

<!-- 受け取った$taskをforeachで展開 -->
@foreach($tasks as $task)

<div class="card">
    <div class="card-body">
       <h4 class="card-title font-weight-bold">{{ $task->task }}</h5>
       <p class="card-text">{{ $task->description }}</p>
  
       <div class="d-flex" style="height: 36.4px;">   
           <a href="/tasks/{{ $task->id }}/edit" class="btn btn-outline-primary">編集</a>
           <!--タスク削除リンク-->
           <form action="/tasks/{{ $task->id }}" method="POST" onsubmit="if(confirm('タスクを完了しましたか？')) { return true } else {return false };">
               <input type="hidden" name="_method" value="DELETE">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <button type="submit" class="btn btn-outline-danger">タスク完了</button>
            </form>
       </div> 
   </div>
</div>      

@endforeach     
@endsection     
     