<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAPYEAR</title>
</head>
<body>
<?php
function isleapyear($year) {
	 return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

$year_to_check=2024;

if(isleapyear($year_to_check))  {
	echo $year_to_check. "is a leap year";
else
	echo $year_to_check. "is not a leap year";
}
?>
</body>
</html>
	
