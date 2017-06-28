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
 		 		
			<div class="content">

				<?php if($auth) { ?>
					<h1>Welcome to My Website</h1>
					
					<p>You see this because you are an authenticated user. Congratulation!</p>
					<b><?php echo $_SESSION['id'] ?></b>
					<a href="logout.php">Logout</a>
					<?php } else { ?>
					
					<h1>You need to login</h1>
					<form action="login.php" method="post">
					<label for="id">User ID</label>
					<input type="text" name="id" id="id">
					<label for="password">Password</label>
					<input type="password" name="password" id="password">
					<input type="submit" value="Login">
					</form>
				<?php } ?>

			</div>

	

		
 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html> 







