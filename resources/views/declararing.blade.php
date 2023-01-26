<x-app-layout>
    <div class="py-12 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-8 text-gray-900">
    <div class="overflow-x-auto relative">
        <table  id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Datum
                </th>
                <th scope="col" class="py-3 px-6">
                    naam
                </th>
                <th scope="col" class="py-3 px-6">
                    beschrijving
                </th>
                <th scope="col" class="py-3 px-6">
                    hoeveelheid
                </th>
                <th scope="col" class="py-3 px-6">
                    goedgekeurd
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($gegevens as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->date}}
                    </th>
                    <td class="py-4 px-6">
                        {{$item->user->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$item->description}}
                    </td>
                    <td class="py-4 px-6">
                        € {{$item->amount}}
                    </td>
                    <td class="py-4 px-6">
                        <form  method="POST" action="{{route('declaraties.update', $item)}}">
                            @csrf
                            @method('put')
                            <a href="#" >
                                @if($item->approved == 1)

                                    al goed gekeurd
                                @else
                                    <button type="submit" style="background-color: #ee0d73; cursor: pointer;" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Accepteren</button>

                                @endif
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
