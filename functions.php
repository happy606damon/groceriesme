<?php

	session_start();

	$db = new mysqli("localhost", "joshubg0_admin", "CDAStudent", "joshubg0_thursday");

	if($db->connect_errno){
		echo "We've got a problem: " . $db->connect_error;
	}