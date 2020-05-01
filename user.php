<?php 
//including the database connection file
	include ("config.php");
	
	$name = $_POST['name'];	
	$email = $_POST['email'];	
	$password = md5($_POST['password']);

	if($_POST['agreement']){
		$agreement = 1;
	}else{
		$agreement = 0;
	}
	
	$check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
	$result = mysqli_fetch_assoc($check);

	if(isset($result)){
		session_start();
		$_SESSION['msg'] = "Your Email has been registered! Try with Another Email!";
		header("location: signup.php");
	}else{
		$sql = mysqli_query($conn, "INSERT INTO user ( name , email , password, user_registered, agreement ) VALUES ('$name', '$email', '$password',now(), '$agreement')");		
	}

	if($sql){
		$check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
		$result = mysqli_fetch_assoc($check);

		$user_id = $result['ID'];

		session_start();
		$_SESSION['auth'] = true;
		$_SESSION['id']	= 	$user_id;
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		header("location: user/diary.php");
	}
 ?>