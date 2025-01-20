@extends('layouts.plain')

@section('title', 'Login')

@section('content')
<div class="relative isolate px-6 pt-20 lg:px-8">
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#990000] to-[#cc0000] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="flex min-h-screen items-center justify-center">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm bg-white/70 p-6 rounded-lg shadow-md">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
                <img class="mx-auto h-12 w-auto" src="{{ asset('images/logo.svg') }}" alt="Your Company Logo">
                <h2 class="mt-10 text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
            </div>

            <form class="space-y-6 mt-6" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-red-600 sm:text-sm">
                        @error('email')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-semibold text-red-600 hover:text-red-500">Forgot password?</a>
                        @endif
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-red-600 sm:text-sm">
                        @error('password')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:ring-2 focus:ring-red-600">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <a href="{{ url()->previous() }}" class="text-sm font-semibold text-red-600 hover:text-red-500">← Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
