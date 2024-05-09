@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Create Task')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <h2 class="text-3xl font-semibold mb-6">{{ isset($task) ? 'Edit Task' : 'Create Task' }}</h2>
        <form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST" class="max-w-md bg-white rounded-md shadow-md p-6">
            @csrf
            @if(isset($task))
            @method('PUT')
            @endif
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" value="{{ isset($task) ? $task->title : '' }}" class="mt-1 p-2 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out">{{ isset($task) ? 'Update' : 'Create' }}</button>
        </form>
    </div>
</div>
@endsection
