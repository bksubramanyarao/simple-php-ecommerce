<?php


$query = $dbh->prepare("SELECT * FROM products WHERE slug=:qs");
$query->execute([':qs' => $qs]);
$product = $query->fetch();

if (is_object($product)) {
	include 'views/products/singleproduct.php';
} else {
	include 'views/404.php';
}


?>
