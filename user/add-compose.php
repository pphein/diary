<?php
	session_start();
	$auth = isset($_SESSION['auth']);
	if($auth == false){
 	header("location: ../index.php");
 	} 
 ?>
<?php 
	include ("../config.php");
	$post = $_POST['post'];
	$user_id = $_SESSION['id'];

	if($post){
		$add_post = mysqli_query($conn, "INSERT INTO posts ( user_id, post_content , post_date , post_modified) VALUES ('$user_id', '$post' , now(), now())");		
	}
	header("location: post.php");
?>