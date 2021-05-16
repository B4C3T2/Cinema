<?php
    if(isset($_POST['1'])){
        $_SESSION['movieId'] = 1;
        $_SESSION['title'] = "The Gentleman";
        header('Location: index.php?P=book');
    } else if(isset($_POST['2'])){
        $_SESSION['movieId'] = 2;
        $_SESSION['title'] = "007 No Time To Die";
        header('Location: index.php?P=book');
    }else if(isset($_POST['3'])){
		$_SESSION['movieId'] = 3;
        $_SESSION['title'] = "Top Gun Maverick";
        header('Location: index.php?P=book');
    }else if(isset($_POST['4'])){
        $_SESSION['movieId'] = 4;
        $_SESSION['title'] = "Black Widow";
        header('Location: index.php?P=book');
    }else if(isset($_POST['5'])){
        $_SESSION['movieId'] = 5;
        $_SESSION['title'] = "Justice League";
        header('Location: index.php?P=book');
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Főoldal</title>
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="./public/home_style.css">
  <link rel="shortcut icon" href="./public/pictures/icon.png"/>
</head>
<body>
  <div class="container-fluid">
  	<table>
		<tr>
			<th><div class="home"><button type="button"  name="home" style="text-align:center;"> <a href ="index.php?P=home">Hyper Cinema</a> </button></div></th>
		</tr>
	</table>
	<content>
		<form method="post" action="index.php?P=book">
		<table>
			<tr>
				<th><div class="cover"><button type="submit" name="1" > <a href ="index.php?P=book"><img src="../CSS/pictures/the_gentlemen.jpg" /></a> </button></div></th>
				<th><div class="cover"><button type="submit" name="2" > <a href ="index.php?P=book"><img src="../CSS/pictures/007_no_time_to_die.jpg" /></a> </button></div></th>
				<th><div class="cover"><button type="submit" name="3" > <a href ="index.php?P=book"><img src="../CSS/pictures/top_gun_2.jpg" /></a> </button></div></th>
				<th><div class="cover"><button type="submit" name="4" > <a href ="index.php?P=book"><img src="../CSS/pictures/black_widow.jpg" /></a> </button></div></th>
				<th><div class="cover"><button type="submit" name="5" > <a href ="index.php?P=book"><img src="../CSS/pictures/justice_league.jpg" /></a> </button></div></th>
			</tr>
		</table>
		</form>
	</content>	
  </div>
</body>
</html>