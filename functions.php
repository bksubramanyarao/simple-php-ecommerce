<?php
$con = mysqli_connect('localhost', 'root', '', 'customloginsystem');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

function debug($d) {
	echo "<pre>";
	var_dump($d);
	echo "</pre>";
}

function is_logged_in() {
	return (isset($_SESSION['user']['id'])) ? true:false;
}