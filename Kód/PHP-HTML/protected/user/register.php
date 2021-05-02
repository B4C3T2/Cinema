<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
	$postData = [
		'fname' => $_POST['first_name'],
		'lname' => $_POST['last_name'],
		'email' => $_POST['email'],
		'uid' => $_POST['uid'],
		'password' => $_POST['password'],
		'password1' => $_POST['password1']
	];

	if(empty($postData['fname']) || empty($postData['lname']) || empty($postData['email']) || empty($postData['uid']) || empty($postData['password']) || empty($postData['password1'])) {
		echo "Hiányzó adat(ok)!";
	} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Az email cím nem érvényes!";
	} else if ($postData['password'] != $postData['password1']) {
		echo "A jelszavak nem egyeznek!";
	} else if(strlen($postData['password']) < 3) {
		echo "A jelszónak legalább 3 karakterből kell állnia!";
	} else if(!UserRegister($postData['email'], $postData['password'], $postData['fname'], $postData['lname'], $postData['uid'])) {
		echo "A regisztráció sikertelen!";
	}

	$postData['password'] = $postData['password1'] = "";
}
?>
