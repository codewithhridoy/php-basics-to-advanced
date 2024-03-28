<?php

/**
 * PHP supports the following data types:
 * String: Sequence of characters, enclosed within single quotes ('') or double quotes ("").
 * Integer: Whole numbers without decimal points.
 * Float /double: Numbers with decimal points or in exponential form.
 * Boolean: Represents true or false values.
 * Array: Collection of key-value pairs, where each key is associated with a value.
 * Object: Instance of a class, containing properties and methods.
 * NULL: Represents a variable with no value or an unset value.
 * Resource: Special variable holding a reference to an external resource, such as a file or database connection.
 */

$string = 'PHP'; // string(3) "PHP"
$integer = 1; // int(1)
$float = 99.99; // float(99.99)
$boolean = true; //bool(true)
$even_numbers=[2,4,6,8]; 
$obj = (object) ['key' => 'value'];
$null = NULL; // NULL
$resource = fopen("example.txt", "r");

var_dump($null, $string, $integer, $float, $boolean, $even_numbers, $obj, $resource);


/**
 array(4) {
  [0]=>
  int(2)
  [1]=>
  int(4)
  [2]=>
  int(6)
  [3]=>
  int(8)
}

object(stdClass)#1 (1) {
  ["key"]=>
  string(5) "value"
}
 */