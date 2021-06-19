<?php
//Strings: Set/sequ of symbols enclosed in quotes

// Creating String
$strVar = "Ima string";

var_dump($strVar);

$intVar = 100;
$fltVarname = 1000.19;
var_dump($intVar);
var_dump($fltVarname);
// accessing strings
echo $strVar . "<br>";

// String Manipulation Function.

// TO find the length
echo "String Lenght is: " . strlen($strVar) . "<br>";

// To reverse a string.
echo "String Reverse is: " . strrev($strVar) . "<br>";

//strpos() - Search For a Text Within a String
echo "Postition: " . strpos("Helloworld!", "w");
echo "<br>";
// str_replace() - Replace Text Within a String
$strReplace = 'The quick "" brown fox';
echo "Original String is : " . $strReplace;
echo "<br>";
echo "Replaced string is: " . str_replace(" ", "", $strReplace);
echo "<br>";

//echo ":::" . $strReplace[1];

// str_word_count() - Count Words in a String

echo "Words count : " . str_word_count("Aamir Sofi with his friends at manasbal lake.");



















function replaceSpace($strInputString)
{
  // "Aamir Sofi"
  $strLen = strlen($strInputString);
  $strRes = "";
  for ($index = 0; $index <= $strLen - 1; $index++) {
    if ($strInputString[$index] === " ") {
      continue;
    }
    $strRes = $strRes . $strInputString[$index];
  }

  return $strRes;
}

echo "<br><br>";
echo replaceSpace("Aa mir So fi");
















//echo "he\'s \"he\"";

/*<!-- Creating and accessing String , Searching & Replacing String
Formatting joining and splitting String , String Related Library functions
Use and advantage of regular expression over inbuilt function
Use of preg_match(), preg_replace(), preg_split() functions in regular expression -->*/
