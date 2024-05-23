<?php
function repeatString($string, $times) {
    return str_repeat($string, $times);
}

// Example usage
$input = "hello ";
$times = 3;
$output = repeatString($input, $times);
echo "Original: $input\n";
echo "Repeated: $output\n";
?>
