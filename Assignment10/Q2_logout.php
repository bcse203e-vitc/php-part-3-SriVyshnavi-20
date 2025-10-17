<?php
session_start();
session_unset();
session_destroy();
header("Location: Q2_login.php");
exit;
?>

