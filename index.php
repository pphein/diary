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

 		<div class="header">
			<ul class="menu">

				<li>
					<a href="#">Diary</a>
				</li>
				<li>
					<a href="#">Post</a>
				</li>
				<li>
					<a href="#">Photos</a>
				</li>
				<li>
					<a href="login-form.php">Login</a>
				</li>
				<li>
					<a href="signup.php">Sign Up</a>
				</li>
			</ul>	

		</div>

 		 <div class=main-body>
 		 	
 		 	<div class="left-menu">

				<ul class="list">

					<li>
						<a href="#">Compose</a>
					</li>
					<li>
						<a href="#">To Do Lists</a>
					</li>
					<li>
						<a href="#">Song</a>
					</li>
					<li>
						<a href="#">Books</a>
					</li>

				</ul>	

			 </div>
 		 		
			<?php include ("content.php"); ?>
	
 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html> 

 