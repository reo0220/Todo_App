@extends('layouts.layouts')

@section('title','タスク編集')

@section('content')

<form method="POST" action="/tasks/{{ $task->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="task" value="{{ $task->task }}">
    <input type="text" name="description" value="{{ $task->description }}">
    <input type="submit">
</form>

@endsection