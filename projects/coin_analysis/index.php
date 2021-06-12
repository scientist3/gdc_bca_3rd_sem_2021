<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <title>Switch Case Example With Number to word conversion</title>
</head>

<body>
  <?php
  include_once('usefullfunctions.php'); ?>
  <div class="container">
    <form class="form-inline mt-3" action="#" method="get">
      <?php gen_input_field(
        'number',
        'number',
        'Enter number',
        'col-6',
        '' . isset($_GET['number']) ? $_GET['number'] : ''
      ); ?>
      <br>
      <!-- <label class="" for="number">Enter your number</label>
      <input class="form-control col-6" type="text" name="number"> -->
      <input class="btn btn-warning col-2" type="submit" name="submit" value="Submit">
    </form>
    <?php

    include_once('usefullfunctions.php');

    if (isset($_GET['submit'])) {
      $number = (int) strrev($_GET['number']);
      //var_dump($number);
      echo "<br>";
      gen_alert_data(strrev($number));
      exit;
      //print_r($_GET);
      while ($number) {
        $rem = $number % 10;
        $number = (int)$number / 10;
        switch ($rem) {
          case 0:
            echo " zero";
            break;

          case 1:
            echo " one";
            break;

          case 2:
            echo " two";
            break;

          case 3:
            echo " three";
            break;

          case 4:
            echo " four";
            break;

          case 5:
            echo " five";
            break;

          case 6:
            echo " six";
            break;

          case 7:
            echo " seven";
            break;

          case 8:
            echo " eight";
            break;

          case 9:
            echo " nine";
            break;
          default:
            "Invaild Number";
        }
      }
    }
    ?>
  </div>
</body>

</html>
<!-- Input: 1234

output:
one two three four

$input = $_POST['number'];

6/2 = 3

1234 % 10 = 4
1234 / 10 = 123

123%10 =3

while(){

switch(4){
case 0 :
echo "zero";
break;
case 1 :
echo "one";

}

} -->