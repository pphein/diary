<?php 

include "confs/config.php";

$id = $_POST['id'];
$post = $_POST['post'];



if($post) {
	
	
	$sql = "UPDATE user_posts SET post_content='$post', post_modified= now(),
			 WHERE id=$id";
}
mysqli_query($mysqli, $sql);

header("location: post.php");

 ?>
 
