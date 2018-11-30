<?php


if (isset($_POST['register'])) {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$checkduplicateemail=mysqli_query($con, "SELECT email FROM users WHERE email='$email'");
	$duplicateemail=mysqli_fetch_assoc($checkduplicateemail);
	if (is_array($duplicateemail)) {} else {
		$insertuser=mysqli_query($con, "INSERT INTO users(name, email, password) VALUES ('$username', '$email', '$password')");
		$uid = mysqli_insert_id($con);
		$insertuserrole=mysqli_query($con, "INSERT INTO user_permissions(user_id, permission_id) VALUES ('$uid', '2')");
	}
}




include 'views/register/register.php';
?>
