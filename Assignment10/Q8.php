<?php
$src = imagecreatefromjpeg("image.jpg");
$new = imagescale($src, 200, 150);
header("Content-type:image/jpg");
imagejpeg($new);
?>

