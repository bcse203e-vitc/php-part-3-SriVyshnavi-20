<form method="post">
  Name: <input type="text" name="name"><br>
  Message:<br>
  <textarea name="msg"></textarea><br>
  <input type="submit" value="Send">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $to="example@domain.com";
    $sub="Contact Form Message from ".$_POST['name'];
    $msg=$_POST['msg'];
    $headers="From: user@domain.com";
    mail($to,$sub,$msg,$headers);
    echo "Mail Sent!";
}
?>

