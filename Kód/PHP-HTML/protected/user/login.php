<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']))
  $postData = [
    'uid' => $_POST['uid'],
    'password' => $_POST['password']
  ];




?>