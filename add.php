<form method="post" action="add2.php">
	<select name="category_id">
		<?php
			$query = "SELECT * FROM `categories`";
			$result = $db->query($query);
			while($row = $result->fetch_array()) {
				$category_id = $row['category_id'];
				$category_name = ucfirst($row['category_name']);
				echo "<option value='$category_id'>";
				echo $category_name;
				echo "</option>";
			}
		?>
	</select>
		<input type="text" name="item" placeholder="Item">
		<input type="text" name="description" placeholder="Description">
		<input type="text" name="quantity" placeholder="Quantity">
		<input type="text" name="price" placeholder="Price">
		<input class="btn" type="submit" value="Add Item!">
</form>