<?php
$radius = $_GET['radius'];
$area = pi() * $radius * $radius;
echo "The area of the circle with radius " . $radius . " is: " . $area;
?>
