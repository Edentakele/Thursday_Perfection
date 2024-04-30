@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Create Task')

@section('content')
    <div class="container">
        <h2>{{ isset($task) ? 'Edit Task' : 'Create Task' }}</h2>
        <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
            @csrf
            @if(isset($task))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ isset($task) ? $task->title : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($task) ? 'Update' : 'Create' }}</button>
        </form>
    </div>
@endsection
