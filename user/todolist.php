<?php include("../inc/header.php"); ?>

<?php include("../inc/left-menu.php"); ?>

<div class="content">
	<h1>Your To Do list here:</h1>
	<form action="add-list.php" method="post">
		<label for="list">Write here:</label>
		<input type="text" id="list" name="list" placeholder="To Do List">
		<br><br>
		<input type="submit" value="Add List">
	</form>

	<div class="usrlist">
		<ol>
			<?php
			include "../config.php";
			$user = $_SESSION['id'];
			$presult = mysqli_query($conn, "SELECT * FROM user_lists WHERE user_id = $user  ");
			while ($res = mysqli_fetch_array($presult)) { ?>
				<li>
					<div class="list">
						<p> <?php echo $res['list_content']; ?> </p>
						<div class="editlist">
							<a href="deletelist.php?id=<?php echo $res['ID']; ?>">
								<i class="fa fa-pencil fa-lg">X</i>
							</a>
						</div>
					</div>
				</li>
			<?php	} ?>
		</ol>
	</div>
	<div class="bottom">
		<a href="#"><button>Top Back</button></a>
	</div>
</div>

<?php include("../inc/footer.php"); ?>
