<?php include("../inc/header.php"); ?>

<?php include("../inc/left-menu.php"); ?>

<div class="content">
	<h1>To Write Diary Note</h1>

	<?php
	include("../config.php");
	$id = $_POST['id'];
	$user_id = $_SESSION['id'];

	$sql = mysqli_query($conn, "SELECT * FROM posts WHERE ID = $id AND user_id = $user_id");

	$result = mysqli_fetch_assoc($sql);

	if (!$result) {
		header("location: post.php");
	}
	?>
	<form class="compose" action="updatepost.php" method="post">
		<div id="ORIGINAL_IDWidgContainer" class="widgContainer">
			<input type="hidden" name="id" value="<?php echo $result['ID']; ?>">
			<textarea id="ORIGINAL_IDWidgTextarea" class="widgEditor" name="post">
			   	<?php echo $result['post_content']; ?>
			</textarea>
		</div>
		<br><br>
		<input type="submit" value="Post">
	</form>
</div>

<?php include("../inc/footer.php"); ?>
