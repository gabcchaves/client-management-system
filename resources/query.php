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

	$sql = "SELECT * FROM test";
	$user_list = $mysqli->query($sql);

	if ($user_list->num_rows > 0) {
		while ($row = $user_list->fetch_assoc()) {
			echo "Name: " . $row["name"] . "<br>";
		}
	} else {
		echo "Sem dados.";
	}

}

get_user_list();

// EOF

