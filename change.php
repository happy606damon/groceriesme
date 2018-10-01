<?php
	require_once "functions.php";

	$user_id = $_SESSION['user']['user_id'];

	$query = "SELECT * FROM `joshubg0_thursday`.`login` WHERE `user_id` = '$user_id'";

	$result = $db->query($query);

	$row = $result->fetch_array();
?>

<form method="post" action="change2.php">
	<input type="hidden" name="user_id" value="<?php echo $row['user_id']?>"><br>
	<input value="<?php echo $row['firstname']; ?>" type="text" name="firstname" placeholder="firstname"><br>
	<input value="<?php echo $row['lastname']; ?>" type="text" name="lastname" placeholder="lastname"><br>
	<input value="<?php echo $row['user']; ?>" type="text" name="user" placeholder="user"><br>
	<input value="<?php echo $row['email']; ?>" type="text" name="email" placeholder="email"><br>
	<input value="<?php echo $row['password']; ?>" type="password" name="password" placeholder="password"><br>
	<input type="submit" value="update">
</form>	