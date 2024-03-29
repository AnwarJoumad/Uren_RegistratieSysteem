<x-app-layout>

    <x-slot name="header">

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('verlof.store')}}" method="POST">
                        @csrf
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0  w-full group">
                                <label for="start_datetime">Start dag</label><br>
                                <input type="date" id="start_datetime" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="start_datetime" ><br>
                            </div>
                            <div class="relative z-0  w-full group">
                                <label for="end_datetime">Einde dag</label><br>
                                <input type="date" id="end_datetime" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="end_datetime" ><br>
                            </div>
                        </div>
                        <label for="description">Omschrijving</label><br>
                        <textarea id="description" class="block p-2.5 w-full mt-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description" rows="4" cols="50"></textarea><br>

                        <button type="submit" style="background-color: #ee0d73;" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

