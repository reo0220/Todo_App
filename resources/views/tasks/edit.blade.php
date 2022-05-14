@extends('layouts.layouts')

@section('title','タスク編集')

@section('content')

<h1>タスク編集</h1>

<!--バリデーションエラーを表示-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach    
        </ul>
    </div>
@endif

<form method="POST" action="/tasks/{{ $task->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="exampleInputEmail1">タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="task" value="{{ old('task') == '' ? $task->task : old('task') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">詳細</label>
        <textarea class="form-control" name="description">{{ old('description') == '' ? $task->description : old('description') }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">タスク編集</button>
 </form>
 
 <a href="/tasks" class="btn btn-outline-secondary">タスク一覧へ戻る</a>

        
   

@endsection