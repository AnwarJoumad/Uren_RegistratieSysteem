<div>
    @if($message = session('message'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ $message }}</span>
        </div>
    @endif

    @if($showInput == true)
    <input  placeholder="Naam taak" type="text" style="border: 1px solid black; border-radius: 0.375rem" wire:model="newTask">
    <button wire:click="addTask" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Taak Toevoegen</button>
    @endif
        @if($showInput == false)
        <button wire:click="showInput" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Taak toevoegen</button>
        @endif
        <div class="p-8 text-gray-900">
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Taak Naam
                        </th>
                        <th scope="col" class="py-3 px-6">
                            aanpassen
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Verwijderen
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($tasks as $task)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @if($changeInput == true && $task_id == $task->id)
                                <input placeholder="{{$task->name}}" type="text" wire:model="changeTask">
                                @else
                                {{$task->name}}
                                @endif
                            </th>
                            <td class="py-4 px-6">
                                @if($changeInput == false)
                                    <button wire:click="changeInput({{ $task->id }})" style="border: 2px solid blue" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Taak bewerken</button>
                                @else
                                    <button wire:click="changeTask({{ $task->id }})"  style="border: 2px solid #ee0d73" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Taak aanpassen</button>
                                @endif


                            </td>
                            <td class="py-4 px-6">
                                <button wire:click="deleteTask({{ $task->id }})" style="border: 2px solid #ee0d73; color: #FFFFFF; background-color: #ee0d73" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Taak verwijderen</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
</div>
