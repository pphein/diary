<?php
	session_start();
	$auth = isset($_SESSION['auth']);

	include_once ("config.php"); 

	if($auth == false){
 	header("location: ../index.php");
 	} 
 ?>
 
<!DOCTYPE html>
<meta utf="8" lang="myan">
<html>
 	<head> 		
  		<link rel="stylesheet" type="text/css" href="../widgEditor/css/widgContent.css">
 		<link rel="stylesheet" type="text/css" href="../widgEditor/css/widgEditor.css">
 		<script src="../widgEditor/scripts/widgEditor.js"></script> 		
 		<title><?php if($auth){ echo $_SESSION['name'];} ?>'s Diary</title>
 		<link rel="stylesheet" type="text/css" href="../css/style.css">
 	</head>

 	<body>
		<div class="header">
			<ul class="menu">
				<li><a href="../user/diary.php">Diary</a></li>
				<li><a href="../user/post.php">Post</a></li>
				<li><a href="../user/photo.php">Photos</a></li>
				<li><a href="../logout.php">Log out</a></li>
				<li>
					<?php if($auth) { ?>
						<a href=""><?php echo $_SESSION['name'] ?></a>					
					<?php } ?>
				</li>					
			</ul>
		</div>

		<div class="main-body">