@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">{{ __('Reset Password') }}</h2>
            </div>

            <div class="px-6 py-4">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('Email Address') }}
                        </label>
                        <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required
                            autocomplete="email" autofocus
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('email') border-red-500 @enderror">

                        @error('email')
                            <p class="text-sm text-red-600 mt-1">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('Password') }}
                        </label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('password') border-red-500 @enderror">

                        @error('password')
                            <p class="text-sm text-red-600 mt-1">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('Confirm Password') }}
                        </label>
                        <input id="password-confirm" type="password" name="password_confirmation" required
                            autocomplete="new-password"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
