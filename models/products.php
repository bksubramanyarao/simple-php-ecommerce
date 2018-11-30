<?php



$query=mysqli_query($con, "SELECT * FROM products");
$products=mysqli_fetch_all($query, MYSQLI_ASSOC);
include 'views/products/products.php';


?>
