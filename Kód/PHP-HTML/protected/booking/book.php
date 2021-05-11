<?php

    if(isset($_POST['1'])){
        $movieId = 1;
        $title = "The Gentleman";
    } else if(isset($_POST['2'])){
        $movieId = 2;
        $title = "007 No Time To Die";
    }else if(isset($_POST['3'])){
        $movieId = 3;
        $title = "Top Gun Maverick";
    }else if(isset($_POST['4'])){
        $movieId = 4;
        $title = "Black Widow";
    }else if(isset($_POST['5'])){
        $movieId = 5;
        $title = "Justice League";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book'])) {
        $seatDb = 0;
        if(!empty($_POST['seats'])) {
            foreach($_POST['seats'] as $seat){
                $seatDb = $seatDb + 1;
            }
            $postData = [
                'user_id' => $_SESSION['uid'],
                'movie_id' => 2,
                'seat_id' => $seatDb
            ];
            $query = "INSERT INTO bookingtable (uid, movieId, seatId) VALUES (:user_id, :movie_id, :seat_id)";
            $params = [
                ':user_id' => $postData['user_id'],
                ':movie_id' => $postData['movie_id'],
                ':seat_id' => $postData['seat_id']
            ];
            require_once DATABASE_CONTROLLER;
            if(!executeDML($query, $params)) {
                echo "Hiba az adatbevitel során!";
            }   header('Location: index.php');
        } else {
            echo "Ki kell választani székeket a foglaláshoz!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Foglalás</title>
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="./public/foglalas_style.css">
  <link rel="shortcut icon" href="../../CSS/pictures/icon.png"/>
</head>
<body>
  <div class="container-fluid">
    <content>
    	<button type="submit"  name="book" class="btn btn-outline-secondary"><a href ="index.php?P=home">Foglalás</a></button>
    	<p> <?php
    		$title
    	?> </p>
		<table>
			<tr>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat1"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat2"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat3"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat4"></div></th>
				<th></th>
				<th></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat5"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat6"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat7"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="seat8"></div></th>				
			</tr>
			<tr>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat9"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat10"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat11"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat12"></div></td>
				<td></td>
				<td></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat13"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat14"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat15"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat16"></div></td>
			</tr>
			<tr>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat17"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat18"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat19"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat20"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat21"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat22"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat23"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat24"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat25"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="seat26"></div></td>
			</tr>
		</table>
	</content>
  </div>
</body>
</html>
