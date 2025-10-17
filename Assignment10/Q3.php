<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['remember'])) {
        setcookie('username', $_POST['username'], time()+3600*24);
    }
}
?>
<form method="post">
  Username: <input type="text" name="username" value="<?php echo $_COOKIE['username'] ?? ''; ?>"><br>
  <input type="checkbox" name="remember"> Remember Me<br>
  <input type="submit" value="Login">
</form>

<?php
echo "<h3>Welcome ".($_COOKIE['username'] ?? 'Guest')."</h3>";
?>

