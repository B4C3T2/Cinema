<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book'])) {
        $seatDb = 0;
        if(!empty($_POST['seats'])) {
			//Foglalandó székek számának vizsgálata
            foreach($_POST['seats'] as $seat){
                $seatDb = $seatDb + 1;
            }
			if($seatDb <= 4){
				//Foglalás tábla feltöltése
				$postData = [
					'user_id' => $_SESSION['uid'],
					'movie_id' => $_SESSION['movieId']
				];
				$query = "INSERT INTO bookingtable (uid, movieId) VALUES (:user_id, :movie_id)";
				$params = [
					':user_id' => $postData['user_id'],
					':movie_id' => $postData['movie_id']
				];
				require_once DATABASE_CONTROLLER;
				if(!executeDML($query, $params)) {
					echo "Hiba az adatbevitel során!";
				} 
				
				//Foglalási azonosító lekérdezése
				$postData = [
					'uid' => $_SESSION['uid'],
					'movieId' => $_SESSION['movieId']
				];
				$query = "SELECT * FROM bookingtable WHERE uid = :uid AND movieId = :movieId ";
				$params = [
				    ':uid' => $postData['uid'],
					':movieId' => $postData['movieId']
				];
				$record = getRecord($query, $params);
				$bookingId = $record['id']; //ide lehet session lesz
				
				//Megnézzük, hogy a kiválasztott székek egyike sem foglalt
				$reservedDb = 0;
				foreach($_POST['seats'] as $seatId){
					$postData = [
						'seatId' => $seatId,
						'movieId' => $_SESSION['movieId']
					];
					$query = "SELECT bookedseats.seatId, bookingtable.movieId FROM bookedseats INNER JOIN bookingtable ON bookedseats.bookingId = bookingtable.id 
					HAVING bookedseats.seatId = :seatId AND bookingtable.movieId = :movieId";
					$params = [
						':seatId' => $postData['seatId'],
						':movieId' => $postData['movieId']
					];
					$record = getRecord($query, $params);
					if(!empty($record)){
						$reservedDb = $reservedDb + 1;
					}
				}
				
				//Fogalat székek tábla feltöltése
				if($reservedDb == 0){
					foreach($_POST['seats'] as $seatId){
						$postData = [
							'bookingId' => $bookingId,
							'seatId' => $seatId
						];
						$query = "INSERT INTO bookedseats (bookingId, seatId) VALUES (:booking_id, :seat_id)";
						$params = [
							':booking_id' => $postData['bookingId'],
							':seat_id' => $postData['seatId']
						];
						require_once DATABASE_CONTROLLER;
						if(!executeDML($query, $params)) {
							echo "Hiba az adatbevitel során!";
						} 
					}
					header('Location: index.php');
				} else {
					$postData = [
							'Id' => $bookingId
						];
						$query = "DELETE FROM bookingtable WHERE id = :Id";
						$params = [
							':Id' => $postData['Id']
						];
						require_once DATABASE_CONTROLLER;
						if(!executeDML($query, $params)) {
							echo "Hiba az adatbevitel során!";
						} 
				}
				echo "Valamelyik szék már foglalt!";
			} else {
				echo "Maximálisan 4 szék foglalható!";
			}
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
        <form method="post">
    	<button type="submit"  name="book" class="btn btn-outline-secondary">Foglalás</button>
    	<p> <?php
    		$title
    	?> </p>
		<table>
			<tr>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="1" value="1"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="2" value="2"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="3" value="3"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="4" value="4"></div></th>
				<th></th>
				<th></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="5" value="5"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="6" value="6"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="7" value="7"></div></th>
				<th><div class="seat"><input type="checkbox" name="seats[]" id="8" value="8"></div></th>				
			</tr>
			<tr>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="9" value="9"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="10" value="10"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="11" value="11"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="12" value="12"></div></td>
				<td></td>
				<td></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="13" value="13"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="14" value="14"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="15" value="15"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="16" value="16"></div></td>
			</tr>
			<tr>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="17" value="17"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="18" value="18"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="19" value="19"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="20" value="20"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="21" value="21"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="22" value="22"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="23" value="23"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="24" value="24"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="25" value="25"></div></td>
				<td><div class="seat"><input type="checkbox" name="seats[]" id="26" value="26"></div></td>
			</tr>
		</table>
        </form>
	</content>
  </div>
</body>
</html>
