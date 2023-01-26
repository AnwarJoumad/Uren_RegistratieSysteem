<div >
    <header class="h-18 w-full flex  flex-row items-center fixed justify-end z-20 pr-5 pb-14space-x-10 bg-[#ee0d73]">
        <div>
        <button id="expand" class="hover:bg-gray-50 bg-gray-200  h-16 w-20 px-2 ">
            <i class="fa-solid fa-bars"></i>
        </button>
        </div>
        <nav x-data="{ open: false }" id="navbar" class="sticky top-0  w-full  bg-[#ee0d73] px-4 sm:justify-between">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div id="main">
                    </div>
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('dashboard') }}">
                                    <x-application-logo class="block h-9 w-auto fill-current text-white" />
                                </a>
                            </div>
                        </div>

                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <x-responsive-nav-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    <aside id="nav" class="h-full w-20 flex flex-col z-10 items-center justify-start fixed bg-gray-200 text-black  fa-xl">
        <ul id="sideNav" class="text-center px-2 pt-16">
            <li class=" ">
                <a href="{{route('calender')}}">
                    <button class="rounded-xl hover:bg-gray-50 h-16 w-16 ">
                        <i class="fa-solid fa-calendar"></i>
                        <p id="navText1" class="hidden text-sm ">Calender</p>
                    </button>
                </a>
            </li>
            {{--<li>
                <a href="{{route('users')}}">
                <button class="rounded-xl hover:bg-gray-50 h-16 w-16">
                    <i class="fa-solid fa-users"></i>
                    <p id="navText2" class="hidden text-sm">Gebruikers</p>
                </button>
                </a>
            </li>--}}
            <li>
                <a href="{{route('works.create')}}">
                    <button class="rounded-xl hover:bg-gray-50 h-16 w-16">
                        <i class="fa-solid fa-clock"></i>
                        <p id="navText2" class="hidden text-sm">Klok</p>
                    </button>
                </a>
            </li>

            @if (Auth::user()->role === 'admin')
                <li>
                    <a href="{{route('tasks')}}">
                        <button class="rounded-xl hover:bg-gray-50 h-16 w-16 ">
                            <i class="fa-solid fa-list-check"></i>
                            <p id="navText5" class="hidden text-sm">Taak</p>
                        </button></a>
                </li>

                <a href="{{route('verlofverzoeken')}}">
                    <button class="rounded-xl hover:bg-gray-50 h-16 w-16 ">
                        <i class="fa-solid fa-house-chimney-user"></i>
                        <p id="navText3" class="hidden text-sm">Verlof verzoeken</p>
                    </button></a>
            </li>

            @else


                <li>

                    <a href="{{route('verlof.create')}}">
                        <button class="rounded-xl hover:bg-gray-50 h-16 w-16 ">
                            <i class="fa-solid fa-house-chimney-user"></i>
                            <p id="navText3" class="hidden text-sm">Verlof</p>
                        </button></a>
                </li>


            @endif

        </ul>
    </aside>
    <div class="pt-24">{{$slot}}</div>
</div>
<script>
    document.getElementById("expand").addEventListener("click",expand);
    function expand(){
        document.getElementById('nav').classList.toggle('!w-40');
        document.getElementById('navText1').classList.toggle('hidden');
        document.getElementById('navText2').classList.toggle('hidden');
        document.getElementById('navText3').classList.toggle('hidden');
        document.getElementById('navText4').classList.toggle('hidden');
        document.getElementById('navText5').classList.toggle('hidden');
    }
</script>



