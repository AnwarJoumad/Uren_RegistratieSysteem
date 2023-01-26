<x-guest-layout>
    <img src="{{ Vite::asset('resources/media/clock.png') }}" class=" absolute opacity-25 h-screen right-0  " alt="...">
    <div class="absolute w-screen h-screen top-0 left-0 ">
    <x-auth-card class="!bg-transparent">
        <x-slot name="logo">
            <a href="/">
                <img src="{{ Vite::asset('resources/media/uren_logo_register.svg') }}" alt="" width="90px" length="auto">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
