@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800">{{ __('Verify Your Email Address') }}</h2>
            </div>

            <div class="px-6 py-4">
                @if (session('resent'))
                    <div class="mb-4 p-4 text-sm text-green-800 bg-green-100 border border-green-200 rounded">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p class="mb-2 text-gray-700">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                </p>
                <p class="mb-4 text-gray-700">
                    {{ __('If you did not receive the email') }},
                </p>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="text-purple-600 hover:underline font-medium">
                        {{ __('click here to request another') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
