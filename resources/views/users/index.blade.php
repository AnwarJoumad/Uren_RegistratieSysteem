<x-app-layout>
    <div class="py-12 z-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="shadow-xl rounded-lg cursor-pointer">
                    @foreach($users as $user)

                    <div class="border-b flex px-4 py-4 justify-between bg-white  ">
                        <div class="flex justify-between">
                            <div class="ml-4 flex flex-col capitalize text-gray-600 ">
                                <span>Naam</span>
                                <span class="mt-2 text-black">{{$user->name}}</span>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
