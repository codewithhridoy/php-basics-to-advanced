<?php

/**
 * Rules for PHP variables:
 * A variable starts with the $ sign, followed by the name of the variable
 * A variable name must start with a letter or the underscore character
 * A variable name cannot start with a number
 * A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
 * Variable names are case-sensitive ($age and $AGE are two different variables)
 */

$name = 'Ahmed'; // String // Can be single or double quotes
$age = 28; // Integer
$has_kids = true; // Boolean
$number_of_kids = 1; // Boolean
$cash_on_hand = 1_00_000.55; //Float

/* --- Adding variables to strings -- */
echo "<br />";
// Double quotes can be used to add variables to strings
echo "$name is $age years old";

// deprecated at php8.3
// echo "${name} is ${age} years old";

// Concatenate Strings


if($has_kids) {
    echo '<p>He has Kids.</p>';
}

echo '<h3>' . 'He has ' . $cash_on_hand . ' BDT on hand.</h3>';

// Arithmetic Operators

echo 5 + 5;
echo "<br/>";
echo 10 - 6;
echo "<br/>";
echo 5 * 10;
echo "<br/>";
echo 10 / 2;
echo "<br/>";

// Constants - Cannot be changed
define('HOST', 'localhost'); // Old Way
const USER = 'root'; // Latest

var_dump(HOST, USER);
