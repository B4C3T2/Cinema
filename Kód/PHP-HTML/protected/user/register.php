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



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Regisztráció</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="../CSS/regisztracio_style.css">
  <link rel="shortcut icon" href="../CSS/pictures/icon.png"/>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <div class="logo">
          <button type="button"  value="logo" style="text-align:center;">
            <a href ="home.html">Hyper Cinema</a>
          </button>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="home.html">Főoldal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bejelentkezes.html">Bejelentkezés</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Regisztráció</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <div>
    <header>Regisztráció<hr></header>
    <h2>A Hyper Cinema oldalán található filmek böngészéséhez és a jegyfoglaláshoz regisztrálnia kell,<br> vagy ha már tag, bejelentkezhet fiókjába a <a href="bejelentkezes.html" title="Kattintson ide a bejelentkezéshez!">bejelentkezés</a> segítségével.</h2>
    <nav>
      <div class="login-wrapper">
        <form action="" class="form">
          <table>
            <tr>
              <td>Felhasználónév:</td>
              <td><input type="text" name="loginUser" id="loginUser" maxlength="20" required></td>
            </tr>
            <tr>
              <td>Vezetéknév:</td>
              <td><input type="text" name="lastName" id="lastName" maxlength="20" required></td>
            </tr>
            <tr>
              <td>Keresztnév:</td>
              <td><input type="text" name="firstName" id="firstName" maxlength="20" required></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><input type="text" name="email" id="email" maxlength="60" required></td>
            </tr>
            <tr>
              <td>Jelszó:</td>
              <td><input type="password" name="passWord" id="passWord" maxlength="250" required></td>
            </tr>
            <tr>
              <td>Jelszó újra:</td>
              <td><input type="password" name="loginPasswordAgain" id="loginPasswordAgain" maxlength="250" required></td>
            </tr>
            <tr>
              <td class="form-gombok">
                <button type="button"  value="megse" class="btn btn-outline-secondary">
                  <a href ="home.html">Mégse</a>
                </button>
              </td>
              <td class="form-gombok">
                <button type="submit"  value="regisztracio" class="btn btn-outline-secondary">
                  <a href ="bejelentkezes.html">Regisztráció</a>
                </button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="bejelentkezes.html" title="Kattintson ide a bejelentkezéshez!">Már tag vagyok!</a>
              </td>
              <td>
                
              </td>
            </tr>
          </table>
        </form>
      </div>
    </nav>

    <content></content>
    <footer>
      Copyright &copy; 2021 HyperTeam
    </footer>
  </div>
</body>
</html>