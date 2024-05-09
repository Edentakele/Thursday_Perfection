@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<div class="container mx-auto px-4">
    <div class="py-8">
        <h1 class="text-3xl font-semibold mb-6">Create User</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST" class="max-w-md">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" name="name" id="name" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" name="password" id="password" class="form-input mt-1 block w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow-md transition duration-300 ease-in-out">Create User</button>
        </form>
    </div>
</div>
@endsection
