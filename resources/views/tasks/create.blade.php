@extends('layouts.layouts')

@section('title','タスク追加')

@section('content')

<!-- POSTリクエストでデータを/tasksに送信 -->
<form method="POST" action="/tasks">
    {{ csrf_field() }}
    <input type="text" name="task">
    <input type="text" name="description">
    <input type="submit">
</form>

@endsection