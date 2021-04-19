<?php
Class DataBase{
  var $servername = "localhost";
  var $username = "root";
  var $password = "";
  var $dbname = "rest";
  var $conn;

  function getConnstring() {
    $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error()); 
  }
}
?>