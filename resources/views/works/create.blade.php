<livewire:side-menu />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Verlof
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('works.store')}}" method="POST">
                        @csrf
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0  w-full group">
                                <label for="start_time">Start dag</label><br>
                                <input type="time" id="start_time" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="start_time" ><br>
                            </div>
                            <div class="relative z-0  w-full group">
                                <label for="end_time">Einde dag</label><br>
                                <input type="time" id="end_time" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="end_time" ><br>
                            </div>
                        </div>
                        <label >Aantal minuten pauze</label><br>
                        <select name="break" class="bg-gray-50 border border-gray-300 mt-2 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            <option value="0.00">0 minuten </option>
                            <option value="0.25">15 minuten</option>
                            <option value="0.5">30 minuten</option>
                            <option value="0.75">45 minuten</option>
                            <option value="1.00">60 minuten</option>
                            <option value="1.25">75 minuten</option>
                            <option value="1.50">90 minuten</option>
                        </select>

                        <br><label>Gewerkte taak</label> <br>
                        <select name="task" class="bg-gray-50 border border-gray-300 mb-3 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            @foreach($tasks as $task)
                                <option value="{{$task->id}}">{{$task->name}}</option>
                            @endforeach
                        </select>
                        <label for="description">Omschrijving</label><br>
                        <textarea id="description" class="block p-2.5 w-full mt-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description" rows="4" cols="50"></textarea><br>

                        <button type="submit" style="background-color: #ee0d73;" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


