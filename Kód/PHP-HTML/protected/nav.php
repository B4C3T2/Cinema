<hr>

<a href="index.php">Home</a>
<?php if(!IsUserLoggedIn()) : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=login">Bejelentkezés</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=register">Regisztráció</a>
<?php else : ?>
	<a href="index.php?P=refuse">Lemondás</a>
	<a href="index.php?P=logout">Kijelentkezés</a>
<?php endif; ?>

<hr>
