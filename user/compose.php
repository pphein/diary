<?php include("../inc/header.php"); ?>

<?php include("../inc/left-menu.php"); ?>

<div class="content">
	<h1>To Write Diary Note</h1>
	<form class="compose" action="add-compose.php" method="post">
		<label for="post">Write here:</label>
		<div id="ORIGINAL_IDWidgContainer" class="widgContainer">
			<textarea id="ORIGINAL_IDWidgTextarea" class="widgEditor" name="post"></textarea>
		</div>
		<br><br>
		<input type="submit" value="Post">
	</form>
</div>

<?php include("../inc/footer.php"); ?>
