<x-app-layout>
    <x-slot name="header">
        <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    </x-slot>
    <div class="py-12 mb-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">

                    <div class="overflow-x-auto relative">
                        <h1 class="font-semibold text-xl">Mijn gegevens</h1>
                        <p>{{$user->name}}</p>
                        <p>{{$user->email}}</p>
                        <p>{{$user->role}}</p>
                    </div>
                </div>
            </div>
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
                                    Gewerkte uren
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Pauze
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    activiteit
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($worked as $work)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$work->start_time->format('d-m-Y')}}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{$work->total_time}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$work->break_time}} uur
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$work->taskName->name}}
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

<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } )
</script>
