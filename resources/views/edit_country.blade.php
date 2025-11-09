<!DOCTYPE html>
<html>
<body>

<h1>Create Flight</h1>

<form action="{{ route('country.update', $data) }}" method="POST">
    @csrf
    @method('PUT')
  <label for="name">Country Name</label>
  <input type="text" id="name" name="name" value="{{$data->name}}"><br><br><br>
  <input type="submit" value="update">
</form>


</body>

</html>

