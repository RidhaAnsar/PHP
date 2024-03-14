<?php
// Create an array and store 10 names in it
$names = array("Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Hannah", "Ivy", "Jack");

// 4.8.1. Display the contents using each statement.
echo "Contents of the array using each statement: <br>";
foreach ($names as $name) {
    echo $name . "<br>";
}

// 4.8.2. Display the array in sorted order.
sort($names);
echo "<br>Array in sorted order: <br>";
print_r($names);

// 4.8.3. Display the array without the duplicate elements.
$unique_names = array_unique($names);
echo "<br><br>Array without duplicate elements: <br>";
print_r($unique_names);

// 4.8.4. Remove the last element and display.
$last_element = array_pop($names);
echo "<br><br>Removed last element: " . $last_element . "<br>";
echo "Array after removing last element: <br>";
print_r($names);

// 4.8.5. Display the array in reverse order.
$reversed_names = array_reverse($names);
echo "<br><br>Array in reverse order: <br>";
print_r($reversed_names);

// 4.8.6. Search for an element in the given array.
$search_element = "Charlie";
if (in_array($search_element, $names)) {
    echo "<br><br>'$search_element' found in the array.";
} else {
    echo "<br><br>'$search_element' not found in the array.";
}
?>
