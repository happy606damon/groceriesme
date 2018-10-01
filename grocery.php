<?php
	require_once "functions.php";
?>
<?php
	if(isset($_SESSION['user'])) {
		header("location:list.php");
	}
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
</head>
<body id="homepage">
	<header>
		<div class="wrapper clear">
		<div id="intro-text">
			<h1>Grocery.Me</h1>
			<h3>Organized. Simple. Mine.</h3>
		</div>
		<!--<nav>
			<h3 id="top-nav"><a href="#">Login</a> <span>|</span> <a href="#">Register</a></h3>
		</nav>-->
		</div>
	</header>
	<main class="wrapper clear">
		<section id="login">
			<h2 class="move-over">Log In</h2>
			<form method="post" action="login2.php">
				<div class="input-group margin-bottom-sm">
				  	<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
				  	<input class="form-control" type="text" placeholder="User" name="user">
				</div>
				<div class="input-group">
				  	<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
				  	<input class="form-control" type="password" placeholder="Password" name="password">
				</div>
				<input class="btn signin-btn" type="submit" value="Sign Me In!">
			</form>
		</section>
		<section id="register">
			<h2 class="move-over">Register for Grocery.Me</h2>
			<form method="post" action="register2.php">
				<div class="input-group margin-bottom-sm">
				  	<span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
				  	<input class="form-control" type="text" name="firstname" placeholder="FirstName">
				</div>
				<div class="input-group margin-bottom-sm">
				  	<span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
				  	<input class="form-control" type="text" name="lastname" placeholder="LastName">
				</div>
				<div class="input-group margin-bottom-sm">
				  	<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
				  	<input class="form-control" type="text" name="user" placeholder="User">
				</div>
				<div class="input-group margin-bottom-sm">
	  				<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
	  				<input class="form-control" type="text" name="email" placeholder="Email address">
					</div>
				<div class="input-group">
				  	<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
				  	<input class="form-control" type="password" name="password" placeholder="Password">
				</div>
				<div class="input-group">
				  	<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
				  	<input class="form-control" type="password" name="password2" placeholder="Password Again">
				</div>
				<input class="btn register-btn" type="submit" value="Register Me!">
			</form>	
		</section>
	</main>
	<footer>
		<div class="wrapper clear">
			<h3>&copy;&nbsp;&nbsp;Johnny Gaze</h3>
			<h4>crafted and designed in Boston</h4>
		</div>
	</footer>
</body>
</html>