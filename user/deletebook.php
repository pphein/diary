<?php

session_start();
$auth = isset($_SESSION['auth']);

if ($auth == false) {
	header("location: ../index.php");
}

include("../config.php");

$id = $_GET['id'];
$folder = $_SESSION['id'];
$file = $_POST['filename'];

if ($id) {
	$result = mysqli_query($conn, "DELETE FROM books WHERE ID =$id AND user_id = $folder");
}

foreach (glob("$folder/$file") as $filename) {
	unlink($filename);
}

header("Location:books.php");
