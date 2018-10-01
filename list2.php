<?php
	require_once "functions.php";

		$user_id = $_SESSION['user']['user_id'];
		$query = "SELECT * FROM `categories`";
		$result = $db->query($query);
		while($row = $result->fetch_array()) {
			echo "<aside>";
			echo "<h3>" . ucfirst($row['category_name']) . "</h3>";
			$category_id = $row['category_id'];

			echo "<ul class='fa-ul'>";
			$query1 = "SELECT * FROM `items` WHERE `category_id` = '$category_id' AND `user_id` = '$user_id'";
				$result1 = $db->query($query1);
				while($row1 = $result1->fetch_array()) {	
				echo "<li>"; 
				echo "<i class='fa-li fa fa-check-square-o'></i>";
				echo "<p>" . "Item: " . ucfirst($row1['item']) . "<br>";
				echo "Description: " . $row1['description'] ."<br>";
				echo "Quantity: " . $row1['quantity'] . "<br>";
				echo "Price: " . $row1['price']; 
				echo "<span><a class='edit-link' href='edit.php?item_id=" . $row1['item_id'] ."'><i class='fa fa-pencil'></i></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href='delete.php?item_id=" . $row1['item_id'] . "'><i class='fa fa-trash-o'></i></a></span></p>";
				echo "<div id='edit-form'>";
				echo "</div>";
				echo "</li>";
			}
			echo "</ul>";
			echo "</aside>";
		}