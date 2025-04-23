<?php

$mark1 = 28;
$mark2 = 67;
$mark3 = 95;

function evaluateMark($mark) {
    if ($mark > 90) {
        return "Good";
    } elseif ($mark > 35 && $mark < 70) {
        return "Average";
    } elseif ($mark < 35) {
        return "Fail";
    } else {
        return "No category matched";
    }
}

echo "Mark 1 ($mark1): " . evaluateMark($mark1) . " <br>";
echo "Mark 2 ($mark2): " . evaluateMark($mark2) . " <br>";
echo "Mark 3 ($mark3): " . evaluateMark($mark3) . " <br>";
?>