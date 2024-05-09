@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <a href="{{ route('tasks.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out mb-4">Back to Tasks</a>

        <h2 class="text-3xl font-semibold mb-6">All Users</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('users.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out mb-4">Create User</a>

        <div class="bg-white rounded-md shadow-md">
            <ul>
                @forelse ($users as $user)
                <li class="flex items-center justify-between border-b border-gray-200 last:border-b-0 px-6 py-4">
                    <div>
                        <span class="text-lg">{{ $user->name }}</span>
                        <p class="text-gray-500">{{ $user->email }}</p>
                    </div>
                    <div>
                        <a href="{{ route('users.show', $user->id) }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600 transition duration-300 ease-in-out mr-2">View</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out mr-2">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 transition duration-300 ease-in-out">Delete</button>
                        </form>
                    </div>
                </li>
                @empty
                <li class="px-6 py-4 text-gray-500">No users found.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
