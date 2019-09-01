<?php


if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$check_duplicate_email = $dbh->prepare("SELECT email FROM users WHERE email=:email");
	$check_duplicate_email->execute([':email' => $email]);
	$duplicate_email = $check_duplicate_email->fetch();

	if (isset($duplicate_email->email)) {
	} else {
		$insert_user = $dbh->prepare("INSERT INTO users(name, email, password) VALUES (:username, :email, :password)");
		$insert_user->execute([
			':username' => $username,
			':email' => $email,
			':password' => $password
		]);

		$user_id = $dbh->lastInsertId();
		$insert_user_role = $dbh->prepare("INSERT INTO user_permissions(user_id, permission_id) VALUES (:user_id, :permission_id)");
		
		$insert_user_role->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$insert_user_role->bindValue(':permission_id', '2', PDO::PARAM_STR);

		$insert_user_role->execute();
	}
}


include 'views/register/register.php';
?>
