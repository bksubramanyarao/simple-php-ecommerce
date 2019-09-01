<?php


$products = $dbh->query("SELECT * FROM products");


include 'views/products/products.php';


?>
