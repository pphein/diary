

	<?php 

	

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$comfirmPassword = $_POST['comfirmPassword'];

		if ($name && $email && $password==$comfirmPassword) {
			echo $name;
		}

		header ("location: diary.php");

	?>
		



<!--
$sql = "INSERT INTO user (
		name,  password, comfirmPassword, email, 
		  user_registered
		) VALUES (
		'$name',  '$password', $comfirmPassword, '$email',   
		  now()
		) ";

mysql_query($sql);
*/


 ?>
