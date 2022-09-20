<?php

session_start();
include "config.php";

$email = $_POST['email'];
$password = md5($_POST['password']);
$check = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'AND password = '$password'");
$result = mysqli_fetch_assoc($check);

if ($result) {
	$_SESSION['auth'] = true;
	$_SESSION['id'] = $result['ID'];
	$_SESSION['name'] = $result['name'];
	$_SESSION['email'] = $result['email'];

	echo $_SESSION['id'] . $_SESSION['name'] . $_SESSION['email'];
	header("location: user/diary.php");
} else {
	$_SESSION['error'] = "Invalid Email and password";
	header("location: login-form.php");
}
