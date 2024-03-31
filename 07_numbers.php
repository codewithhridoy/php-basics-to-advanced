<?php

/*
 * There are three main numeric types in PHP:
 * Integer
 * Float
 * Number Strings
 *
 * In addition, PHP has two more data types used for numbers:
 * Infinity
 * NaN
 * */


$total_flats = 2;
$per_flat_price = 5000.00;
$total_price = "1e4";
$final = 2 * $total_price; // returns float

var_dump($total_flats, $per_flat_price, $total_price, $final);

echo '<pre>';
echo '===== Check integer ====';
echo '<pre>';

/*
 * Check integer
 * is_int()
 * is_integer() - alias of is_int()
 * is_long() - alias of is_int()
 * */

$x = 5985;
var_dump(is_int($x));

$y = 59.85;
var_dump(is_int($y));


echo '<pre>';
echo '===== Check Float ====';
echo '<pre>';

/*
 * Check Float
 * is_float()
 * is_double() - alias of is_float()
 * */

$x = 10.365;
var_dump(is_float($x));

echo '<pre>';
echo '===== Check Numeric ====';
echo '<pre>';


/*
 * Check Numeric
 * is_numeric()
 * */

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

echo '<pre>';
echo '===== Check Infinity ====';
echo '<pre>';

/*
 * Check Infinity
 * is_finite()
 * is_infinite()
 * */

$x = 1.9e411;
var_dump($x);
var_dump(is_finite($x));
var_dump(is_infinite($x));

echo '<pre>';
echo '===== Check NaN ====';
echo '<pre>';

/*
 * Check NaN
 * is_nan()
 * */

$x = acos(8);
var_dump($x);
var_dump(is_nan($x));
