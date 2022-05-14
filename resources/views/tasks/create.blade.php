@extends('layouts.layouts')

@section('title','タスク作成')

@section('content')

<h1>タスク作成</h1>

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

<!-- POSTリクエストでデータを/tasksに送信 -->
<form method="POST" action="/tasks">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="task" value="{{ old('task') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">詳細</label>
        <textarea class="form-control" name="description">{{ old('description') }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">タスク追加</button>
 </form>
 
 <a href="/tasks" class="btn btn-outline-secondary">タスク一覧へ戻る</a>

@endsection