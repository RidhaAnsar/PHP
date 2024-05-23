<?php
function replaceSubstring($string, $search, $replace) {
    return str_replace($search, $replace, $string);
}

// Example usage
$input = "hello world!";
$search = "world";
$replace = "PHP";
$output = replaceSubstring($input, $search, $replace);
echo "Original: $input\n";
echo "After Replacement: $output\n";
?>
