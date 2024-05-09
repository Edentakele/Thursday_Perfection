@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <h2 class="text-3xl font-semibold mb-6">Task Details</h2>
        <div class="bg-white rounded-md shadow-md p-6">
            <p class="mb-4"><strong>Title:</strong> {{ $task->title }}</p>
            <p class="mb-4"><strong>Created At:</strong> {{ $task->created_at }}</p>
            <p class="mb-4"><strong>Updated At:</strong> {{ $task->updated_at }}</p>
            <a href="{{ route('tasks.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out inline-block">Back to Task List</a>
        </div>
    </div>
</div>
@endsection
