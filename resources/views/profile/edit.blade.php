@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-8">
    <!-- Update Profile Information Form -->
    <button><a href="{{ route('tasks.index') }}" class="block text-center text-blue-500 mt-4 hover:underline">Back to Tasks</a></button>
    <form method="POST" action="{{ route('profile.update') }}" class="mb-6">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block mb-2">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block mb-2">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">
            Update Profile
        </button>
    </form>

    <!-- Update Password Form -->
    <form method="POST" action="{{ route('password.update') }}" class="mb-6">
        @csrf
        @method('PUT')

        <!-- Current Password -->
        <div class="mb-4">
            <label for="current_password" class="block mb-2">Current Password</label>
            <input id="current_password" type="password" name="current_password" required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <!-- New Password -->
        <div class="mb-4">
            <label for="password" class="block mb-2">New Password</label>
            <input id="password" type="password" name="password" required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <!-- Confirm New Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block mb-2">Confirm New Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">
            Update Password
        </button>
    </form>

    <!-- Delete User Form -->
    {{-- <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')

        <p class="mb-4">Are you sure you want to delete your account? This action cannot be undone.</p>

        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-300 ease-in-out">
            Delete Account
        </button>
    </form> --}}

    <!-- Back to Tasks Button -->

</div>
@endsection
