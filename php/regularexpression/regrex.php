<?php

/*
$str1 = "Hey, Students welcome to the php class.";

$str2 = "Hey";

if (!strcmp($str1, $str2)) {
  echo "String are same";
} else {
  echo "Strings are not same";
}

echo "<br>";

echo strstr("Hello world!", "Hello");

$string = " Im 28 years old.";

echo "<br>";

echo strpos($string, "27");


$str = "Visit W3Schools";
$pattern = "\d";

"7abcd"

name@Subdomain.topld
<[a-zA-Z0-9][0-9]>*@<>*.<>2,3

//echo preg_match($pattern, $str); // Outputs 1

<h1>dfhsdhkf</h1>
*/

// $string = "Amir";

// $pattern = "/^A|^a/";
// $pattern = "/[A-Z]*/"
// echo preg_match($pattern, $string);

// $str2 = "2535";

// $patnum = "/\d{2,4}/";

// echo preg_match($patnum, $str2);

// $str3 = "this is a long text which contains new line as well";

// $pat3 = "/\n/";
// echo preg_match($pat3, $str3);

//echo $str3;


/*
// Declare a regular expression
$regex = "([0-9]+)";

// Declare a string
$original = "Completed graduation in 2004";
$replaceWith = "2002";

// Use ereg_replace() function to search a
// string pattern in an other string
$original = preg_replace($regex, $replaceWith, $original);

// Display result
echo $original;
*/



// Declare a string
$ip = "134.645.478.670";

// Declare a regular expression
$regex = "/4/";

// Use preg_split() function to
// convert a given string into
// an array
$output = preg_split($regex, $ip);

print_r($output);
// echo "$output[0] <br>";
// echo "$output[1] <br>";
// echo "$output[2] <br>";
// echo "$output[3] <br>";









/*

// Find the valid ip address


$string = "255.255.255.255";
$pattern1 = '/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/';

$pattern2 = '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/';

if (preg_match($pattern, $string)) {
  echo "IP address is good.";
}


// Find Valid Website URL

$patternUrl = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";


$patternEmail = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
//////////////////////////////////////
// PHP program to validate email

// Function to validate email using regular expression
function email_validation($str)
{
  return (!preg_match(
    "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",
    $str
  ))
    ? FALSE : TRUE;
}

// Function call
if (!email_validation("author@geeksforgeeks.com")) {
  echo "Invalid email address.";
} else {
  echo "Valid email address.";
}

//////////////////////////////////////
*/