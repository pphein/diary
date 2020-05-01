<?php
	session_start();
	$auth = isset($_SESSION['auth']);
	if($auth == false){
 	header("location: ../index.php");
 	} 
 ?>
<?php 

	include ("../config.php");
	$list = $_POST['list'];
	$user_id = $_SESSION['id'];

	if($list){
		$add_list = mysqli_query($conn, "INSERT INTO user_lists	 ( user_id, list_content , list_date , list_modified) VALUES ('$user_id', '$list' , now(), now())");

		session_start();
		$_SESSION['msg'] = "Successfully Added.";
		header("location: todolist.php");
	}else{
		session_start();
		$_SESSION['msg'] = "OOps sorry Something was wrong.";
	header("location: todolist.php");
	}
?>