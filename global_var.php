<?php

// Global variable
$number = 90;

function add() {
    global $number;
    $number += 10;
    echo "After add(): " . $number . "<br>";
}

function sub() {
    global $number;
    $number -= 50;
    echo "After sub(): " . $number . "<br>";
}

// Function calls
add(); // should print 100
sub(); // should print 50

?>
