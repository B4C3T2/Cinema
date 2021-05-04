<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book'])) {
		$postData = [
			'user_id' => $_POST['user_id'],
			'movie_id' => $_POST['movie_id'],
			'seat_id' => $_POST['seat_id']
		];
			if(empty($postData['user_id']) || empty($postData['movie_id']) || empty($postData['seat_id'])){
			echo "Hiányzó adat(ok)!";
		} else {
			$query = "INSERT INTO booking_seats (userId, movieId, seatId) VALUES (:user_id, :movie_id, :seat_id)";
			$params = [
				':user_id' => $postData['user_id'],
				':movie_id' => $postData['movie_id'],
				':seat_id' => $postData['seat_id']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Foglalás</title>
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="../CSS/foglalas_style.css">
  <link rel="shortcut icon" href="../../CSS/pictures/icon.png"/>
</head>
<body>
  <div class="container-fluid">
    <content>
    	<button type="submit"  value="book" class="btn btn-outline-secondary"><a href ="index.php?P=home">Foglalás</a></button>
		<table>
			<tr>
				<th><div class="seat"><input type="checkbox" id="seat1"></div></th>
				<th><div class="seat"><input type="checkbox" id="seat2"></div></th>
				<th><div class="seat"><input type="checkbox" id="seat3"></div></th>
				<th><div class="seat"><input type="checkbox" id="seat4"></div></th>
				<th></th>
				<th></th>
				<th><div class="seat"><input type="checkbox" id="seat5"></div></th>
				<th><div class="seat"><input type="checkbox" id="seat6"></div></th>
				<th><div class="seat"><input type="checkbox" id="seat7"></div></th>
				<th><div class="seat"><input type="checkbox" id="seat8"></div></th>				
			</tr>
			<tr>
				<td><div class="seat"><input type="checkbox" id="seat9"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat10"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat11"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat12"></div></td>
				<td></td>
				<td></td>
				<td><div class="seat"><input type="checkbox" id="seat13"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat14"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat15"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat16"></div></td>
			</tr>
			<tr>
				<td><div class="seat"><input type="checkbox" id="seat17"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat18"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat19"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat20"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat21"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat22"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat23"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat24"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat25"></div></td>
				<td><div class="seat"><input type="checkbox" id="seat26"></div></td>
			</tr>
		</table>
	</content>
  </div>
</body>
</html>
