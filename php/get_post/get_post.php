<?php
// echo "GET";
// print_r($_GET);
// echo "POST";
// print_r($_POST);


$name = $_POST['fname'];
$psw  = $_POST['password'];

echo $name . "/" . $psw;

if ($name == "aamir" && $psw == "1234") {
  header("location:./dashboard.html");
} else {
  header("location:./index.php");
}






// // Control Statement:
//   Used to changes the "flow of execution" of your program:

/*   if, if...else switch
      one way control statments: if,
      Two way CS : if else 
      multiway branching: switch 

// //header("location:./dashboard.html");
//echo "<a href='./index.php'>Click here to goto the index file</a>";
*/