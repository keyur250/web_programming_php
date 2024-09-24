<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels</title>
</head>
<body>

<h2>Enter a Sentence</h2>
<form method="post">
    Sentence: <input type="text" name="sentence" required><br><br>
    <input type="submit" value="Count Vowels">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $sentence = $_POST['sentence'];

    // Convert the sentence to lowercase to handle case-insensitive vowel counting
    $sentence = strtolower($sentence);

    // Define vowels
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Initialize vowel count
    $vowelCount = 0;

    // Loop through each character in the sentence
    for ($i = 0; $i < strlen($sentence); $i++) {
        if (in_array($sentence[$i], $vowels)) {
            $vowelCount++; // Increment vowel count if a vowel is found
        }
    }

    // Display the result
    echo "<h3>The number of vowels in the sentence is: " . $vowelCount . "</h3>";
}
?>

</body>
</html>
