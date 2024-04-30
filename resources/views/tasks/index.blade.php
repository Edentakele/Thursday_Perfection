@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tasks</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
        <ul class="list-group mt-3">
            @foreach ($tasks as $task)
                <li class="list-group-item">
                    {{ $task->title }}
                    <span class="float-right">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
