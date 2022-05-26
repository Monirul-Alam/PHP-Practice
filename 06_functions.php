<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser() {
  $x = 10;
  echo 'User registered';
}
registerUser();


function sum($n1, $n2) {
  return $n1 + $n2;
}
// echo sum(5,5); // must echo to get the output.

$subtract = function($n1, $n2) {
  return  $n1 - $n2  ;
};
 echo $subtract(4,2);

 //$m = fn($ng1, $ng2) => $ng1 * $ng2;
  echo $m(9,9);

// Arrow functions // NOT WORKING!!!!


// echo $multiply(5, 5);
 ?>