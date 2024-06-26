<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);
echo '<pre />';

// Search array
echo in_array('banana', $fruits);

echo '<pre />';

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// Split into chunks of 2
print_r($fruits);

$chunkedArray = array_chunk($fruits, 2);
print_r($chunkedArray);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

print_r($c);

// Array of keys
$keys = array_keys($c);

print_r($keys);

// Flip keys with values
$flipped = array_flip($c);
print_r($flipped);

// Create array of numbers with range()
$numbers = range(1, 5);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number $number";
}, $numbers);

// Using arrow function
$newNumbers = array_map(fn($number) => "Number $number", $numbers);

print_r($newNumbers);

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 3);

print_r($lessThan10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);
