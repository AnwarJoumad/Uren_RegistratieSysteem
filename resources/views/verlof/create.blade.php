<h1>verlof</h1>

<form action="{{route('verlof.store')}}" method="POST">
    @csrf
    <label for="start_datetime">start dag</label><br>
    <input type="datetime-local" id="start_datetime" name="start_datetime" ><br>

    <label for="end_datetime">einde dag</label><br>
    <input type="datetime-local" id="end_datetime" name="end_datetime" ><br>

    <label for="description">reden</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea><br>


    <br><input type="submit" value="tijd registeren">
</form>
