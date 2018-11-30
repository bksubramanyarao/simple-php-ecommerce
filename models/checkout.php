<?php


if (isset($_SESSION['user'])) {
	$query=mysqli_query($con, "SELECT * FROM address WHERE id='". $_SESSION['user']['id'] ."'");
	$address=mysqli_fetch_assoc($query);
}
if (isset($_POST['checkout'])) {
	$fullname=$_POST['fullname'];
	$mobile=$_POST['mobile'];
	$address1=$_POST['address1'];
	$address2=$_POST['address2'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$postcode=$_POST['postcode'];
	$uid = (isset($_SESSION['user']['id'])) ? $_SESSION['user']['id']:null;
	if (count($_SESSION['cart'])>0) {
		$cart=serialize($_SESSION['cart']);
		$sql=mysqli_query($con, "REPLACE INTO address(id, fullname, mobile, address1, address2, country, state, city, postcode) VALUES ('$uid', '$fullname', '$mobile', '$address1', '$address2', '$country', '$state', '$city', '$postcode')");
		$addr_id = mysqli_insert_id($con);
		$sql=mysqli_query($con, "INSERT INTO orders(users_id, address_id, order_details) VALUES ('$uid', '$addr_id', '$cart')");
		unset($_SESSION['cart']);
		unset($_SESSION['totalprice']);
		$msg='successful';
	} else {

	}
	
}




include 'views/checkout/checkout.php';
?>
