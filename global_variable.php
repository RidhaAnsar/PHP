<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global variable</title>
</head>
<body>
<?php
$globalVar = 10;

function abc()
{
    global $globalVar;
    echo $globalVar;
}

abc();
?>
</body></html>
