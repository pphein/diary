<?php include ("../inc/header.php"); ?> 		 	

<?php include ("../inc/left-menu.php"); ?> 		 	 		 		
			
 		 	<div class="content">
				<h1>Your Books are here:</h1>				
				<center><?php echo $_SESSION['msg']; unset($_SESSION['msg']); ?></center>

				<form  action="upload-books.php" method="post" enctype="multipart/form-data">
				    Select Ebook Files to Upload:
				    <input type="file" name="files[]" multiple >
				    <input type="submit" name="submit" value="UPLOAD">
				</form>	

				<div class="usrlist">
					<ol>
					<?php 						
						include "../config.php";						
						$user_id = $_SESSION['id'];
						
						$presult = mysqli_query($conn, "SELECT * FROM books WHERE user_id = $user_id  ");
						
						while($res = mysqli_fetch_array($presult)) { ?>
						<li>
							<div class="list">
								<br>
								<a href="<?php echo $user_id; ?>/<?php echo $res['book_title']; ?>"><?php echo $res['book_title']; ?></a>
								<div class="editlist">
									<a href="deletebook.php?id=<?php echo $res['ID']; ?>">
										<i class="fa fa-pencil fa-lg">X</i>
									</a>
								</div>
							</div> 
						</li>
					<?php	} ?>
					</ol>
				</div>			
			</div>

<?php include ("../inc/footer.php"); ?>