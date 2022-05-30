<?php

if (isset($_POST['client_name']) && isset($_POST['client_phone'])) {
	echo $_POST['client_name'] . ' and ' . $_POST['client_phone'];	
}

?>

