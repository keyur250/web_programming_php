<!DOCTYPE html>
<html>
<head>
    <title>Find the Largest Number</title>
</head>
<body>

<h2>Enter Three Numbers</h2>
<form method="post">
    Number 1: <input type="text" name="number1" required><br><br>
    Number 2: <input type="text" name="number2" required><br><br>
    Number 3: <input type="text" name="number3" required><br><br>
    <input type="submit" value="Find Largest">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num3 = $_POST['number3'];

    
    if ($num1 >= $num2 && $num1 >= $num3) {
        $largest = $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        $largest = $num2;
    } else {
        $largest = $num3;
    }

    
    echo "<h3>The largest number is: " . $largest . "</h3>";
}
?>

</body>
</html>
