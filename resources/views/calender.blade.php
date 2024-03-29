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
                    const maxdate =  new Date(Date.now() + (3600 * 1000 * 24));
                    maxdate.setHours(0,0,0,0);
                    const mindate = new Date(Date.now() -  (3600 * 1000 * 24));
                    mindate.setHours(0,0,0,0);
                    var eventdate = new Date(info.event.start);
                    eventdate.setHours(0,0,0,0);

                    if (eventdate <= maxdate && eventdate >= mindate) {
                        document.location = info.event.url;
                    }
                    else
                    {
                        alert('Je kunt alleen diensten op de dag zelf of de dag erna aanpassen');
                    }


                },

                events: [
                        @foreach($worked as $workedday)
                    {

                        title: "Gewerkt van " +  "{{$workedday->start_time->format('H:i')}} - {{date('H:i', strtotime($workedday->end_time))}}\n pauze: {{$workedday->break_time * 60}} min",
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
                        title: "Goedgekeurd",
                        @else
                        title: "Nog niet goedkeurd",
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
        <div id='calendar' style="margin-bottom: 20px">
        </div>
    </div>
</x-app-layout>
