<?php

function mul($a, $b) {
    $result = $a * $b;
    echo "$a × $b = $result <br>";
}

// Calling the function 5 times with different values using for loop
for ($i = 1; $i <= 5; $i++) {
    mul($i, $i + 1);  // Example: 1×2, 2×3, 3×4, etc.
}

?>
