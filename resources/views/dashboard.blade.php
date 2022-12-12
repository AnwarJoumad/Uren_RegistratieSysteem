<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                   <br>
                    <x-primary-button>
                        <a href="{{route('works.create')}}">{{ __('Create time') }}</a>
                    </x-primary-button>
                    <br>
                    <a href="{{route('verlof.create')}}">create verlof</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
