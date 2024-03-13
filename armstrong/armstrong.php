<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    // Check if the number is Armstrong
    if ($number == $sum) {
        return true;
    } else {
        return false;
    }
}

$number = 153; 

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>
