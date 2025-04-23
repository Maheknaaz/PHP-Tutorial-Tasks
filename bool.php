<?php

echo "Comparison and Datatype Check:<br>";

// 1st case
$a = 'raj';
$b = "raj";

echo "\nCase 1:";
echo "\$a == \$b: ";
var_dump($a == $b); // value comparison
echo "\$a === \$b: ";
var_dump($a === $b); // value + type
echo "\$a != \$b: ";
var_dump($a != $b);
echo "\$a !== \$b: ";
var_dump($a !== $b);

echo "Datatype of \$a: " . gettype($a) . "\n";
echo "Datatype of \$b: " . gettype($b) . "\n";

// 2nd case
$a = 90;
$b = 34;

echo "\nCase 2:\n";
echo "\$a > \$b: ";
var_dump($a > $b);
echo "\$a < \$b: ";
var_dump($a < $b);
echo "\$a >= \$b: ";
var_dump($a >= $b);
echo "\$a <= \$b: ";
var_dump($a <= $b);
echo "\$a == \$b: ";
var_dump($a == $b);
echo "\$a != \$b: ";
var_dump($a != $b);

echo "Datatype of \$a: " . gettype($a) . "\n";
echo "Datatype of \$b: " . gettype($b) . "\n";

?>
