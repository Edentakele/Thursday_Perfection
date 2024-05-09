@extends('layouts.app')

@section('title', 'User Details')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <h1 class="text-3xl font-semibold mb-6">User Details</h1>
        <div class="bg-white rounded-md shadow-md p-6">
            <p><strong class="text-lg">Name:</strong> {{ $user->name }}</p>
            <p><strong class="text-lg">Email:</strong> {{ $user->email }}</p>
            <p><strong class="text-lg">Created At:</strong> {{ $user->created_at }}</p>
            <p><strong class="text-lg">Updated At:</strong> {{ $user->updated_at }}</p>
            <a href="{{ route('users.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-300 ease-in-out mt-4">Back to User List</a>
        </div>
    </div>
</div>
@endsection
