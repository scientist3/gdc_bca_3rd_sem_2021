<?php
//phpinfo();
$strInputString = "the quick brown fox jumps over the lazy dog.";
$pattern = "/^(.*?)\bthe\b/";
$strReplaceString = "That";
$strOutputString = preg_replace($pattern, $strReplaceString, $strInputString);

$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1} ${2},$3';
echo preg_replace($pattern, $replacement, $string);
