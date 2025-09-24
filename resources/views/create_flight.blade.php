<!DOCTYPE html>
<html>
<body>

<h1>Create Flight</h1>
<!-- /resources/views/post/create.blade.php -->

<h1>Create New Flight</h1>

{{-- @if ($errors->any())
    
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     
@endif --}}

<!-- Create Post Form -->

<form action="{{ route('store_flight') }}" method="POST">
    @csrf
  <label for="name">Flight Name</label>
  <input type="text" id="name" name="name"><br><br>
  @error('name')
    <div style="color: red" class="alert alert-danger">{{ $message }}</div>
    
  @enderror
  <input type="submit" value="Submit">
</form>


</body>

</html>

