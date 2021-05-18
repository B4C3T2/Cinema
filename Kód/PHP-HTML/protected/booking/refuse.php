<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['refuse'])) {
	$postData = [
		'booking_id' => $_POST['bookingId'] 
	];
		if(empty($postData['booking_id'])){
		echo "Hiányzó adat!";
	} else {
		$query = "DELETE FROM bookingtable WHERE id = :booking_id AND uid = :uid";
		$params = [
			':booking_id' => $postData['booking_id'],
			':uid' => $_SESSION['uid']
		];
		require_once DATABASE_CONTROLLER;
		if(!executeDML($query, $params)) {
			echo "Önnek nincs ilyen azonisítójú foglalása!";
		}
		$query = "DELETE FROM bookedseats WHERE bookingId = :booking_id";
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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Lemondás</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="../CSS/bejelentkezes_style.css">
  <link rel="shortcut icon" href="../../CSS/pictures/icon.png"/>
</head>
<body>
  <div>
    <header>Lemondás<hr></header>  
    <nav>
      <div class="login-wrapper">
        <form method="post" class="form">
          <table>
            <tr>
              <td>Fogalalás azonosító:</td>
              <td><input type="text" name="bookingId" id="bookingId" maxlength="20" required></td>
            </tr>
            <tr>
              <td class="bejelgomb">
                <button type="submit"  name="refuse" class="btn btn-outline-secondary">Lemondás</button>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </nav>
  </div>
</body>
</html>