<?php
function trimWhitespace($string) {
    return trim($string);
}

// Example usage
$input = "  hello world!  ";
$output = trimWhitespace($input);
echo "Original: '$input'\n";
echo "Trimmed: '$output'\n";
?>
