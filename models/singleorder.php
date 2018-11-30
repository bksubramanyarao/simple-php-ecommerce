<?php








$query=mysqli_query($con, "SELECT address.*, users.email, orders.id AS orderid, orders.order_details FROM orders LEFT JOIN address ON orders.address_id=address.id LEFT JOIN users ON orders.users_id=users.id WHERE orders.id='$q'");

$order=mysqli_fetch_assoc($query);
//debug($order);
if (is_array($order)) {
	include 'views/orders/singleorder.php';
} else {
	include 'views/404.php';
}
?>
