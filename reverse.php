<?php
function reverseString($string) {
    return strrev($string);
}

// Example usage
$input = "hello world!";
$output = reverseString($input);
echo "Original: $input\n";
echo "Reversed: $output\n";
?>
