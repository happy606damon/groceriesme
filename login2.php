<?php
	require_once "functions.php";

	$user = $db->escape_string($_POST['user']);
	$password = $db->escape_string($_POST['password']);

	$query = "SELECT * FROM `joshubg0_thursday`.`login` WHERE `user` = '$user' AND `password` = '$password'";

	$result = $db->query($query);

	$row = $result->fetch_array();

	$_SESSION['user'] = $row;

	header("location:list.php");