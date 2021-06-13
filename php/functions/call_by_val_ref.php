<?php
// Paasing variable by reference
function swap(&$intNumber1, &$intNumber2)
{
  $temp = $intNumber1;
  $intNumber1 = $intNumber2;
  $intNumber2 = $temp;
  echo "<br>--------With in function-------------<br>";
  echo "N1: " . $intNumber1 . "<br>";
  echo "N2: " . $intNumber2 . "<br>";
}

$numb1 = 12;
$numb2 = 34;
echo "<br>---------Before Swap------------<br>";

echo "N1: " . $numb1 . "<br>";
echo "N2: " . $numb2 . "<br>";


// Swapning var values;
// Call by Reference
swap($numb1, $numb2);

echo "<br>---------After Swap------------<br>";
echo "N1: " . $numb1 . "<br>";
echo "N2: " . $numb2 . "<br>";
