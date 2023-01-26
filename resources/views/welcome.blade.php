
<body>
    <x-guest-layout>

        <img src="{{ Vite::asset('resources/media/clock.png') }}" class=" absolute opacity-25 h-screen right-0  " alt="...">






        <div class="absolute w-screen h-screen top-0 left-0 ">
            <x-auth-card class="!bg-transparent">
                <x-slot name="logo">
                    <a href="/">
                        <img src="{{ Vite::asset('resources/media/uren_logo_register.svg') }}" alt="" width="90px" length="auto">
                    </a>
                </x-slot>


                    @if (Route::has('login'))
                        <div style="display: flex; justify-content: space-around; ">
                            @auth
                                <x-primary-button class="w-full !text-center !inline" style="margin: 5px;">
                                    <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-white-700 dark:text-white-500 ">Dashboard</a>
                                </x-primary-button>
                            @else
                                <x-primary-button class="w-full !text-center !inline" style="margin: 5px" >
                                    <a href="{{ route('login') }}" class="ml-4 text-sm text-white-700 dark:text-white-500 ">Log in</a>
                                </x-primary-button>
                                @if (Route::has('register'))
                                    <x-primary-button class="w-full !text-center !inline" style="margin: 5px">
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 dark:text-white-500 ">Register</a>
                                    </x-primary-button>
                                @endif

                            @endauth
                        </div>
                    @endif





            </x-auth-card>
        </div>






    </x-guest-layout>
</body>
