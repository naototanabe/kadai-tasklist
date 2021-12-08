@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $task->id }}のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>{{ $task->id }}</th>
        </tr>
        <tr>
            <th>タスク</th>
            <th>{{ $task->content }}</th>
        </tr>
    </table>
    
    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    
    {{-- タスク削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection