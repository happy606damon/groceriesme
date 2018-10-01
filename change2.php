<?php
	require_once "functions.php";

	$firstname = $db->escape_string($_POST['firstname']);
	$lastname = $db->escape_string($_POST['lastname']);
	$user = $db->escape_string($_POST['user']);
	$email = $db->escape_string($_POST['email']);
	$password = $db->escape_string($_POST['password']);
	$user_id = $db->escape_string($_POST['user_id']);

	$query = "UPDATE `login` SET `firstname` = '$firstname', `lastname` = '$lastname', `user` = '$user', `email` = '$email', `password` = '$password' WHERE `user_id` = '$user_id'";

	$db->query($query);

	$query1 = "SELECT * FROM `login` WHERE `user` = '$user' AND `password` = '$password'";

	$result1 = $db->query($query1);

	$row1 = $result1->fetch_array();

	$_SESSION['user'] = $row1;

	header("location:list.php");