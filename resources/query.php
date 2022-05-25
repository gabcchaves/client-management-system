<?php
/* This script is supposed query registered clients and return them to the
 * frontend as an array */

function get_user_list() {
	$conf = require '../resources/config.php';
	// Try to connect to database
	try {
		$mysqli = new mysqli(
			$conf["db"]["host"],
			$conf["db"]["username"],
			$conf["db"]["password"],
			$conf["db"]["dbname"]
		);

		// Query the user list
		$user_list = $mysqli->query("SELECT * FROM test;");

		echo $user_list;

		// Close connection
		mysqli_close($mysqli);
	} catch (mysqli_sql_exception $error) {
		return $error;
	}
}

get_user_list();

// EOF

