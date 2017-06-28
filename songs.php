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
				<h1>Choose Song</h1>
				<form action="songs.php" method="post">

					<label for="song">song</label>
					<input type="file" name="song" id="song">
					<br><br>

					<input type="submit" value="Add song">
					
					<a href="songs.php" class="back">Back</a>

				</form>

			</div>


		
 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html>
