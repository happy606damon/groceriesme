<?php

	require_once "functions.php";

	session_destroy();

	unset($_SESSION['user']);

	header("location:grocery.php");