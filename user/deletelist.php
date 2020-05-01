<?php
	session_start();
	$auth = isset($_SESSION['auth']);
	if($auth == false){
 	header("location: ../index.php");
 	} 
?>
<?php

	include("../config.php");
	$id = $_GET['id'];
	$user_id = $_SESSION['id'];

	if($id){
	$result = mysqli_query($conn, "DELETE FROM user_lists WHERE ID =$id AND user_id = $user_id");
	}
	header("Location:todolist.php");
?>
