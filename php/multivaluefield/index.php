<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi Value Fields</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./multivaluefield.css">
</head>

<body>

</body>
<div class="container mt-5">
  <h2 class="text-center bg-success text-white p-2">Dealing with multiple fields</h2>
  <hr>
  <form action="#" method="POST">
    <div class="center-div">
      <label for="favoriteWidgets ">What are your favorite Vehicle? &nbsp;</label>
      <!-- size="3" multiple="multiple" -->
      <select name="fav[]" id="fav" multiple="multiple" size="5" style="width: 200px;">
        <option value="Car"> Car</option>
        <option value="Bike"> Bike </option>
        <option value="Cycle"> Cycle </option>
      </select>

    </div>
    <hr>
    <input type="checkbox" name="traveling[]" value="Air" /> Do you like Travelling by Air:
    <br>
    <input type="checkbox" name="traveling[]" value="Road" /> Do you like travelling by Road:


    <hr>
    <input type="submit" value="Submit" name="submitform">
  </form>
  <a href="./simpleform.php">Another Example</a>
</div>

</html>


<pre>
<?php
if (isset($_POST['submitform'])) {
  //print_r($_POST);

  $fav_arr = $_POST['fav'];

  echo "your have selected: ";
  //foreach($fav_arr as $val){
  foreach ($fav_arr as $index => $val) {
    echo $index . " : " . $val . ",";
  }



  echo "You Love traving by :";
  foreach ($_POST['traveling'] as $val) {
    echo $val, ",";
  }
}

?>

</pre>