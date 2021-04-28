
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['refuse'])) {
	$postData = [
		'booking_id' => $_POST['booking_id']
	];
		if(empty($postData['booking_id'])){
		echo "Hiányzó adat!";
	} else {
		$query = "DELETE FROM booking_seats WHERE id = :booking_id; ";
		$params = [
			':booking_id' => $postData['booking_id']
		];
		require_once DATABASE_CONTROLLER;
		if(!executeDML($query, $params)) {
			echo "Hiba az visszautasítás során!";
		} header('Location: index.php');
	}
}
?>

