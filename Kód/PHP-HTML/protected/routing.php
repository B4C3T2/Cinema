<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;

	case 'book': IsUserLoggedIn() ? require_once PROTECTED_DIR.'booking/book.php' : header('Location: index.php'); break;

	case 'refuse': IsUserLoggedIn() ? require_once PROTECTED_DIR.'booking/refuse.php' : header('Location: index.php'); break;
	
	default: require_once PROTECTED_DIR.'normal/404.php'; break;
}

?>