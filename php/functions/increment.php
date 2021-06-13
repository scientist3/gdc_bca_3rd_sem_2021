<?php
//Default arguments

function incre($val = 1, $inc = 1)
{
  $val += $inc;
  echo $val;
}



incre(4, 5);
incre(4);
incre();
