<!-- Create a PHP page which accepts string from user. After submission that page displays the reverse of provided string. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World in different languages</title>
</head>

<body>
  <h1>Create a PHP page which accepts string from user. After submission that page displays the reverse of provided string.</h1>
  <form action="#" method="get">
    <input type="text" name="userdata" value="<?php echo isset($_GET['userdata']) ? $_GET['userdata'] : ""; ?>" placeholder="Enter any string, i'll reverse it">
    <input type="submit" value="Reverse">
  </form>
  <?php

  if (isset($_GET['userdata'])) {
    $userData = $_GET['userdata'];
    echo "<h3>";
    echo "Your String is   : " . $userData . "<br>";
    echo "Reverse String is: " . strrev($userData) . "<br>";
    echo "</h3>";
  }
  ?>

</body>

</html>