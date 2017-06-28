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
				<h1>Choose Book</h1>

				

				<form action="books.php" method="post">

					<label for="book">book</label>
					<input type="file" name="book" id="book">
					<br><br>

					<input type="submit" value="Add book">
					
					<a href="books.php" class="back">Back</a>

				</form>

			</div>

			

		
 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html>
