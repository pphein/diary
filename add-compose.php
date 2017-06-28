<?php 

	
	//including the database connection file
	include_once("config.php");

	$post = $_POST['post'];
	if($post){
		$add_post = mysqli_query($mysqli, "INSERT INTO user_posts(post_date, post_content , post_modified) VALUES (now(), '$post', now())");
	}
	header("location: post.php");
?>