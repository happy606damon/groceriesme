<?php
	require_once "functions.php";

	$item = $db->escape_string($_POST['item']);
	$description = $db->escape_string($_POST['description']);
	$quantity = $db->escape_string($_POST['quantity']);
	$price = $db->escape_string($_POST['price']);
	$item_id = $db->escape_string($_POST['item_id']);

	$query = "UPDATE `items` SET `item` = '$item', `description` = '$description', `quantity` = '$quantity', `price` = '$price' WHERE `items`.`item_id` = '$item_id'";

	$db->query($query);

	header("location:list.php");