<?php

// Initial array
$details = [
    ['john', 'new york', '25', 'male'],
    ['emma', 'london', '22', 'female'],
    ['liam', 'paris', '30', 'male']
];

// Add one more array
$details[] = ['ash', 'tokyo', '20', 'male'];

// Delete first array item
unset($details[0]);
// Re-index array to avoid index gap
$details = array_values($details);

// Display only cities
echo "Cities:\n";
foreach ($details as $item) {
    echo $item[1] . "\n";
}

// Display entire array from the last index
echo "\nLast Array Entry:\n";
print_r(end($details));

// Initial array
$product_details = [
    ['product_name' => 'laptop', 'price' => 50000, 'date' => '01-01-2024', 'address' => 'delhi'],
    ['product_name' => 'phone', 'price' => 30000, 'date' => '02-01-2024', 'address' => 'mumbai']
];

// Add one more array
$product_details[] = ['product_name' => 'tv', 'price' => 2000, 'date' => '06-01-2024', 'address' => 'hubli'];

// Delete first array item
unset($product_details[0]);
// Re-index array
$product_details = array_values($product_details);

// Display product_name of date = 06-01-2024
echo "\nProduct on 06-01-2024:\n";
foreach ($product_details as $item) {
    if ($item['date'] == '06-01-2024') {
        echo $item['product_name'] . "\n";
    }
}

// Display last array list
echo "\nLast Product Entry:\n";
print_r(end($product_details));

?>
