<?php
	require_once "functions.php";

	$user = $db->escape_string($_POST['user']);
	$password = $db->escape_string($_POST['password']);

	$query = "SELECT * FROM `joshubg0_thursday`.`login` WHERE `user` = '$user' AND `password` = '$password'";

	$result = $db->query($query);

	$row = $result->fetch_array();

	//var_dump($row['user']); die;

	if(isset($row)) {
		$_SESSION['user'] = $row;
		header("location:list.php");
	} else {
		$message = "Sorry, $user is not registered for this app. Please register.";
		echo "<script>alert('$message');</script>"; 
		echo "<script>
			//Using setTimeout to execute a function after 3 seconds.
			setTimeout(function () {
			   //Redirect with JavaScript
			   window.location.href= 'http://joshuacintolo.com/projects/groceries/grocery.php';
			}, 3000);
			</script>";
		session_destroy(); 
	}

	// $_SESSION['user'] = $row;

	// header("location:list.php");