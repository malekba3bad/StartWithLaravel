<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.button {
    float: left;
    background-color: #04AA6D;
    border-radius: 5px;
  border: none;
  color: white;
  padding: 10px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<h1 style="text-align:center">Flights</h1>
    <a href="{{route('create_flights')}}" class="button">add flight</a>

<table dir="rtl" style="text-align: center">
  <tr >
    <th dir="rtl" style="text-align: center">name</th>
    <th dir="rtl" style="text-align: center">date</th>
    <th dir="rtl" style="text-align: center">edit</th>
    
  </tr>

  @if(@isset($data) and !@empty($data))
    @foreach($data as $info)
        <tr>
            <td>{{$info->name}}</td>
            <td>{{$info->created_at}}</td>
            <td><a {{route('edit_flights')}} class="button" style="background-color: #04AA6D; padding: 10px 5px; border-radius: 5px;">edit</a></td>
            
        </tr>
    @endforeach

      
  @endif
  

</table>

</body>
</html>



