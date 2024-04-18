<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser(): void
{
  echo 'User has been registered! <pre />';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username): void
{
  echo "User $username has been registered! <pre />";
}

// Pass in an argument
registerUser2('Ahmed');

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 5);
echo $sum;

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);
