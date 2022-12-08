<livewire:side-menu />


<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel="stylesheet" />
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>

        <script>



            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    themeSysteem: 'bootstrap5',
                    locale: 'nl',
                    initialView: 'dayGridMonth',
                    nowIndicator: true,
                    options: {

                    },
                    headerToolbar: {
                        start : 'title',
                        center : 'today',
                        end: 'prev next prevYear nextYear',
                        year: 'numeric', month: 'long',



                    } ,
                    footerToolbar: {
                        start : 'prev',
                        end: 'next',



                    } ,

                    eventClick: (info) => {
                        alert("gestart om " + info.event.start +  + "gestopt om " + info.event.end)
                    },



                    events: [
                        @foreach($worked as $workedday)
                        {
                            title: "{{date('H:i', strtotime($workedday->end_time))}}",
                            start: "{{$workedday->start_time }}",
                            end: "{{$workedday->end_time}}",
                            breaks: "{{$workedday->break_time}}",
                        },
                        @endforeach
                    ],
                    eventColor: '#00FF00',

                });
                calendar.render();
            });



        </script>
    </head>
    <body>
    <h1>Full calandar</h1>
    <div class="container" style="width: 800px; margin: 0 auto">
        <div id='calendar'>



        </div>
    </div>
    </body>
    </html>
</x-app-layout>
