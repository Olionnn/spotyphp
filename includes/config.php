<?php

	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["host"];
	$username = $url["root"];
	$password = $url["mysql"];
	$db = substr($url["spotify"], 1);

	//$con = new mysqli($server, $username, $password, $db);
	 $con = mysqli_connect("localhost", "root", "mysql", "spotify");

	if (mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}

?>
