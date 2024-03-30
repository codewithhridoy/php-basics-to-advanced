<?php

/*
 * Double quoted strings perform action on special characters (Variables).
 * Single quoted strings does not perform such actions, it returns the string like it was written.
 * All String Functions: https://www.w3schools.com/php/php_ref_string.asp
 * */

// Difference between double quotes & single quotes.
$s = "dollars";
echo 'This costs a lot of $s.'; // This costs a lot of $s.
echo '<pre>';
echo "This costs a lot of $s."; // This costs a lot of dollars.

// String Length
echo '<pre>';
echo strlen("Hello world!");

// Word Count
echo '<pre>';
echo str_word_count("Hello world !@#$%^&*()"); // Cannot count special characters.

/*
 * Search For Text Within a String
 * The PHP strpos() function searches for a specific text within a string.
 * If a match is found, the function returns the character position of the first match.
 * If no match is found, it will return FALSE.
 * The first character position in a string is 0 (not 1).
 * */

$subject = "Hello world!";

echo '<pre>';
echo strpos($subject, "world");

// Upper Case
echo '<pre>';
echo strtoupper($subject);

// Lower Case
echo '<pre>';
echo strtolower($subject);

// Capitalize
echo '<pre>';
echo ucfirst($subject);

// Reverse
echo '<pre>';
echo strrev($subject);

// Replace
echo '<pre>';
echo str_replace("world", "PHP", $subject);

// Remove whitespace

$subject = "     Hello         world!  ";

echo '<pre>';
echo trim($subject);
echo '<pre>';
echo rtrim($subject);
echo '<pre>';
echo ltrim($subject);
echo '<pre>';
echo trim(str_replace(' ', '', $subject));

/*
 * Remove whitespaces using regular expressions perfectly.
 * ^\s+      # Match whitespace at the start of the string
 * |         # or
 * \s+$      # Match whitespace at the end of the string
 * |         # or
 * \s+(?=\s) # Match whitespace if followed by another whitespace character
 * */
echo '<pre>';
echo preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', '   Hello      world!  ');

$cleanStr = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $subject)));
echo '<pre>';
echo $cleanStr;

$subject = "Hello world!";

// Convert string into array
echo '<pre>';
print_r(explode(" ", $subject));

// Concatenation
echo '<pre>';
echo 'Hello ' . 'World!';

// Slicing
echo '<pre>';
echo substr($subject, 2, 5);

// Slice to the End
echo '<pre>';
echo substr($subject, 2);

// Slice from the end
echo '<pre>';
echo substr('4242 4242 4242 4242', -4);

// Negative length
echo '<pre>';
echo substr('4242 4242 4242 4242', 2, -2);

/*
 * Escape characters
 * \'	Single Quote
 * \"	Double Quote
 * \$	PHP variables
 * \n	New Line
 * \r	Carriage Return
 * \t	Tab
 * \f	Form Feed
 * \ooo	Octal value
 * \xhh	Hex value
 * */

echo '<pre>';
echo "\"Love\" the life you live, live the life you \"love\".";
