<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Book Yourself a Swab Test, {{session('user')}}!!</h2>
  <form action="submit" method="POST">
  @csrf

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>

    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone no" name="phone">
    </div>

    <div class="form-group">
    <label for="hospital">Where would you do your Swab Test?</label>
        <select class="form-control" id="hospital" name="hospital">
        <option value="Putra Medical Centre">Putra Medical Centre</option>
        <option value="KPJ Ipoh Specialist Hospital">KPJ Ipoh Specialist Hospital</option>
        <option value="Borneo Medical Centre">Borneo Medical Centre</option>
        <option value="Pantai Hospital Kuala Lumpur">Pantai Hospital Kuala Lumpur</option>
        </select>
    </div>

    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>

    <div class="form-group">
    <label for="time">Choose a time:</label>
        <select class="form-control" id="time" name="time">
        <option value="Morning 8-12 am">Morning 8-12 am</option>
        <option value="Afternoon 2-5 pm">Afternoon 2-5 pm</option>
        </select>
    </div>


  
    <button type="submit" class="btn btn-primary"> Submit </button>
  </form>
</div>

</body>
</html>
