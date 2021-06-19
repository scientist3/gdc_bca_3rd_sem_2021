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
  // this function doesn't not exist untill the other function does not gets executed, once it is executed then this function is defined and then we can call this from anywhere.
  function justOneFunctionInsideAnotherFun()
  {
    echo "Im inside justOneFunctionInsideAnotherFun <br>";
  }
  //justOneFunctionInsideAnotherFun();
}

justAnotherFunction();
justAnotherFunction();
justOneFunctionInsideAnotherFun();
