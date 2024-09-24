<?php
// Static positive integer value
$number = 29; // Replace this value with any positive integer you want to check

// Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }
    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}

// Check if the number is prime
if (isPrime($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is not a prime number.";
}
?>
