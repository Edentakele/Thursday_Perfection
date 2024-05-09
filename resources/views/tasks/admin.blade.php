@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <h2 class="text-3xl font-semibold mb-6">Tasks</h2>
        <div class="mb-4">
            <a href="{{ route('users.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out mb-4 mr-4">Users List</a>
            {{-- <a href="{{ route('tasks.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out mb-4">Tasks List</a> --}}
            <ul>
                @foreach ($tasks as $task)
                <li class="bg-white rounded-md shadow-md mb-4">
                    <div class="p-6 flex justify-between items-center">
                        <span class="text-lg">{{ $task->title }}</span>
                        <div>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600 transition duration-300 ease-in-out mr-2">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 transition duration-300 ease-in-out">Delete</button>
                            </form>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
