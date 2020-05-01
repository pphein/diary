<?php
	session_start();
	$auth = isset($_SESSION['auth']);
	if($auth == false){
 	header("location: ../index.php");
 	} 
 ?>

<?php
	include("../config.php");

	$id = $_POST['id'];
	$user_id = $_SESSION['id'];

	if($id){
	$result = mysqli_query($conn, "DELETE FROM posts WHERE ID =$id AND user_id = $user_id");
	}

	if($result){
		$_SESSION['msg'] = "success";
		header("location: post.php");
	}
	else{
		$_SESSION['msg'] = "Sorry";
		header("Location: post.php");
	}
?>