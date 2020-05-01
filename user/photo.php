<?php include ("../inc/header.php"); ?> 		 	

<?php include ("../inc/left-menu.php"); ?> 		 	 		 		
			
 		 	<div class="content">
				<h1>Your Photos are here:</h1>				
				<center><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></center>

				<form  action="upload-photo.php" method="post" enctype="multipart/form-data">
				    Select Image Files to Upload:
				    <input type="file" name="files[]" multiple >
				    <input type="submit" name="submit" value="UPLOAD">
				</form>
				
				<div class="photo">
					<ul>
						<?php 						
						include "../config.php";						
						$user_id = $_SESSION['id'];
						
						$photoresult = mysqli_query($conn, "SELECT * FROM images WHERE user_id = $user_id  ");						
						while($res = mysqli_fetch_array($photoresult)) { ?>
						<li>
							<div class="pic">
								
								<img src="<?php if($auth){
									echo $user_id."/".$res['file_name'];
								}else{echo "hello";} ?>">	

								<form class="edit" action="deletephoto.php" method="post">
									<input type="hidden" name="id" value="<?php echo $res['id']; ?>">
									<input type="hidden" name="fielname" value="filename">
									<input type="submit" value="X">
								</form>											
							</div> 
						</li>
						<?php	} ?>						
					</ul>
				</div>
				<div class="bottom">
					<a href="#"><button>Top Back</button></a>
				</div>
			</div>

<?php include ("../inc/footer.php"); ?>