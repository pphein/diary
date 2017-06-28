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


				<h1>Welcome User, Sign Up here:</h1>

				<form action="user-info.php" method="post">
					
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="John">

					<label for="email">Email</label>
					<input type="text" id="email" name="email" placeholder="example@email.com">

					<label for="password">Password</label>
					<input type="password" id="password" name="password">


					<label for="comfirmPassword">Comfirm Password</label>
					<input type="password" id="comfirmPassword" name="comfirmPassword">

					<br><br>
					<input type="submit" value="Sign Up">

				</form>


			</div>

		
 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html>