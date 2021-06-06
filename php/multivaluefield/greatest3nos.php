<!DOCTYPE html>
<html>

<head>
  <title>Largest Number</title>
</head>

<body>
  <form method="post" action="#">
    Enter the first number:<br>
    <input type="text" name="num1"><br>
    Enter the second number:<br>
    <input type="text" name="num2"><br>
    Enter the third number:<br>
    <input type="text" name="num3">
    <br>
    <input type="submit" name="submit">
  </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $num3 = $_POST["num3"];
  echo "<br>";
  if ($num1 > $num2 && $num1 > $num3) {
    echo $num1 . " Is Greater";
  } else {
    if ($num2 > $num1 && $num2 > $num3) {
      echo $num2 . " Is Greater";
    } else
      echo $num3 . " Is Greater";
  }
}
?>