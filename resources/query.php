<?php
/* This script is supposed query registered clients and return them to the
 * frontend as an array */

function get_user_list() {
	$conf = require '../resources/config.php';
	// Try to connect to database
	$mysqli = new mysqli(
		$conf["db"]["host"],
		$conf["db"]["username"],
		$conf["db"]["password"],
		$conf["db"]["dbname"]
	);
	// Check if connection failed
	if ($mysqli->connect_error) {
		die("Conexão falhou: ". $mysqli->connect_error);
	}

	$sql = "SELECT * FROM Clients";
	$query = $mysqli->query($sql);

	if ($query->num_rows > 0) {
		$user_list = array();
		while ($row = $query->fetch_assoc()) {
			array_push($user_list, array($row["Name"], $row["Email"], $row["Phone"]));
		}

		// Close connection
		$mysqli->close();

		return $user_list;
	}

	// Close connection
	$mysqli->close();
}

$user_list = get_user_list();
return $user_list;

// EOF

