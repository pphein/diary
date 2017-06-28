<?php
$name = $_FILES["photo"]["name"];
$tmp = $_FILES["photo"]["tmp_name"];
$type = $_FILES["photo"]["type"];
if($type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
move_uploaded_file($tmp, "photos/$name");
}
header("location: photo.php");
?>