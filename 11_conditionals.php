<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
    echo '<pre>';
    echo 'You are old enough to vote!';
} else {
    echo '<pre>';
    echo 'Sorry, you are too young to vote.';
}

/*
 * Dates
 * $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
 * $today = date("m.d.y");                         // 03.10.01
 * $today = date("j, n, Y");                       // 10, 3, 2001
 * $today = date("Ymd");                           // 20010310
 * $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
 * $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
 * $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
 * $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
 * $today = date("H:i:s");                         // 17:16:18
 * $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
 * */


// $today = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm

$t = date('H');

if ($t < 12) {
    echo "<pre>";
    echo 'Have a good morning!';
} elseif ($t < 17) {
    echo "<pre>";
    echo 'Have a good afternoon!';
} else {
    echo "<pre>";
    echo 'Have a good evening!';
}

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = [];

if (!empty($posts[0])) {
    echo '<pre>';
    echo $posts[0];
} else {
    echo '<pre>';
    echo 'There are no posts';
}

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo '<pre>';
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';

// Assign a variable based on a condition
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';

$firstPost = !empty($posts[0]) ? $posts[0] : null;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

echo "<pre>";
var_dump($firstPost);

/* -------- Switch Statements ------- */

$fav_color = 'blue';

echo '<pre>';
switch ($fav_color) {
    case 'red':
        echo 'Your favorite color is red!';
        break;
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    default:
        echo 'Your favorite color is not red, blue, nor green!';
}

/* ========= Match =========== */
echo '<pre>';
echo match ($fav_color) {
    'red' => 'Your favorite color is red!',
    'blue' => 'Your favorite color is blue!',
    'green' => 'Your favorite color is green!',
    default => 'Your favorite color is not red, blue, nor green!',
};
