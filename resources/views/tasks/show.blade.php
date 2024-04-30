@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
    <div class="container">
        <h2>Task Details</h2>
        <p><strong>Title:</strong> {{ $task->title }}</p>
        <p><strong>Created At:</strong> {{ $task->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $task->updated_at }}</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to Task List</a>
    </div>
@endsection
