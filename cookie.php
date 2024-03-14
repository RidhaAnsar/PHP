<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE</title>
</head>

<body>
    <?php
    // Set a cookie
    $cookie_name = "user";
    $cookie_value = "John Doe";
    // Set cookie to expire in 7 days (86400 seconds * 7 days)
    $cookie_expiry = time() + (86400 * 7);
    setcookie($cookie_name, $cookie_value, $cookie_expiry, "/");

    // Check if the cookie is set
    if(isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }

    // Delete a cookie (by setting expiration date in the past)
    if(isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, "", time() - 3600, "/");
        echo "<br>Cookie '" . $cookie_name . "' is deleted.";
    }
    ?>
</body>
</html>
