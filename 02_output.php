<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
echo 'Hello';
echo '<br/>';

echo 123;
echo '<br/>';

echo '<h1>Hello</h1>';

// print - Similar to echo, but a bit slower
print 'Hello';
echo '<br/>';

// print_r - Gives a bit more info. Can be used to print arrays
print_r('Hello');
echo '<br/>';

print_r([1, 2, 3]);
echo '<br/>';

// var_dump - Even more info like data type and length
var_dump('Hello');
echo '<br/>';

var_dump([1, 2, 3]);
echo '<br/>';

// Escaping characters with a backslash
echo 'You can\'t do that.';

$name = 'Ahmed';

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <!-- You can output PHP including variables, etc -->
  <h1>Hello <?php echo $name; ?></h1>
  <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Hello <?= $name ?></h1>
</body>
</html>
