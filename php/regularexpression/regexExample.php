<?php


/*
$date = "1970-01-01 00:00:00";
$pattern = "/[-\s]/";
$components = preg_split($pattern, $date);
print_r($components);

*/
echo "<pre>";
$mydob = Date('d-m-Y'); // Date("d-m-Y H:m:s")
$pattern = "/[-\s]/";
$arrMyDob = preg_split($pattern, $mydob);
//print_r($arrMyDob);

//echo "Your Day is : ".$arrMyDob[0];

$mydob = "12-Jan 1995";
$pattern = "/[-\s\ ]/";
$arrMyDob = preg_split($pattern, $mydob);
print_r($arrMyDob);
//print_r( explode('-',$mydob));
//implode()
//var_dump($mydob);