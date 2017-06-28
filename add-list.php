<?php 

	
	//including the database connection file
	include_once("config.php");

	$list = $_POST['list'];
	if($list){
		$add_list = mysqli_query($mysqli, "INSERT INTO user_lists(list_date, list_content , list_modified) VALUES (now(), '$list', now())");
	}
	header("location: todolist.php");
?>