
<x-app-layout>

    <x-slot name="header">
        <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    </x-slot>
    <div class="py-12 mb-10">+
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    @livewire('add-task',['tasks' => $tasks])

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
