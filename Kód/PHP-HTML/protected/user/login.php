<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
  $postData = [
    'uid' => $_POST['uid'],
    'password' => $_POST['password']
  ];

    if(empty($postData['uid']) || empty($postData['password'])) {
    echo "Hiányzó adat(ok)!";
  } else if(!UserLogin($postData['uid'], $postData['password'])) {
    echo "A felhasználónév vagy a jelszó hibás!";
  } else if(!UserLogin($postData['email'], $postData['password'])) {
    echo "Hibás email cím vagy jelszó!";
  }

  $postData['password'] = "";
}
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Bejelentkezés</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="../CSS/bejelentkezes_style.css">
  <link rel="shortcut icon" href="../../CSS/pictures/icon.png"/>
</head>
<body>
  <div>
    <header>Bejelentkezés<hr></header>
    <h2>A Hyper Cinema oldalán található filmek böngészéséhez és a jegyfoglaláshoz bejelentkezhet,<br> vagy ha még nem tag, hozzáadhatja fiókját a <a href="index.php?P=register" title="Kattintson ide a regisztrációhoz!">regisztráció</a> segítségével.</h2>
    <nav>
      <div class="login-wrapper">
        <form method="post">
  <div class="form-group">
    <label>Felhasználónév</label>
    <input type="text" class="form-control" id="loginUsername" name="uid" value="<?= isset($postData) ? $postData['uid'] : '';?>">
    <small id="loginUsername" class="form-text text-muted">Soha ne add meg az email címed más személynek!</small>
  </div>
  <div class="form-group">
    <label for="loginPassword">Jelszó</label>
    <input type="password" class="form-control" id="loginPassword" name="password" value="">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Bejelentkezés</button>
</form>
      </div>
    </nav>

    <content></content>
  </div>
</body>
</html>