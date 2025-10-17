<form method="post">
  Enter CAPTCHA: <input type="text" name="code">
  <img src="Q4_captcha.php"><br>
  <input type="submit" value="Verify">
</form>

<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['code']==$_SESSION['captcha']){
        echo "CAPTCHA verified successfully!";
    } else {
        echo "Invalid CAPTCHA!";
    }
}
?>

