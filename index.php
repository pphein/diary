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
				<center>						
						<a href="index.php">Diary</a>
				</center>			
			</ul>
		</div>

 		<div class=main-body> 		 	
 		 	<div class="content">
				<h1>Welcome To Diary</h1>	
				<center>
					<h3>First at all, Please  Sign up or log in!</h3>
				</center>	
					
				<ul class="login">
					<li>
						<a href="<?php echo "../signup.php"; ?>">Sign Up</a>
					</li>
					<li>
						<a href="../login-form.php">Log in </a>
					</li>
				</ul> 
			</div>		 		
 		 </div> 		 

		<div class="footer">
			<center>
				<h3>Copyright <?php echo date('Y'); ?></h3>		
			</center>
		</div>

 	</body>
</html> 