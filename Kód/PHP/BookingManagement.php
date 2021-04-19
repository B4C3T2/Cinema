<?php
	include("DatabaseManagement.php");
	class BookigManagement{
		//getting connection
		$database = new DataBase();
		$connection =  $database->getConnstring();
		
		public $firstName;
		public $lastName;
		public $email;
		public $passWord;
		public $bookingId;
		
		function Query(){
			global $connection;
			//fetching data
			$query="SELECT * FROM movie WHERE id='".$id."'";
			$result=mysqli_query($connection, $query);
			$response=array();
			while($row=mysqli_fetch_array($result))
			{
				$response[]=$row;
			}
			//returning the response
			return $response();
		}
		
		function Booking($loggedInUser, $selectedSeats){
			//Database connection will be soon(bookingId will be set by database connection)
			return "Successful booking ".$this->bookingId;
		}
		
		function BillGenerate($selectedSeats){
			$prize = count($selectedSeats) * 1500;
			return $prize;
		}
		
		function Modificate($loggedInUser, $bookingId, $selectedSeats){
			//Database connection will be soon(loggedInUser and bookingId will be checked by database connection)
			return true;
		}
		
		function Leaving(){
			//Booking table will be flushed in the database
		}
		
		function Refuse($loggedInUser, $bookingId){
			//Database connection will be soon(loggedInUser and bookingId will be checked by database connection)
			//If the datas are matching, the booking will be deleted
			return true;
		}
	}
?>