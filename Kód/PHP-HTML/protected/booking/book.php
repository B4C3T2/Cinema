
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book'])) {
	$postData = [
		'user_id' => $_POST['user_id'],
		'movie_id' => $_POST['movie_id'],
		'seat_id' => $_POST['seat_id']
	];
		if(empty($postData['user_id']) || empty($postData['movie_id']) || empty($postData['seat_id']){
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