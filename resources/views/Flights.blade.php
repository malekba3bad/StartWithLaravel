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
</style>
</head>
<body>

<h1 style="text-align:center">Flights</h1>

<table dir="rtl" style="text-align: center">
  <tr >
    <th dir="rtl" style="text-align: center">name</th>
    <th dir="rtl" style="text-align: center">date</th>
    
  </tr>

  @if(@isset($data) and !@empty($data))
    @foreach($data as $info)
        <tr>
            <td>{{$info->name}}</td>
            <td>{{$info->created_at}}</td>
            
        </tr>
    @endforeach

      
  @endif
  

</table>

</body>
</html>



