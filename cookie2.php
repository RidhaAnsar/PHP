<?php
// Function to set or update the cookie with current date/time
function setLastVisitedCookie() {
    $last_visited = date("Y-m-d H:i:s");
    setcookie("last_visited", $last_visited, time() + (86400 * 30), "/"); // Cookie expires in 30 days
}

// Check if the cookie is set
if(isset($_COOKIE["last_visited"])) {
    $last_visited = $_COOKIE["last_visited"];
    echo "Last visited on: " . $last_visited;
} else {
    echo "Welcome! It seems like this is your first visit.";
    setLastVisitedCookie();
}
?>
