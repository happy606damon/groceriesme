<?php
	require_once "functions.php";

	$total = 0;
	$user_id = $_SESSION['user']['user_id'];

	echo "<aside id='total'>";
	echo "<h3>Total</h3>";
	echo "<ul>";
	$query = "SELECT * FROM `categories`";
		$result = $db->query($query);
		while($row = $result->fetch_array()) {
			$ctotal = 0;
			echo "<li>" . ucfirst($row['category_name']) . ": $";
			$category_id = $row['category_id'];

			$query1 = "SELECT * FROM `items` WHERE `category_id` = '$category_id' AND `user_id` = '$user_id'";
				$result1 = $db->query($query1);
				while($row1 = $result1->fetch_array()) {
					$ctotal += ($row1['quantity'] * $row1['price']);
					$total += ($row1['quantity'] * $row1['price']);
			}
			echo $ctotal;
			echo "</li>";

		}
	echo "<li>TOTAL: $" . $total . "</li>";
	echo "</ul>";
	echo "</aside>";	