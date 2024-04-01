<?php
/* ----------- Arrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/
echo "<pre/>======== Simple Arrays ======== <pre/>";

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Outputting values from an array
echo $numbers[0];
echo "<pre/>";
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
echo '<pre>';
print_r($numbers);

echo "<pre/>======== Associative Arrays ======== <pre/>";
/*
  Associative arrays allow us to use named keys to identify values.
*/

$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
];

echo $colors[1];
echo '<pre>';

// Strings as keys
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['red'];
echo '<pre>';
print_r($hex);

echo "<pre/>======== Multi-dimensional arrays  ======== <pre/>";
/*
  Multi-dimensional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
    'first_name' => 'Hridoy',
    'last_name' => 'Ahmed',
    'email' => 'codewithhridoy@gmail.com',
];

// Array of people
$people = [
    $person1, //   [...$person1]
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com',
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com',
    ],
];

echo '<pre>';
print_r($people);
echo '<pre>';

echo "<pre/>======== Accessing values in a multi-dimensional array ======== <pre/>";
echo $people[0]['first_name'];
echo '<pre>';
echo $people[2]['email'];
echo '<pre>';

echo "<pre/>======== Encode to JSON  ======== <pre/>";
print_r(json_encode($people));

echo "<pre/>======== Decode from JSON  ======== <pre/>";
$json_obj = '{"first_name":"Hridoy","last_name": "Ahmed","email":"codewithhridoy@gmail.com"}';
echo '<pre>';
print_r(json_decode($json_obj));
