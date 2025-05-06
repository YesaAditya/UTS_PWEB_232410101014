@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="text-center mt-20 bg-gray-100 mx-auto max-w-md rounded-lg border-2 p-8 mb-60">
        <h1 class="text-4xl mb-3 font-bold text-gray-800">Login</h1>
        <p class="mb-8 text-gray-600">Masukkan username dan password</p>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="px-6">
            @csrf
            <div class="mb-4 text-left">
                <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>
                <input type="text" id="username" name="username"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300"
                       required>
            </div>

            <div class="mb-6 text-left">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300"
                       required>
            </div>

            <button type="submit "
                    class="w-full bg-blue-600 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
                Login
            </button>
        </form>
    </div>
@endsection
