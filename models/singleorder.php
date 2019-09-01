<?php


$query = $dbh->prepare("SELECT address.*, users.email, orders.id AS orderid, orders.order_details FROM orders LEFT JOIN address ON orders.address_id=address.id LEFT JOIN users ON orders.users_id=users.id WHERE orders.id=:user_id");

$query->bindParam(':user_id', $qs, PDO::PARAM_INT);

$query->execute();

$order = $query->fetch();
//debug($order);
if (is_object($order)) {
	include 'views/orders/singleorder.php';
} else {
	include 'views/404.php';
}
?>
