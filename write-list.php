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

				<h1>Add Your ToDo List here:</h1>

				 <form action="add-list.php" method="post">
						
					<label for="list">Write here:</label>
					<input type="text" id="list" name="list" placeholder="To Do List">

					
					<br><br>
					<input type="submit" value="Post">

				</form> 


			</div>

		
 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html>
