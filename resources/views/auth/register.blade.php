@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto mt-10 bg-white shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4">
            <div class=" w-full text-center mb-6">
                <h2 class="text-2xl font-semibold text-center text-purple-700 ">{{ __('Register') }}</h2>
                <p>Punya akun? <a href="{{ route('login') }}" class="text-primary-500">Login</a></p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                    <input id="name" type="text"
                        class="mt-1 block w-full px-4 py-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                    <input id="email" type="email"
                        class="mt-1 block w-full px-4 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="mt-1 block w-full px-4 py-2 border @error('password') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password-confirm"
                        class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700 transition duration-150">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
