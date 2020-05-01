<?php
	session_start();
	$auth = isset($_SESSION['auth']);
	if($auth == false){
 	header("location: ../index.php");
 	} 
 ?>
<?php
	include ("../config.php");

	$id = $_POST['id'];
	$post = $_POST['post'];

	if($post){	
		$sql = mysqli_query($conn,"UPDATE posts SET post_content = '$post' , post_modified = now()
				 WHERE ID = '$id'");	
		session_start();
		$_SESSION['msg'] = "Successfully UPDATED";
		header("location: post.php");
	}
	else{
		session_start();
		$_SESSION['msg'] = "OOPs Sorry Something is worng";
		header("location: post.php");
	}
?>