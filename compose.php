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
 		 		
			<div class="content">

				<h1>To Write Diary Note</h1>

				 <form action="add-compose.php" method="post">
						
					<label for="post">Write here:</label>
					
					<textarea name="post" id="post"></textarea>

					
					<br><br>
					<input type="submit" value="Post">

				</form> 


			</div>

			
		
 		 </div>

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html>