<?php
	require_once "functions.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Grocery List</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="webfonts/leaguegothic.css">
	<link rel="stylesheet" type="text/css" href="grocery.css">
	<link href='https://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body id="list">
	<header>
		<div class="wrapper clear">
		<div id="intro-text">
			<h1>Grocery.Me</h1>
			<h3>Organized. Simple. Mine.</h3>
		</div><!--End of Intro Text-->
		<div id="intro-right">
			<h3>Settings&nbsp;&nbsp;&nbsp;<i class="fa fa-cog"></i></h3>
			<h3>Log Out&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-out"></i></h3>
		</div><!--End of Intro Right-->
		</div>
	</header>
	<main class="wrapper">
		<div id="add-item-section">
			<h2>Josh's Grocery List</h2>
			<?php
				include "add.php";
			?>	
		</div>
		<div class="clear">
			<div class="list-left">	
				<?php
					include "list2.php";
				?>
			</div>
		</div>	
	</main>
</body>
</html>