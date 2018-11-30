<?php







$query=mysqli_query($con, "SELECT address.*, users.email, orders.id AS orderid, orders.order_details FROM orders LEFT JOIN address ON orders.address_id=address.id LEFT JOIN users ON orders.users_id=users.id");

$orders=mysqli_fetch_all($query, MYSQLI_ASSOC);

include 'views/orders/orders.php';
?>
