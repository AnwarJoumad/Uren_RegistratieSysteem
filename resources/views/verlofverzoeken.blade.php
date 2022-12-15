<livewire:side-menu />

<x-app-layout>
    <x-slot name="header">
        <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    </x-slot>
    <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Start Tijd</th>
                <th>Eind Tijd</th>
                <th>Soort Afmelding</th>
                <th scope="col">Verlof Accepteren</th>
            </tr>
        </thead>
        <tbody>
        @foreach($verlof as $verlof)
            <tr>
                <td>{{$verlof->user_id}}</td>
                <td>{{$verlof->start_datetime}}</td>
                <td>{{$verlof->end_datetime}}</td>
                <td>{{$verlof->description}}</td>
                @if($verlof->checked =='1')
                    <td>active</td>
                @else
                    <td>not active</td>
                @endif
                <td>
                    <form  method="POST" action="{{route('verlof.update', $verlof)}}">
                        @csrf
                        @method('put')
                        <input @if($verlof->checked == 1) disabled @endif type="submit"  class="btn btn-warning ">
                    </form>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>









    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } )
    </script>


















</x-app-layout>
