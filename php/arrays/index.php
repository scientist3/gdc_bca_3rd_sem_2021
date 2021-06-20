<?php
echo "<pre>";
$strName = "Hey how are you!";
$intAge = 27;
$floatMarks = 96.4;


var_dump($strName);
var_dump($intAge);
var_dump($floatMarks);

$person = array("Aamir", 27, 96.4);

$arrStudent = array($strName, $intAge, $floatMarks);

var_dump($person);
var_dump($arrStudent);

print_r($arrStudent);

// $arrStudent[0] = Hey how are you!
// $arrStudent[2] = 96.4


// Internal structure C Lang
// Saved & Expalined on JamBoard


$arr = [1, 3, "Hey"];

print_r($arr);
var_dump($arr);


// Associative array;

// Declaration

$arrAssoc = array("Name" => "Aamir", "Age" => 27);
//               (Key => value, Key => Value)
//$arrAssoc = [];

var_dump($arrAssoc);

// Access Index based array vs Assoc Array
echo $arr[0];

echo "Name: " . $arrAssoc["Name"];


// print_r(each($arrAssoc));
// foreach ($array as $value) {
echo "<br>--------------------------<br>";
foreach ($arrAssoc as $val) {
  echo "<br>:" . $val;
}


foreach ($arr as $val) {
  echo "<br>::" . $val;
}


foreach ($arrAssoc as $index => $val) {
  echo "<br>[" . $index . "]:" . $val;
}


foreach ($arr as $index => $val) {
  echo "<br>[" . $index . "]::" . $val;
}
