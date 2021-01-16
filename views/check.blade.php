<!DOCTYPE html>
<html lang="en">
<head>
  <title>Symptoms Check</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
  <h2>Check Your Symptoms,  {{session('user')}}</h2>
  <form action="/input" method="POST">
  @csrf

    <div class="form-group">
    <label for="gender">What is your gender?</label> <br>
        <input type="radio" name="male" value="male"> Male <br>
        <input type="radio" name="female" value="female"> Female <br>
        <input type="radio" name="transm" value="transm"> Transgender male <br>
        <input type="radio" name="transf" value="transf"> Transgender female <br>
        <input type="radio" name="notsay" value="notsay"> I prefer not to say <br>

    </div>

    <div class="form-group">
    <label for="travel">Have you traveled outside the country anytime from December 2019 until now?</label> <br>
    <input type="radio" name="yes" value="yes"> Yes <br>
    <input type="radio" name="no" value="no"> No <br>
    </div>

    <div class="form-group">
    <label for="travelcontact">Have you come into contact with anyone who has traveled outside your country between the period of December 2019 until now?</label> <br>
    <input type="radio" name="contactyes" value="cantactyes"> Yes <br>
    <input type="radio" name="cantactno" value="contactno"> No <br>
    <input type="radio" name="notsure" value="notsure"> Not sure <br>
    </div>

    <div class="form-group">
    <label for="symptom">Do you currently have any of the following conditions during this time? (Check all that apply):</label> <br>
    <input type="checkbox" name="fever" value="fever"> High Fever <br>
    <input type="checkbox" name="cough" value="cough"> Cough <br>
    <input type="checkbox" name="breathing" value="breathing"> Breathing Difficulty <br>
    </div>

    <div class="form-group">
    <label for="travelcontact">Would You like to do the Swab Test?</label> <br>
    <input type="radio" name="swabyes" value="swabyes"> Yes <br>
    <input type="radio" name="swabno" value="swabno"> No (yes but written as no) <br>
    </div>


    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
  
    <button type="submit" class="btn btn-primary"> Submit </button>
  </form>
</div>

</body>

<footer>
<a href="/logout">logout</a>
</footer>
</html>

