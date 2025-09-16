<!DOCTYPE html>
<html>
<body>

<h1>Create Flight</h1>

<form action="{{ route('store_flight') }}" method="POST">
    @csrf
  <label for="name">Flight Name</label>
  <input type="text" id="name" name="name"><br><br>
  <input type="submit" value="Submit">
</form>


</body>

</html>

