<?php include("../inc/header.php"); ?>

<?php include("../inc/left-menu.php"); ?>

<div class="content">
	<h1>Your Posts are here:</h1>
	<center>
		<?php
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		?>
	</center>
	<div class="post">
		<ul>
			<?php
			include "../config.php";
			$user = $_SESSION['id'];
			$presult = mysqli_query($conn, "SELECT * FROM posts WHERE user_id = $user ORDER BY ID DESC");

			while ($res = mysqli_fetch_array($presult)) { ?>
				<li>
					<br>
					<b>Date: <?php echo $res['post_date'] ?></b>
					<br><br>
					<?php echo $res['post_content']; ?>
					<br><br>
					<form action="editpost.php" method="post">
						<input type="hidden" name="id" value="<?php echo $res['ID'] ?>">
						<button type="submit" name="submit" value="edit">edit</button>
					</form>
					<form action="deletepost.php" method="post">
						<input type="hidden" name="id" value="<?php echo $res['ID'] ?>">
						<button type="submit" name="delete" value="delete">delete</button>
					</form>
					<br><br>
					<hr>
				</li>
			<?php } ?>
		</ul>
	</div>
	<div class="bottom">
		<a href="#"><button>Top Back</button></a>
	</div>
</div>

<?php include("../inc/footer.php"); ?>
