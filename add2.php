<?php

	require_once "functions.php";

	$category_id = $db->escape_string($_POST['category_id']);
	$item = $db->escape_string($_POST['item']);
	$description = $db->escape_string($_POST['description']);
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$user_id = $_SESSION['user']['user_id'];

	if(empty($item) || empty($description) || empty($quantity) || empty($price)){
		echo "Please fill in all fields to add an item.";
		echo "<a href='list.php'>Re-add item</a>";
	}
	else{

		$query = "INSERT INTO `joshubg0_thursday`.`items` (`category_id`,`item`,`description`,`quantity`,`price`,`user_id`) VALUES ('$category_id','$item','$description','$quantity','$price','$user_id')";

		$db->query($query);

		header("location:list.php");
	}