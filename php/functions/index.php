<h1>Hiiii</h1>
<?php
// Function declaration  
function greeting()
{
  echo "Hey students, how are you!";
}

//echo "Hey students";
// Calling a function
//greeting();

// function declaration with argument
function greetStd($name)
{
  echo "Hey " . $name . ", how are you!";
}
// echo "<br>";
// greetStd("Adil");
// echo "<br>";
// greetStd("Rameez");


function addInt($intNumber1, $intNumber2)
{
  $intResult = $intNumber1 + $intNumber2;
  return $intResult;
}

$sum = addInt(12, 23);
//echo ("Sum is: " . $sum);

function addInt2($intNumber1, $intNumber2)
{
  $intResult = $intNumber1 + $intNumber2;
  echo ("Sum is: " . $intResult);
}

addInt2(12, 45);







/*
  syntax for declaring a function
  function <functionName>() {
    // code
  }

   function call
  <functionName>();

*/
?>

<h1>Bye</h1>