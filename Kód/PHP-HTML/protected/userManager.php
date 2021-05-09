<?php 
function IsUserLoggedIn() {
	return $_SESSION  != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}

function UserLogout() {
	session_unset();
	session_destroy();
	header('Location: index.php');
}

function UserLogin($username, $password) {
	$query = "SELECT id, firstname, lastname, email, password FROM users WHERE username = :username AND password = :password";
	$params = [
		':username' => $username,
		':password' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['uid'] = $record['id'];
		$_SESSION['fname'] = $record['firstname'];
		$_SESSION['lname'] = $record['lastname'];
		$_SESSION['email'] = $record['email'];
		$_SESSION['password'] = $record['password'];
		$_SESSION['username'] = $record['username'];
		header('Location: index.php');
	}
	return false;
}

function UserRegister($username, $email, $password, $fname, $lname) {
	$query = "SELECT id FROM users WHERE email = :email";
	$params = [ ':email' => $email ];

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO users (firstname, lastname, email, password, username) VALUES (:fname, :lname, :email, :password,:username)";
		$params = [
			':fname' => $fname,
			':lname' => $lname,
			':email' => $email,
			':username' => $username,
			':password' => sha1($password)
		];

		if(executeDML($query, $params)) 
			header('Location: index.php?P=login');
	} 
	return false;
}

?>