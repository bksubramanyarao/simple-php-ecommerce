<?php


if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=md5($_POST['password']);
    $query=mysqli_query($con, "SELECT users.id, users.name, users.email, permissions.permission FROM users LEFT JOIN user_permissions ON users.id=user_permissions.user_id LEFT JOIN permissions ON permissions.id=user_permissions.permission_id WHERE email='$email' AND password='$password'");
    $user=mysqli_fetch_assoc($query);
    if (is_array($user)) {
    	$_SESSION['user']=$user;
    	$login=1;
    }
}




include 'views/login/login.php';
?>
