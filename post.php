<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM user_posts ORDER BY ID DESC"); // using mysqli_query instead
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
 		 		
			<div class="content">

				<h1>Your Posts are here:</h1>
				<p>
					<?php 
						//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
						
						while($res = mysqli_fetch_array($result)) { 		
							
							echo $res['post_content'] . "<br>";
							
							echo "Post_Date: " . $res['post_date'];
							echo "Modefied: " . $res['post_modified']."<br><br>";	
						}
						
					?>

				</p>
				

			</div>	

		
 		 </div>

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html>