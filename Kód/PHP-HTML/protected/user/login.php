<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']))
  $postData = [
    'uid' => $_POST['uid'],
    'password' => $_POST['password']
  ];

    if(empty($postData['uid']) || empty($postData['password'])) {
    echo "Hiányzó adat(ok)!";




?>