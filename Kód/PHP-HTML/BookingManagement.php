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
		public $
		;
		
		function Query($id){
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
		
		function Booking($loggedInUser, $selectedSeats, $id){
			global $connection;
			$query="INSERT INTO booking SET id='".$id."', booked_seats='".$selectedSeats."'";
			if(mysqli_query($connection, $query)){
				$response='Successful booking.';
			}
			else{
				$response='Booking failed!';
			}
			return $response;
		}
		
		function BillGenerate($selectedSeats){
			$prize = count($selectedSeats) * 1500;
			return $prize;
		}
		
		function Modificate($loggedInUser, $bookingId, $selectedSeats){
			//loggedInUser and bookingId will be checked by database connection
			$query="UPDATE booking SET booked_seats='".$selectedSeats."' WHERE id='".$id"'";
			if(mysqli_query($connection, $query)){
				$response='Successfully modificated the booking.';
			}
			else{
				$response='Booking modification failed.';
			}
			return true;
		}
		
		function Leaving($id){
			$query="DELETE FROM booking WHERE id=".$id."'";
			
		}
		
		function Refuse($loggedInUser, $bookingId){
			//loggedInUser and bookingId will be checked by database connection
			$query="DELETE FROM booking WHERE booking_id=".$bookingId."'";
			return true;
		}
	}
?>