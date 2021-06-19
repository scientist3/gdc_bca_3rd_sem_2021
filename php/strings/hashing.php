<?php
$strPassword = "Aamir";

$hashMd5Password = md5($strPassword);
$hasdSha1Password = sha1($strPassword);
echo $strPassword;
echo "<br>";
echo $hashMd5Password;
echo "<br>";
echo $hasdSha1Password;

// 200e98aeb6839a75590451de02d15a43
// 7ae9977f4e0cd9647a5e85971765a544
// 200e98aeb6839a75590451de02d15a43