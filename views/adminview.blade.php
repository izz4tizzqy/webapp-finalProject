<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Reservations</h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
      
        <th>Name</th>
        <th>Phone</th>
        <th>Hospital</th>
        <th>Date</th>
        <th>Time</th>
        
      </tr>
    </thead>
    <tbody>

    @foreach($finall as $row)

        <tr>
        
        <td>{{$row['name']}}</td>
        <td>{{$row['phone']}}</td>
        <td>{{$row['hospital']}}</td>
        <td>{{$row['date']}}</td>
        <td>{{$row['time']}}</td>
        
        </td>
     @endforeach
     </tr>
     </tbody>
  </table>
</div>

</body>
</html>
