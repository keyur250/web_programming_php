<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number</title>
</head>
<body>

<h2>Guess the Number</h2>
<form method="post">
    Enter your guess (1 to 10): <input type="number" name="guess" min="1" max="10" required><br><br>
    <input type="submit" value="Submit Guess">
</form>

<?php
session_start(); // Start session to store the random number

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's guess from the form
    $guess = intval($_POST['guess']);
    
    // Generate a random number between 1 and 10 (if not already generated)
    if (!isset($_SESSION['random_number'])) {
        $_SESSION['random_number'] = rand(1, 10);
    }
    $randomNumber = $_SESSION['random_number'];

    // Check if the guess is correct
    if ($guess == $randomNumber) {
        echo "<h3>Congratulations! You guessed the correct number: " . $randomNumber . ".</h3>";
        // Reset the random number for the next guess
        unset($_SESSION['random_number']);
    } else {
        echo "<h3>Sorry, the correct number was " . $randomNumber . ". Please try again!</h3>";
    }
}
?>

</body>
</html>
