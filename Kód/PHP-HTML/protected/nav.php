<hr>

<a href="index.php">Home</a>
<?php if(!IsUserLoggedIn()) : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=login">Bejelentkezés</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=register">Regisztráció</a>
<?php else : ?>

	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
		<span> &nbsp; \ &nbsp; </span>
		<a href="index.php?P=users">Tagok</a>
		<span> &nbsp; | &nbsp; </span>
		<a href="index.php?P=list_auto">Autók listája</a>
		<span> &nbsp; | &nbsp; </span>
		<a href="index.php?P=add_auto">Autó hozzáadása</a>
		<span> &nbsp; | &nbsp; </span>
		<a href="mailto:mano201611@gmail.com" target="_top">Email a tulaj felé</a>
		<span> &nbsp; / &nbsp; </span>
	<?php else : ?>
		<span> &nbsp; | &nbsp; </span>
	<?php endif; ?>

	<a href="index.php?P=logout">Kijelentkezés</a>
<?php endif; ?>

<hr>
