<form action="{{route('works.store')}}" method="POST">
    @csrf
<label for="start_time">start dag</label><br>
<input type="datetime-local" id="start_time" name="start_time" ><br>

<label for="end_time">einde dag</label><br>
<input type="datetime-local" id="end_time" name="end_time" ><br>

    <label>Aantal minuten pauze</label> <br>
        <select name="break" >
            <option value="0.00">0 minuten pauze</option>
            <option value="0.25">15 minuten pauze</option>
            <option value="0.5">30 minuten pauze</option>
            <option value="0.75">45 minuten pauze</option>
            <option value="1.00">60 minuten pauze</option>
            <option value="1.25">75 minuten pauze</option>
            <option value="1.50">90 minuten pauze</option>
        </select>

    <br><label>gewerkte taak</label> <br>
    <select name="task" >
@foreach($tasks as $task)
            <option value="{{$task->id}}">{{$task->name}}</option>
        @endforeach
    </select>

    <label for="description">reden</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea><br>






    <br><input type="submit" value="tijd registeren">
</form>
