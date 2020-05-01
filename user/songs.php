<?php include ("../inc/header.php"); ?> 		 	

<?php include ("../inc/left-menu.php"); ?> 		 	 		 		
			
 		 	<div class="content">
				<h1>Your Songs are here:</h1>				
				<center><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></center>

				<form  action="upload-songs.php" method="post" enctype="multipart/form-data">
				    Select Song Files to Upload:
				    <input type="file" name="files[]" multiple >
				    <input type="submit" name="submit" value="UPLOAD">
				</form>

				<div class="usrlist">
					<ol>
					<?php 						
						include "../config.php";						
						$user_id = $_SESSION['id'];
						
						$presult = mysqli_query($conn, "SELECT * FROM user_songs WHERE user_id = $user_id  ");
						
						while($res = mysqli_fetch_array($presult)) { ?>
						<li>
							<div class="list">
								<br>
								<a href="<?php echo $user_id; ?>/<?php echo $res['song_title']; ?>"><?php echo $res['song_title']; ?></a>
								<div class="editlist">
									<a href="deletesong.php?id=<?php echo $res['ID']; ?>">
										<i class="fa fa-pencil fa-lg">X</i>
									</a>
								</div>
							</div> 
						</li>
					<?php } ?>
					</ol>
				</div>
				<div class="bottom">
					<a href="#"><button>Top Back</button></a>
				</div>				
			</div>

<?php include ("../inc/footer.php"); ?>