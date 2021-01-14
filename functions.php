<?php

	session_start();

	$db = new mysqli("localhost", "root", "root", "joshubg0_thursday");

	if($db->connect_errno){
		echo "We've got a problem: " . $db->connect_error;
	}