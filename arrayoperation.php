<?php
$names = array("Alice", "Bob", "Charlie", "David", "Emma", "Frank", "Grace", "Henry", "Ivy", "Jack");
echo "Contents of the array using foreach loop:\n";
foreach ($names as $name) {
    echo $name . "\n";
}
sort($names);
echo "\nArray in sorted order:\n";
print_r($names);
$uniqueNames = array_unique($names);
echo "\nArray without duplicate elements:\n";
print_r($uniqueNames);
$lastElement = array_pop($names);
echo "\nRemoved last element: $lastElement\n";
echo "Array after removing last element:\n";
print_r($names);
echo "\nArray in reverse order:\n";
print_r(array_reverse($names));
$searchName = "David";
$searchIndex = array_search($searchName, $names);
if ($searchIndex !== false) {
    echo "\n$searchName found at index $searchIndex\n";
} else {
    echo "\n$searchName not found in the array\n";
}
?>
