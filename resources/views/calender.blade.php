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



    </head>
    <style>
        .fc-event-title{
            color: black;
        }
    </style>
    <body>
    <script>



        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'nl',
                initialView: 'dayGridMonth',
                nowIndicator: true,
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
                    alert(info.event.title)
                },

                events: [
                        @foreach($worked as $workedday)
                    {

                        title: "Gewerkt van " +  "{{date('H:i', strtotime($workedday->start_time))}}"  +  " tot " + "{{date('H:i', strtotime($workedday->end_time))}}\n" + "pauze: {{$workedday->break_time}} uur",
                        allDay: true,
                        start: "{{$workedday->start_time}}",
                        end: "{{$workedday->end_time}}",
                        display: 'background',
                        color: 'lightgreen',

                    },
                    @endforeach
                ],
            });
            calendar.render();
        });
    </script>

    <div class="container" style="width: 800px; margin: 0 auto">
        <div id='calendar'>
        </div>
    </div>
    </body>
    </html>
</x-app-layout>
