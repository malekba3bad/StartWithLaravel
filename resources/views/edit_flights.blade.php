<!DOCTYPE html>
<html>
<body>

<h1>Create Flight</h1>

<form action="{{ route('update_flights', $data) }}" method="POST">
    @csrf
  <label for="name">Flight Name</label>
  <input type="text" id="name" name="name" value="{{$data->name}}"><br><br><br>
  <input type="submit" value="update">
</form>


</body>

</html>

