<?php
if(isset($_COOKIE['visits'])) {
    $count = $_COOKIE['visits'] + 1;
} else {
    $count = 1;
}
setcookie('visits', $count, time() + 3600); // valid for 1 hour
echo "<h3>Welcome! You have visited this page $count times.</h3>";
?>

