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
 		 		
				<h1>Choose Photo</h1>
					<?php
						$list = scandir("photos");

						for($i=2; $i < count($list); $i++) {
						$name = $list[$i];
						echo "<img src='photos/$name' width='120'>";
						}
					?>
					
					
					<form action="upload-photo.php" method="post" enctype="multipart/form-data">
					<label for="photo">Choose a Photo</label>
					<input type="file" name="photo" id="photo">
					<input type="submit" value="Upload" />
					</form>
			</div>
			
			

 		 </div>
 		 

		<?php include ("footer.php"); ?>
 	
 	</body>
 </html>