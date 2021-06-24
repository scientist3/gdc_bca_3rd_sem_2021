<?php
// Practical No 19 using simple string function.
/**
 * Write a PHP script to replace the first 'the' of the following string with 'That'.
 * Sample: 'the quick brown fox jumps over the lazy dog.'
 * Expected Result: That quick brown fox jumps over the lazy dog.
 */
//echo "<pre>";
$inputString = "the quick brown fox jumps over the lazy dog.";
$replacingWord = "the";
$replacedWithWord = "That";
$outputString = "";

$arrInputString = explode( " ", $inputString );
// print_r($arrInputString);
// var_dump($arrInputString);

foreach ( $arrInputString as $index => $word ) {
  if($word == $replacingWord){
  //if (!strcmp($word, $replacingWord)) {
    $arrInputString[$index] = $replacedWithWord;
    break;
  }
}

$outputString = implode( " ", $arrInputString );
echo "Input String: " . $inputString . "<br>\n";
echo "Output Stirng: " . $outputString . "<br>\n";
