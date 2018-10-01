<?php
	require_once "functions.php";

	$firstname = $db->escape_string($_POST['firstname']);
	$lastname = $db->escape_string($_POST['lastname']);
	$user = $db->escape_string($_POST['user']);
	$email = $db->escape_string($_POST['email']);
	$password = $db->escape_string($_POST['password']);
	$password2 = $db->escape_string($_POST['password2']);

	if($firstname == "" || $lastname == "" || $user == "" || $email == "" || $password == "" || $password2 == ""){
		echo "Please fill in every field to continue.";
		echo "<a href='grocery.php'>Return to Registration?</a>";
	}
	else {
		$query = "SELECT * FROM `login` WHERE `user` = '$user' OR `email` = '$email'";
		$result = $db->query($query);
		$row_cnt = $result->num_rows;

		if($row_cnt == 1){
			echo "Please choose a different user and email.";
			echo "<a href='grocery.php'>Return to Registration</a>";
		}
		elseif($password != $password2) {
			echo "passwords don't match!";
			echo "<a href='grocery.php'>Go back?</a>";
		}
		else{
			$query1 = "INSERT INTO `login` (`firstname`,`lastname`,`user`,`email`,`password`) VALUES ('$firstname','$lastname','$user','$email','$password')";

			$db->query($query1);

			$query2 = "SELECT * FROM `login` WHERE `user` = '$user' AND `password` = '$password'";

			$result2 = $db->query($query2);

			$row2 = $result2->fetch_array();

			$_SESSION['user'] = $row1;

			header("location:list.php");
		}
	}