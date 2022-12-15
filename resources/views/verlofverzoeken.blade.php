<x-app-layout>
    <x-slot name="header">
        <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    </x-slot>







            <div class="py-12 mb-10">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                        <div class="p-8 text-gray-900">
                            <div class="overflow-x-auto relative">
                                <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Naam
                                        </th>
                                        <th class="py-4 px-6">
                                            Start Tijd
                                        </th>
                                        <th class="py-4 px-6">
                                            Eind Tijd
                                        </th>
                                        <th class="py-4 px-6">
                                            Soort Afmelding
                                        </th>
                                        <th class="py-4 px-6">
                                            Verlof Accepteren
                                        </th>
                                        <th class="py-4 px-6">
                                            accepteren
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($verlof as $verlof)
                                        <tr>
                                            <td>{{$verlof->user->name}}</td>
                                            <td>{{$verlof->start_datetime}}</td>
                                            <td>{{$verlof->end_datetime}}</td>
                                            <td>{{$verlof->description}}</td>
                                            @if($verlof->checked =='1')
                                                <td>Geaccepteerd</td>
                                            @else
                                                <td>Nog niet Geaccepteerd</td>
                                            @endif
                                            <td>
                                                <form  method="POST" action="{{route('verlof.update', $verlof)}}">
                                                    @csrf
                                                    @method('put')
                                                    <a href="#" >
                                                        @if($verlof->checked == 1)

                                                        @else
                                                            <button type="submit" style="background-color: #ee0d73; cursor: pointer;" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Accepteren</button>

                                                        @endif
                                                    </a>
                                                </form>
                                            </td>

                                        </tr>

                                    </tbody>
                                    @endforeach
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
