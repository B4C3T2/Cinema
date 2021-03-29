<?php
	class BookigManagement{
		public $firstName;
		public $lastName;
		public $email;
		public $passWord;
		public $bookingId;
		
		function Query(){
			//Database connection will be soon
			return new array();
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
	}
?>