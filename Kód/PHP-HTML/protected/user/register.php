<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
  $postData = [
    'fname' => $_POST['first_name'],
    'lname' => $_POST['last_name'],
    'email' => $_POST['email'],
    'uid' => $_POST['uid'],
    'password' => $_POST['password'],
    'password1' => $_POST['password1']
  ];

  if(empty($postData['fname']) || empty($postData['lname']) || empty($postData['email']) || empty($postData['uid']) || empty($postData['password']) || empty($postData['password1'])) {
    echo "Hiányzó adat(ok)!";
  } else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Az email cím nem érvényes!";
  } else if ($postData['password'] != $postData['password1']) {
    echo "A jelszavak nem egyeznek!";
  } else if(strlen($postData['password']) < 3) {
    echo "A jelszónak legalább 3 karakterből kell állnia!";
  } else if(!UserRegister($postData['email'], $postData['password'], $postData['fname'], $postData['lname'], $postData['uid'])) {
    echo "A regisztráció sikertelen!";
  }

  $postData['password'] = $postData['password1'] = "";
}
?>



<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Regisztráció</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="../CSS/regisztracio_style.css">
  <link rel="shortcut icon" href="../../CSS/pictures/icon.png"/>
</head>
<body>

  <div>
    <header>Regisztráció<hr></header>
    <h2>A Hyper Cinema oldalán található filmek böngészéséhez és a jegyfoglaláshoz regisztrálnia kell,<br> vagy ha már tag, bejelentkezhet fiókjába a <a href="index.php?P=login" title="Kattintson ide a bejelentkezéshez!">bejelentkezés</a> segítségével.</h2>
    <nav>
      <div class="login-wrapper">
        <form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="registerFirstName">Keresztnév</label>
      <input type="text" class="form-control" id="registerFirstName" name="first_name" value="<?=isset($postData) ? $postData['fname'] : "";?>">
    </div>
    <div class="form-group col-md-6">
      <label for="registerLastName">Vezetéknév</label>
      <input type="text" class="form-control" id="registerLastName" name="last_name" value="<?=isset($postData) ? $postData['lname'] : "";?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="registerEmail">Email cím</label>
      <input type="email" class="form-control" id="registerEmail" name="email" value="<?=isset($postData) ? $postData['email'] : "";?>">
    </div>
    <div class="form-group col-md-6">
      <label for="registerUsername">Felhasználónév</label>
      <input type="text" class="form-control" id="registerUsername" name="uid" value="<?=isset($postData) ? $postData['uid'] : "";?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="registerPassword">Jelszó</label>
      <input type="password" class="form-control" id="registerPassword" name="password" value="">
    </div>
    <div class="form-group col-md-6">
      <label for="registerPassword1">Jelszó mégegyszer</label>
      <input type="password" class="form-control" id="registerPassword1" name="password1" value="">
    </div>
  </div>

  <button type="submit" class="btn btn-primary" name="register">Regisztrálás</button>
</form>
      </div>
    </nav>

    <content></content>

  </div>
</body>
</html>