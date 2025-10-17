<form method="post" enctype="multipart/form-data">
  Select image: <input type="file" name="file"><br>
  <input type="submit" value="Upload">
</form>

<?php
if(isset($_FILES['file'])) {
    if(!is_dir("uploads")) mkdir("uploads");
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
    echo "<h3>Uploaded Image:</h3><img src='Q5_image.jpeg".$_FILES['file']['name']."' width='200'>";
}
?>

