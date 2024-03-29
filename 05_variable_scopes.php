<?php

/*
 * PHP has three different variable scopes:
 * local, global & static
 * */

/*
 * Local Scope
 *  A variable declared within a function has a LOCAL SCOPE.
 *  and can only be accessed within that function.
 * */

function showFullName(): string
{
    $first_name = 'Hridoy';
    $last_name  = 'Ahmed';

    return $first_name . ' ' . $last_name;
}

$full_name = showFullName();

echo '<pre>';
print_r($full_name);

echo '<pre>';
// print_r($first_name);
// If you comment out the above line will give you a warning.
// Because You Cannot access first_name outside the function as it is a local variable.


/*
 * Global Scope
 *  The global keyword is used to access a global variable from within a function.
 *  If you update the global variables inside a function it will overwrite the original variable's value.
 *  PHP also stores all global variables in an array called $GLOBALS[index].
 *  The index holds the name of the variable.
 *  This array is also accessible from within functions.
 *  Can be used to update global variables directly.
 * */

$a = 10;
$b = 20;
$c = 30;

function testGlobal(): void
{
    global $a, $b, $c;

    echo '<p>' . 'Without Updating Global Variable Sum = ' . $a + $b + $c . '</p>';

    $a = 100; // Update the global variable
    $b = 200;
    $c = 300;

    echo '<p>' . 'After Updating the values of the global varibles Sum = ' . $a + $b + $c . '</p>';
}

testGlobal();

// Using GLOBALS
$x = 5;
$y = 10;

function testGlobal2(): void
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

testGlobal2();
echo '<pre>';
echo $y; // outputs 15

/*
 * Static Scope
 *  Normally, when a function is completed/executed, all of its variables are deleted.
 *  If you update the static variables inside a function it will overwrite the original variable's value.
 *  If you want a local variable NOT to be deleted, you can use the static keyword.
 *  Note: The variable is still local to the function.
 */

function testStatic(): void
{
    static $x = 0; // Remember the value for the next usage.
    echo $x;
    $x++;
}

echo '<pre>';
testStatic();

echo '<pre>';
testStatic();

echo '<pre>';
testStatic();
