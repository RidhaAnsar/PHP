<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static</title>
</head>
<body>
<?php
class MyClass
{
    public static $myStaticProperty = "Hello World!";
}

echo MyClass::$myStaticProperty;
?>
</body> </html
