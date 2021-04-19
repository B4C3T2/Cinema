<?php
Class DataBase{
  public string $servername = "localhost";
  public string $username = "root";
  public string $password = "";
  public string $dbname = "cinema_database";
  var $conn;

  function getConnstring() {
    $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
      
    if (mysqli_connect_errno()) {
       printf("Connect failed: %s\n", mysqli_connect_error());
       exit();
    } else {
       $this->conn = $con;
      }
      return $this->conn;
    }
    function checkBooking($bookingId) {
      $con = $query="SELECT id FROM bookingTable WHERE id='".$bookingId."'";
      $result=mysqli_query($this -> conn, $query);

    }
  }
?>