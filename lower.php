<?php
function convertToLowerCase($string) {
    return strtolower($string);
}

// Example usage
$input = "HELLO WORLD!";
$output = convertToLowerCase($input);
echo "Original: $input\n";
echo "Lower Case: $output\n";
?>
