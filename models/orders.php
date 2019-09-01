<?php


$query = $dbh->prepare("SELECT address.*, users.email, orders.id AS orderid, orders.order_details FROM orders LEFT JOIN address ON orders.address_id=address.id LEFT JOIN users ON orders.users_id=users.id");
$query->execute();

$orders = $query->fetchAll();


include 'views/orders/orders.php';
?>
