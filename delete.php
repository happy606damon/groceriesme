<?php
	require_once "functions.php";

	$item_id = $_GET['item_id'];

	$user_id = $_SESSION['user']['user_id'];

	$query = "DELETE FROM `items` WHERE `item_id` = '$item_id' AND `user_id` = '$user_id'";

	$db->query($query);

	header("location:list.php");