<x-guest-layout>
    <img src="{{ Vite::asset('resources/media/clock.png') }}" class=" absolute opacity-25 h-screen right-0  " alt="...">
    <div class="absolute w-screen h-screen top-0 left-0 ">
    <x-auth-card class="!bg-transparent">
        <x-slot name="logo">
            <a href="/">
                <img src="{{ Vite::asset('resources/media/uren_logo_register.svg') }}" alt="" width="90px" length="auto">
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="text-xl text-center">Registreer</h3>

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
                <x-primary-button class="w-full !text-center !inline mt-4">
                    {{ __('Registreer') }}
                </x-primary-button>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>


            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
