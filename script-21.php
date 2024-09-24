<?php
// Static number value
$number = 12321; // Replace this value with any number you want to check

// Convert the number to a string
$numberStr = (string)$number;

// Reverse the string
$reversedStr = strrev($numberStr);

// Check if the original string is the same as the reversed string
if ($numberStr === $reversedStr) {
    echo $number . " is a palindrome.";
} else {
    echo $number . " is not a palindrome.";
}
?>
