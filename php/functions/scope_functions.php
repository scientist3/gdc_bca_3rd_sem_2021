<?php
/*
$name = "Aadil";
echo "Global: " . $name . "<br>";

// Block of code 
function justRandomFun()
{
  $name = "Aamir";
  echo "Local: " . $name . "<br>";
}
justRandomFun();
//
echo "?: " . $name . "<br>";

*/
// Function Scope

function justAnotherFunction()
{
  echo "im inside justAnotherFunction <br>";
  function justOneFunctionInsideAnotherFun()
  {
    echo "Im inside justOneFunctionInsideAnotherFun <br>";
  }
  //justOneFunctionInsideAnotherFun();
}

justAnotherFunction();
justAnotherFunction();
justOneFunctionInsideAnotherFun();
