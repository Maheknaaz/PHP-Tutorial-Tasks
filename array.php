<?php
// Indexed array
$indexed = array(225, "Dreams", "Glass", 30, 25, 1, "Globe");

// Associative array
$associative = array(
    "0" => "Couch",
    "Ice" => "India",
    "6" => "Box",
    "Trip" => "Range"
);

// Print indexed array
echo "<h3>Indexed Array:</h3>";
print_r($indexed);
echo "<br><br>";

// Print associative array
echo "<h3>Associative Array:</h3>";
print_r($associative);
echo "<br><br>";

// Combine arrays
$combined = array_merge($indexed, $associative);
echo "<h3>Combined Array:</h3>";
print_r($combined);
echo "<br><br>";

// 3rd value from indexed array (index 2)
echo "<h3>3rd value from Indexed Array:</h3>";
echo $indexed[2]; // "Glass"
echo "<br><br>";

// Value for key 'Ice' from associative array
echo "<h3>Value for key 'Ice' from Associative Array:</h3>";
echo $associative['Ice']; // "India"
?>
