<?php
/* This script is supposed query registered clients and return them to the
 * frontend as an array */

class UserList {
	// I have little experience... This my be weird, but I'm trying to make it
	// safer.
	private $conf = require '../resources/config.php';
	
	public static function get_user_list() {
		// Make database connection
		$mysqli = new mysqli(
			__CLASS__::$conf["db"]["host"],
			__CLASS__::$conf["db"]["username"],
			__CLASS__::$conf["db"]["password"],
			__CLASS__::$conf["db"]["dbname"]
		);

		// Query User
		$user_list = $mysqli->host_info;
		return $user_list;
	}
}

/* echo "<h1>" . $config["db"]["dbname"] . "</h1>"; */
echo UserList::get_user_list();

// EOF

