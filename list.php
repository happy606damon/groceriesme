<?php
	require_once "functions.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Grocery List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="webfonts/leaguegothic.css">
	<link rel="stylesheet" type="text/css" href="grocery.css">
	<link href='https://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<script src="jquery-2.1.4.js"></script>
	<script src="script.js"></script>
</head>
<body id="list">
	<header>
		<div class="wrapper clear">
		<div id="intro-text">
			<h1>Grocery.Me</h1>
			<h3>Organized. Simple. Mine.</h3>
		</div><!--End of Intro Text-->
		<div id="intro-right">
			<h3><a href='#change'>Change Information&nbsp;&nbsp;<i class="fa fa-cog"></i></a></h3>
				<div id="change-information">
					<?php
						include "change.php";
					?>
				</div>
			<h3><a href='logout.php'>Log Out&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a></h3>
		</div><!--End of Intro Right-->
		</div>
	</header>
	<main class="wrapper">
		<div id="add-item-section">
			<?php

				$total = 0;
				$user_id = $_SESSION['user']['user_id'];
				$firstname = $_SESSION['user']['firstname'];

				$query = "SELECT * FROM `items` WHERE `user_id` = '$user_id'";

				$result = $db->query($query);

				while($row = $result->fetch_array()){
					$total += ($row['quantity'] * $row['price']);
				}

				echo "<h2>" . ucfirst($firstname). "'s Grocery List";
				echo "<span id='current-total'>Current Total: $" . $total . "</span>";
				echo "<a href='#top-add'><i id='add-item' class='fa fa-plus'></i></a>" . "</h2>";
				include "add.php";
			?>	
		</div>
		<div class="clear">
				<?php
					include "list2.php";
				?>

				<?php
					include "total.php";
				?>
		</div>	
	</main>
</body>
</html>