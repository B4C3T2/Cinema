<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']))
  $postData = [
    'uid' => $_POST['uid'],
    'password' => $_POST['password']
  ];

    if(empty($postData['uid']) || empty($postData['password'])) {
    echo "Hiányzó adat(ok)!";
  } else if(!UserLogin($postData['uid'], $postData['password'])) {
    echo "A felhasználónév vagy a jelszó hibás!";
  }

  $postData['password'] = "";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hyper Cinema - Bejelentkezés</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">
  <!-- Saját CSS -->
  <link rel="stylesheet" type="text/css" href="../CSS/bejelentkezes_style.css">
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
              <a class="nav-link active" aria-current="page" href="#">Bejelentkezés</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="regisztracio.html">Regisztráció</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <div>
    <header>Bejelentkezés<hr></header>
    <h2>A Hyper Cinema oldalán található filmek böngészéséhez és a jegyfoglaláshoz bejelentkezhet,<br> vagy ha még nem tag, hozzáadhatja fiókját a <a href="regisztracio.html" title="Kattintson ide a regisztrációhoz!">regisztráció</a> segítségével.</h2>
    <nav>
      <div class="login-wrapper">
        <form action="" class="form">
          <table>
            <tr>
              <td>Felhasználónév:</td>
              <td><input type="text" name="loginUser" id="loginUser" maxlength="20" required></td>
            </tr>
            <tr>
              <td>Jelszó:</td>
              <td><input type="password" name="loginPassword" id="loginPassword" maxlength="250" required></td>
            </tr>
            <tr>
              <td>
                
              </td>
              <td class="bejelgomb">
                <button type="submit"  value="bejelentkezes" class="btn btn-outline-secondary">
                  <a href ="home.html">Bejelentkezés</a>
                </button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="regisztracio.html" title="Kattintson ide a regisztrációhoz!">Még nem vagyok tag!</a>
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