<?php

	require_once "functions.php";

	$item_id = $_GET['item_id'];
	

	$query = "SELECT * FROM `items` WHERE `item_id` = '$item_id'";

	$result = $db->query($query);

	$row = $result->fetch_array();
?>	

<form method='post' action='edit2.php'>			
	<input type='hidden' name='item_id' value='<?php echo $row["item_id"]; ?>'> 
	<input type='text' value='<?php echo $row["item"]; ?>' name='item' placeholder='Item'/>
	<input type='text' value='<?php echo $row["description"]; ?>' name='description' placeholder='Description'/>
	<input type='text' value='<?php echo $row["quantity"]; ?>' name='quantity' placeholder='Quantity'/>
	<input type='text' value='<?php echo $row["price"]; ?>' name='price' placeholder='Price'/>
	<input class='btn' type='submit' value='Edit Me!'/>
</form>
