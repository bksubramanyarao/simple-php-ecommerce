<?php


try {
	$driver_options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
	];
	$dbh = new PDO('mysql:host=localhost;dbname=simplephpecommerce', 'root', '', $driver_options);
} catch (PDOException $err) {
	echo $err->getMessage();
}


function debug($d) {
	echo "<pre>";
	var_dump($d);
	echo "</pre>";
}

function is_logged_in() {
	return $_SESSION['user']->id ?? false;
}