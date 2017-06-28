<?php
session_start();
$auth = isset($_SESSION['auth']);
?>

<?php
include_once ("config.php"); 
 ?>
 
 <!DOCTYPE html>
 <meta utf="8" lang="myan">
 <html>
 	<head>
 		<title>MyDiary</title>
 		<link rel="stylesheet" type="text/css" href="css/style.css">
 	</head>
 	<body>

 		<?php include ("header.php"); ?>

 		 <div class=main-body>
 		 	
 		 	<div>

 		 		<?php include ("left-menu.php"); ?>

 		 	</div>
 		 		
			<?php include ("content.php"); ?> 
			

		

		
 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html> 