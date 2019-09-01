<?php


if (isset($_SESSION['user'])) {
	$query = $dbh->prepare("SELECT * FROM address WHERE id=:user_id");
	$query->bindParam(':user_id', $_SESSION['user']->id, PDO::PARAM_INT);
	$query->execute();
	$address = $query->fetch();
}
if (isset($_POST['checkout'])) {
	$fullname = $_POST['fullname'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$postcode = $_POST['postcode'];
	$uid = $_SESSION['user']->id ?? null;
	if (count($_SESSION['cart']) > 0) {
		$cart = serialize($_SESSION['cart']);
		$sql = $dbh->prepare("REPLACE INTO address(id, fullname, mobile, address1, address2, country, state, city, postcode) VALUES (:uid, :fullname, :mobile, :address1, :address2, :country, :state, :city, :postcode)");
		$sql->bindParam(':uid', $uid, PDO::PARAM_INT);
		$sql->bindParam(':fullname', $fullname, PDO::PARAM_STR);
		$sql->bindParam(':mobile', $mobile, PDO::PARAM_STR);
		$sql->bindParam(':address1', $address1, PDO::PARAM_STR);
		$sql->bindParam(':address2', $address2, PDO::PARAM_STR);
		$sql->bindParam(':country', $country, PDO::PARAM_STR);
		$sql->bindParam(':state', $state, PDO::PARAM_STR);
		$sql->bindParam(':city', $city, PDO::PARAM_STR);
		$sql->bindParam(':postcode', $postcode, PDO::PARAM_INT);
		$sql->execute();

		$addr_id = $dbh->lastInsertId();
		$sql = $dbh->prepare("INSERT INTO orders(users_id, address_id, order_details) VALUES (:uid, :addr_id, :cart)");
		$sql->bindParam(':uid', $uid, PDO::PARAM_INT);
		$sql->bindParam(':addr_id', $addr_id, PDO::PARAM_INT);
		$sql->bindParam(':cart', $cart, PDO::PARAM_STR);
		$sql->execute();
		
		unset($_SESSION['cart']);
		unset($_SESSION['totalprice']);
		$msg = 'successful';
	} else {

	}

}


include 'views/checkout/checkout.php';
?>
