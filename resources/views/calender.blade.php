<x-app-layout>

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
                    document.location = info.event.url;
                },

                events: [
                        @foreach($worked as $workedday)
                    {

                        title: "Gewerkt van " +  "{{$workedday->start_time->format('H:i')}} - {{date('H:i', strtotime($workedday->end_time))}}\n pauze: {{$workedday->break_time * 60}} minuten",
                        allDay: true,
                        start: "{{$workedday->date}}",
                        display: 'background',
                        color: 'lightgreen',
                        url: '{{route('works.edit', $workedday)}}',

                    },
                    @endforeach
                    @foreach($leave as $item)
                    {
                        @if($item->checked == 1)
                        title: "{{$item->description}} goedgekeurd",
                        @else
                        title: "{{$item->description}}",
                        @endif
                        start: "{{$item->start_datetime}}",
                        end: "{{$item->end_datetime}}",
                        display: 'background',
                        color: 'lightblue',

                    },
                    @endforeach
                ],
            });
            calendar.render();
        });
    </script>
    <div class="container" style="width: 700px; margin: 0 auto">
        <div id='calendar'>
        </div>
    </div>
</x-app-layout>
