<?php

/*
 * Casting in PHP is done with these statements:
 * (string) - Converts to data type String
 * (int) - Converts to data type Integer
 * (float) - Converts to data type Float
 * (bool) - Converts to data type Boolean
 * (array) - Converts to data type Array
 * (object) - Converts to data type Object
 * (unset) - Converts to data type NULL
 * */

// Cast to Integer
$a = 5.90;
$b = "kilometers 25";
$c = true;
$d = NULL;

$a = (int)$a;
$b = (int)$b;
$c = (int)$c;
$d = (int)$d;

echo "<pre/>======== Cast to Integer ======== <pre/>";
var_dump($a, $b, $c, $d);

// Cast to Float
$a = 5;
$b = "kilometers 25";
$c = true;
$d = NULL;

$a = (float)$a;
$b = (float)$b;
$c = (float)$c;
$d = (float)$d;

echo "<pre/>======== Cast to Float ======== <pre/>";
var_dump($a, $b, $c, $d);

// Cast to Boolean
$a = 5;
$b = "kilometers 25";
$c = 5.90;
$d = NULL;

$a = (bool)$a;
$b = (bool)$b;
$c = (bool)$c;
$d = (bool)$d;

echo "<pre/>======== Cast to Boolean ======== <pre/>";
var_dump($a, $b, $c, $d);


// Cast to Array
$a = 5;
$b = "kilometers 25";
$c = 5.90;
$d = NULL;

$a = (array)$a;
$b = (array)$b;
$c = (array)$c;
$d = (array)$d;

echo "<pre/>======== Cast to Array ======== <pre/>";
var_dump($a, $b, $c, $d);

// Cast to Object
$a = 5;
$b = "kilometers 25";
$c = 5.90;
$d = NULL;

$a = (object)$a;
$b = (object)$b;
$c = (object)$c;
$d = (object)$d;

echo "<pre/>======== Cast to Object ======== <pre/>";
var_dump($a, $b, $c, $d);

// Cast to NULL
$a = 5;
$b = "kilometers 25";
$c = 5.90;
$d = NULL;

// $a = (unset)$a; // (Deprecated since version 7.2)
$a = NULL;
$b = null;
$c = null;
$d = null;

echo "<pre/>======== Cast to NULL ======== <pre/>";
var_dump($a, $b, $c, $d);

// Converting Arrays into Objects:
$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter" => "35", "Ben" => "37", "Joe" => "43"); // associative array

$a = (object)$a;
$b = (object)$b;
echo "<pre/>======== Converting Arrays into Objects ======== <pre/>";
var_dump($a, $b);
