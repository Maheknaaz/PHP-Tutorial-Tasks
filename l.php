<?php

// Step 1: Multidimensional associative array
$students = [
    ["name" => "Mahek", "marks" => 85],
    ["name" => "Ayesha", "marks" => 92],
    ["name" => "Zara", "marks" => 73]
];

// Step 2: Display using foreach
echo "Using foreach loop:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Marks: " . $student["marks"] . "<br>";
}

// Step 3: Display using for loop
echo "<br>Using for loop:<br>";
for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i]["name"] . ", Marks: " . $students[$i]["marks"] . "<br>";
}

// Step 4: Display using while loop
echo "<br>Using while loop:<br>";
$i = 0;
while ($i < count($students)) {
    echo "Name: " . $students[$i]["name"] . ", Marks: " . $students[$i]["marks"] . "<br>";
    $i++;
}

// Step 5: Display using do...while loop
echo "<br>Using do...while loop:<br>";
$i = 0;
do {
    echo "Name: " . $students[$i]["name"] . ", Marks: " . $students[$i]["marks"] . "<br>";
    $i++;
} while ($i < count($students));

?>
