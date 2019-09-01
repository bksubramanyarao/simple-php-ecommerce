<?php
//unset($_SESSION['user']);
//unset($_SESSION['totalprice']);

if (isset($_POST['productid'])) {
	$product_id = $_POST['productid'];

	$query = $dbh->prepare("SELECT * FROM products WHERE id=:product_id");
	$query->bindParam(':product_id', $product_id, PDO::PARAM_INT);
	$query->execute();
	$product = $query->fetch();
	$product->productquantity = $_POST['productquantity'];
	$product->price *= $product->productquantity;
	// debug($product);
	if (is_object($product)) {
	  $cart=1;
	  $_SESSION['cart'][$product->id]=$product;
	  $_SESSION['totalprice'][]=$product->price;
	} else {
	  $cart=0;
	}
}

if (isset($_POST['updatecart'])) {
	unset($_SESSION['totalprice']);
	foreach ($_POST['updateproduct'] as $key => $value) {
		if (array_key_exists($key, $_SESSION['cart'])) {
			if ($value['quantity'] == '0') {
				unset($_SESSION['cart'][$key]);
			} else {
				$oprice = $_SESSION['cart'][$key]->price / $_SESSION['cart'][$key]->productquantity;
				$_SESSION['cart'][$key]->price = $oprice;
				$_SESSION['cart'][$key]->price *= $value['quantity'];
				$_SESSION['totalprice'][] = $_SESSION['cart'][$key]->price;
				$_SESSION['cart'][$key]->productquantity = $value['quantity'];
			}
		}
	}
	//debug($_POST);
}

include 'views/cart/cart.php';


?>
